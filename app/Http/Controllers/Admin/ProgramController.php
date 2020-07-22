<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactFeedback;
use App\Models\Program;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Image;
use File;
use Str;

class ProgramController extends Controller
{
    public $category;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $category = $request->category;
       
        return view('admin.programs',compact('category'));
        // $programs = Program::orderBy('created_at', 'desc')->paginate(20);
        // return view('admin.programs', compact('programs'));
    }
    public function dataTableValues($category=NULL)
    {
        $programs = Program::where('category', $category)->get();
        if (request()->ajax()) {
            return DataTables::of($programs)
                ->addIndexColumn()
                ->addColumn('details', function (Program $program) {
                    return Str::limit($program->details, 100);
                })
                ->addColumn('image', function (Program $program) {
                    return "<img style='height:80px; width:100px' src='" . asset('program_images/' . $program->image) . "' />";
                })
                ->addColumn('action', function (Program $program) {
                    return
                        "<a class='btn btn-primary' href='" . route('admin.program.edit', $program->id) . "'>Edit</a> ||  " .

                        '<a class="btn btn-danger"  onclick="if (confirm(\'Are you sure to delete?\')){document.getElementById(\'delete-form' . $program->id . '\').submit();}else{event.preventDefault()}" href="#" >Delete</a>

                     <form id="delete-form' . $program->id . '" action="' . route('admin.program.destroy', $program->id) . '" method="POST" style="display: none;"> "' . method_field('DELETE') . '" "' . csrf_field() . '"  </form>';
                })
                ->rawColumns(['action', 'image', 'details'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = $request->category;
        return view('admin.program_create', compact('category'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'title' => 'required|max:191',
            'details' => 'required|max:65500',
            'image' => 'required|image|max:15000',
            'category' => 'nullable|string|max:191',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(570, 380)->save('program_images/' . $imageName, 50);
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('program_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('program_images/big-' . $imageName, 50);
        }

        Program::create(array_merge($request->all(), ['image' => $imageName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('admin.program_edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'details' => 'required|max:65500',
            'image' => 'nullable|image|max:15000',
            'tags' => 'nullable|string|max:191',
            'posted_by' => 'nullable|string|max:191',
        ]);
        if ($request->hasFile('image')) {
            //delete previous image
            if (File::exists('program_images/' . $program->image)) {
                File::delete('program_images/' . $program->image);
            }
            if (File::exists('program_images/big-' . $program->image)) {
                File::delete('program_images/big-' . $program->image);
            }
            //add new image
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('program_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('program_images/big-' . $imageName, 50);
        } else {
            $imageName = $program->image;
        }

        $program->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        if (File::exists('program_images/' . $program->image)) {
            File::delete('program_images/' . $program->image);
        }
        if (File::exists('program_images/big-' . $program->image)) {
            File::delete('program_images/big-' . $program->image);
        }
        $program->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
