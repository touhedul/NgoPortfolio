<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use Illuminate\Http\Request;
use Image;
use File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_create');
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
            'details' => 'required|max:65500',
            'image' => 'required|image|max:15000',
            'tags' => 'nullable|string|max:191',
            'posted_by' => 'nullable|string|max:191',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(570, 380)->save('blog_images/' . $imageName, 50);
            Image::make($image)->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('blog_images/' . $imageName, 50);
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('blog_images/big-' . $imageName, 50);
        }

        Blog::create(array_merge($request->all(), ['image' => $imageName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog_edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
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
            if (File::exists('blog_images/' . $blog->image)) {
                File::delete('blog_images/' . $blog->image);
            }
            if (File::exists('blog_images/big-' . $blog->image)) {
                File::delete('blog_images/big-' . $blog->image);
            }
            //add new image
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('blog_images/' . $imageName, 50);
            Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('blog_images/big-' . $imageName, 50);
        } else {
            $imageName = $blog->image;
        }

        $blog->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if (File::exists('blog_images/' . $blog->image)) {
            File::delete('blog_images/' . $blog->image);
        }
        if (File::exists('blog_images/big-' . $blog->image)) {
            File::delete('blog_images/big-' . $blog->image);
        }
        $blog->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
