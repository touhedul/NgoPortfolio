<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Yajra\DataTables\DataTables;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Image;
use File;
use Str;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        if (request()->ajax()) {
            return DataTables::of($testimonials)
                ->addIndexColumn()
                ->addColumn('image', function (Testimonial $testimonial) {
                    return "<img alt='No Imgae Found' style='height:80px; width:100px' src='" . asset('testimonial_images/' . $testimonial->image) . "' />";
                })
                ->addColumn('about', function (Testimonial $testimonial) {
                    return Str::limit($testimonial->about, 50);
                })
                ->addColumn('message', function (Testimonial $testimonial) {
                    return Str::limit($testimonial->message, 50);
                })
                ->addColumn('action', function (Testimonial $testimonial) {
                    return
                        "<a class='btn btn-primary' href='" . route('admin.testimonial.edit', $testimonial->id) . "'>Edit</a> ||  " .

                        '<a class="btn btn-danger"  onclick="if (confirm(\'Are you sure to delete?\')){document.getElementById(\'delete-form' . $testimonial->id . '\').submit();}else{event.preventDefault()}" href="#" >Delete</a>

                     <form id="delete-form' . $testimonial->id . '" action="' . route('admin.testimonial.destroy', $testimonial->id) . '" method="POST" style="display: none;"> "' . method_field('DELETE') . '" "' . csrf_field() . '"  </form>';
                })
                ->rawColumns(['action', 'image','message'])
                ->make(true);
        }
        return view('admin.testimonials');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial_create');
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
            'about' => 'required|string|max:191',
            'message' => 'required|max:65500',
            'image' => 'nullable|image|max:15000',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(570, 380)->save('testimonial_images/' . $imageName, 50);
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('testimonial_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('testimonial_images/big-' . $imageName, 50);
        }else{
            $imageName = "";
        }

        Testimonial::create(array_merge($request->all(), ['image' => $imageName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial_edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->validate($request, [
            'name' => 'required|max:191',
            'about' => 'required|string|max:191',
            'message' => 'required|max:65500',
            'image' => 'nullable|image|max:15000',
        ]);
        if ($request->hasFile('image')) {
            //delete previous image
            if (File::exists('testimonial_images/' . $testimonial->image)) {
                File::delete('testimonial_images/' . $testimonial->image);
            }
            if (File::exists('testimonial_images/big-' . $testimonial->image)) {
                File::delete('testimonial_images/big-' . $testimonial->image);
            }
            //add new image
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('testimonial_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('testimonial_images/big-' . $imageName, 50);
        } else {
            $imageName = $testimonial->image;
        }

        $testimonial->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if (File::exists('testimonial_images/' . $testimonial->image)) {
            File::delete('testimonial_images/' . $testimonial->image);
        }
        if (File::exists('testimonial_images/big-' . $testimonial->image)) {
            File::delete('testimonial_images/big-' . $testimonial->image);
        }
        $testimonial->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
