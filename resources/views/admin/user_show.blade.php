@extends('layouts.admin')
@section('title','Show User')
@section('page-title','Show User')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body" style="background: #d8e3da">
                <form data-parsley-validate enctype="multipart/form-data" action="#" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>Name*</label>
                        <input disabled autofocus required type="text" value="{{$user->name}}" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>About </label>
                        <textarea disabled type="text" name="about" class="form-control" placeholder="About yourself">{{ $user->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Email address*</label>
                        <input disabled value="{{$user->email}}" name="email" required  type="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input disabled value="{{$user->phone}}" name="phone"  type="text" class="form-control" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input disabled value="{{$user->address}}" name="address"   type="text" class="form-control" placeholder="Enter Address">
                    </div>
                    
                    <div class="form-group">
                        <label>Image</label><br>
                        <img src="{{asset('user_images/'.$user->image)}}" alt="No Image Found"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection