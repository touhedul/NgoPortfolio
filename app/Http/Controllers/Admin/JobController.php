<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Yajra\DataTables\DataTables;
use App\Models\Job;
use Illuminate\Http\Request;
use Image;
use File;
use Str;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        if (request()->ajax()) {
            return DataTables::of($jobs)
                ->addIndexColumn()
                ->addColumn('image', function (Job $job) {
                    return "<img alt='No Imgae Found' style='height:80px; width:100px' src='" . asset('job_images/' . $job->image) . "' />";
                })
                ->addColumn('details', function (Job $job) {
                    return Str::limit($job->details, 50);
                })
                ->addColumn('last_date', function (Job $job) {
                    return date('d M Y', strtotime($job->last_date));
                })
                ->addColumn('action', function (Job $job) {
                    return
                        "<a class='btn btn-primary' href='" . route('admin.job.edit', $job->id) . "'>Edit</a> ||  " .

                        '<a class="btn btn-danger"  onclick="if (confirm(\'Are you sure to delete?\')){document.getElementById(\'delete-form' . $job->id . '\').submit();}else{event.preventDefault()}" href="#" >Delete</a>

                     <form id="delete-form' . $job->id . '" action="' . route('admin.job.destroy', $job->id) . '" method="POST" style="display: none;"> "' . method_field('DELETE') . '" "' . csrf_field() . '"  </form>';
                })
                ->rawColumns(['action', 'image','details'])
                ->make(true);
        }
        return view('admin.jobs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job_create');
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
            'location' => 'required|string|max:191',
            'details' => 'required|max:65500',
            'last_date' => 'required|date',
            'image' => 'nullable|image|max:15000',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(570, 380)->save('job_images/' . $imageName, 50);
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('job_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('job_images/big-' . $imageName, 50);
        }else{
            $imageName = "";
        }

        Job::create(array_merge($request->all(), ['image' => $imageName]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('admin.job_edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $this->validate($request, [
            'title' => 'required|max:191',
            'location' => 'required|string|max:191',
            'details' => 'required|max:65500',
            'last_date' => 'required|date',
            'image' => 'nullable|image|max:15000',
        ]);
        if ($request->hasFile('image')) {
            //delete previous image
            if (File::exists('job_images/' . $job->image)) {
                File::delete('job_images/' . $job->image);
            }
            if (File::exists('job_images/big-' . $job->image)) {
                File::delete('job_images/big-' . $job->image);
            }
            //add new image
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('job_images/' . $imageName, 50);
            Image::make($image)->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('job_images/big-' . $imageName, 50);
        } else {
            $imageName = $job->image;
        }

        $job->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        if (File::exists('job_images/' . $job->image)) {
            File::delete('job_images/' . $job->image);
        }
        if (File::exists('job_images/big-' . $job->image)) {
            File::delete('job_images/big-' . $job->image);
        }
        $job->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
