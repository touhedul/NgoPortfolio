<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Yajra\DataTables\DataTables;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Image;
use File;
use Str;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        if (request()->ajax()) {
            return DataTables::of($galleries)
                ->addIndexColumn()
                ->addColumn('image', function (Gallery $gallery) {
                    return "<img style='height:80px; width:100px' src='" . asset('gallery_images/' . $gallery->image) . "' />";
                })
                ->addColumn('action', function (Gallery $gallery) {
                    return

                        '<a class="btn btn-danger"  onclick="if (confirm(\'Are you sure to delete?\')){document.getElementById(\'delete-form' . $gallery->id . '\').submit();}else{event.preventDefault()}" href="#" >Delete</a>

                     <form id="delete-form' . $gallery->id . '" action="' . route('admin.gallery.destroy', $gallery->id) . '" method="POST" style="display: none;"> "' . method_field('DELETE') . '" "' . csrf_field() . '"  </form>';
                })
                ->rawColumns(['action', 'image','about'])
                ->make(true);
        }
        return view('admin.galleries');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery_create');
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
            'category' => 'required|max:191',
            'image' => 'required|image|max:15000',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(570, 380)->save('gallery_images/' . $imageName, 50);
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('gallery_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('gallery_images/big-' . $imageName, 50);
        }

        Gallery::create(array_merge($request->all(), ['image' => $imageName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        abort(404);
        return view('admin.gallery_edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request, [
            'category' => 'required|max:191',
            'image' => 'nullable|image|max:15000',
        ]);
        if ($request->hasFile('image')) {
            //delete previous image
            if (File::exists('gallery_images/' . $gallery->image)) {
                File::delete('gallery_images/' . $gallery->image);
            }
            if (File::exists('gallery_images/big-' . $gallery->image)) {
                File::delete('gallery_images/big-' . $gallery->image);
            }
            //add new image
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('gallery_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('gallery_images/big-' . $imageName, 50);
        } else {
            $imageName = $gallery->image;
        }

        $gallery->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if (File::exists('gallery_images/' . $gallery->image)) {
            File::delete('gallery_images/' . $gallery->image);
        }
        if (File::exists('gallery_images/big-' . $gallery->image)) {
            File::delete('gallery_images/big-' . $gallery->image);
        }
        $gallery->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
