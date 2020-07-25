<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Yajra\DataTables\DataTables;
use App\Models\Branch;
use Illuminate\Http\Request;
use Image;
use File;
use Str;
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();
        if (request()->ajax()) {
            return DataTables::of($branches)
                ->addIndexColumn()
                ->addColumn('image', function (Branch $branch) {
                    return "<img alt='No Imgae Found' style='height:80px; width:100px' src='" . asset('branch_images/' . $branch->image) . "' />";
                })
                ->addColumn('details', function (Branch $branch) {
                    return Str::limit($branch->details, 50);
                })
                ->addColumn('action', function (Branch $branch) {
                    return
                        "<a class='btn btn-primary' href='" . route('admin.branch.edit', $branch->id) . "'>Edit</a> ||  " .

                        '<a class="btn btn-danger"  onclick="if (confirm(\'Are you sure to delete?\')){document.getElementById(\'delete-form' . $branch->id . '\').submit();}else{event.preventDefault()}" href="#" >Delete</a>

                     <form id="delete-form' . $branch->id . '" action="' . route('admin.branch.destroy', $branch->id) . '" method="POST" style="display: none;"> "' . method_field('DELETE') . '" "' . csrf_field() . '"  </form>';
                })
                ->rawColumns(['action', 'image','details'])
                ->make(true);
        }
        return view('admin.branches');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.branch_create');
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
            'title' => 'required|max:191',
            'short_details' => 'required|string|max:191',
            'details' => 'required|max:65500',
            'phone' => 'required|string|max:191',
            'image' => 'nullable|image|max:15000',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(570, 380)->save('branch_images/' . $imageName, 50);
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('branch_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('branch_images/big-' . $imageName, 50);
        }else{
            $imageName = "";
        }

        Branch::create(array_merge($request->all(), ['image' => $imageName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('admin.branch_edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'short_details' => 'required|string|max:191',
            'details' => 'required|max:65500',
            'phone' => 'required|string|max:191',
            'image' => 'nullable|image|max:15000',
        ]);
        if ($request->hasFile('image')) {
            //delete previous image
            if (File::exists('branch_images/' . $branch->image)) {
                File::delete('branch_images/' . $branch->image);
            }
            if (File::exists('branch_images/big-' . $branch->image)) {
                File::delete('branch_images/big-' . $branch->image);
            }
            //add new image
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('branch_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('branch_images/big-' . $imageName, 50);
        } else {
            $imageName = $branch->image;
        }

        $branch->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        if (File::exists('branch_images/' . $branch->image)) {
            File::delete('branch_images/' . $branch->image);
        }
        if (File::exists('branch_images/big-' . $branch->image)) {
            File::delete('branch_images/big-' . $branch->image);
        }
        $branch->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
