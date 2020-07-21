<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Image;
use File;
use Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        if (request()->ajax()) {
            return DataTables::of($user)
                ->addIndexColumn()
                // ->addColumn('name', function (User $user) {
                //     return $user->name;
                // })
                // ->addColumn('email', function (User $user) {
                //     return $user->email;
                // })
                // ->addColumn('phone', function (User $user) {
                //     return $user->phone;
                // })
                ->addColumn('image', function (User $user) {
                    return "<img style='height:80px; width:100px' src='" . asset('user_images/' . $user->image) . "' />";
                })
                ->addColumn('about', function (User $user) {
                    return Str::limit($user->about, 10);
                })
                ->addColumn('action', function (User $user) {
                    return
                        "<a href='" . route('admin.user.show', $user->id) . "'>View</a> ||  " .
                        "<a href='" . route('admin.user.edit', $user->id) . "'>Edit</a> ||  " .

                        '<a style="color:red"  onclick="if (confirm(\'Are you sure to delete?\')){document.getElementById(\'delete-form' . $user->id . '\').submit();}else{event.preventDefault()}" href="#" >Delete</a>

                     <form id="delete-form' . $user->id . '" action="' . route('admin.user.destroy', $user->id) . '" method="POST" style="display: none;"> "' . method_field('DELETE') . '" "' . csrf_field() . '"  </form>';
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        return view('admin.users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_create');
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
            'name' => ['required', 'string', 'max:191'],
            'about' => ['string', 'max:65535', 'nullable'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'phone' => ['nullable'],
            'address' => ['nullable', 'string', 'max:191'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => ['nullable', 'image', 'max:15000'],
        ]);

        $imageName = "";
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(250, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_images/' . $imageName);
        }

        $password = bcrypt($request->password);

        User::create(array_merge($request->all(), ['image' => $imageName, 'password' => $password]));
        return back()->with('success', 'Successfully Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:191'],
            'about' => ['nullable', 'string', 'max:65500'],
            'phone' => ['nullable'],
            'address' => ['nullable', 'string', 'max:191'],
            'image' => ['nullable', 'image', 'max:15000'],
        ]);

        $imageName = $user->image;
        if ($request->hasFile('image')) {
            if (File::exists('user_images/' . $user->image)) {
                File::delete('user_images/' . $user->image);
            }
            $image = $request->file('image');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(250, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('user_images/' . $imageName);
            $user->image = $imageName;
        }
        $user->fill(array_merge($request->all(), ['image' => $imageName]))->save();
        return back()->with('success', 'Update Successful.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (File::exists('user_images/' . $user->image)) {
            File::delete('user_images/' . $user->image);
        }

        $user->delete();
        return back()->with('success', 'Delete Successful.');
    }
}
