@extends('layouts.admin')
@section('title','Edit User')
@section('page-title','Edit User')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body" style="background: #d8e3da">
                <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.user.update',$user->id)}}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Name*</label>
                        <input autofocus required type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>About </label>
                        <textarea  type="text" name="about" class="form-control" placeholder="About yourself">{{ $user->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Email address*</label>
                        <input disabled value="{{$user->email}}" name="email" required  type="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input value="{{$user->phone}}" name="phone"  type="text" class="form-control" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input value="{{$user->address}}" name="address"   type="text" class="form-control" placeholder="Enter Address">
                    </div>
                    
                    <div class="form-group">
                        <label>Image</label><br>
                        <img src="{{asset('user_images/'.$user->image)}}" alt="No Image Found"><br>
                        <input name="image" type="file" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-footer pt-4 pt-2 mt-4 border-top">
                        <button type="submit" class="mb-1 btn btn-success">
                            <i class=" mdi mdi-checkbox-marked-outline mr-1"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection