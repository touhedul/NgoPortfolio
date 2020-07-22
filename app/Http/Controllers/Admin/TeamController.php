<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Yajra\DataTables\DataTables;
use App\Models\Team;
use Illuminate\Http\Request;
use Image;
use File;
use Str;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        if (request()->ajax()) {
            return DataTables::of($teams)
                ->addIndexColumn()
                ->addColumn('image', function (Team $team) {
                    return "<img style='height:80px; width:100px' src='" . asset('team_images/' . $team->image) . "' />";
                })
                ->addColumn('about', function (Team $team) {
                    return Str::limit($team->about, 50);
                })
                ->addColumn('action', function (Team $team) {
                    return
                        "<a class='btn btn-primary' href='" . route('admin.team.edit', $team->id) . "'>Edit</a> ||  " .

                        '<a class="btn btn-danger"  onclick="if (confirm(\'Are you sure to delete?\')){document.getElementById(\'delete-form' . $team->id . '\').submit();}else{event.preventDefault()}" href="#" >Delete</a>

                     <form id="delete-form' . $team->id . '" action="' . route('admin.team.destroy', $team->id) . '" method="POST" style="display: none;"> "' . method_field('DELETE') . '" "' . csrf_field() . '"  </form>';
                })
                ->rawColumns(['action', 'image','about'])
                ->make(true);
        }
        return view('admin.teams');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team_create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'about' => 'required|max:65500',
            'email' => 'required|email|max:191',
            'phone' => 'required|string|max:191',
            'image' => 'required|image|max:15000',
            'designation' => 'required|string|max:191',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(570, 380)->save('team_images/' . $imageName, 50);
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('team_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('team_images/big-' . $imageName, 50);
        }

        Team::create(array_merge($request->all(), ['image' => $imageName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team_edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'about' => 'required|max:65500',
            'email' => 'required|email|max:191',
            'phone' => 'required|string|max:191',
            'image' => 'nullable|image|max:15000',
            'designation' => 'required|string|max:191',
        ]);
        if ($request->hasFile('image')) {
            //delete previous image
            if (File::exists('team_images/' . $team->image)) {
                File::delete('team_images/' . $team->image);
            }
            if (File::exists('team_images/big-' . $team->image)) {
                File::delete('team_images/big-' . $team->image);
            }
            //add new image
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('team_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('team_images/big-' . $imageName, 50);
        } else {
            $imageName = $team->image;
        }

        $team->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if (File::exists('team_images/' . $team->image)) {
            File::delete('team_images/' . $team->image);
        }
        if (File::exists('team_images/big-' . $team->image)) {
            File::delete('team_images/big-' . $team->image);
        }
        $team->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
