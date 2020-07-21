@extends('layouts.admin')
@section('title','Add User')
@section('page-title','Add User')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form data-parsley-validate enctype="multipart/form-data" action="{{route('admin.user.store')}}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name*</label>
                        <input autofocus required type="text" value="{{old('name')}}" name="name"
                            style="background: #f5f6fa" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>About </label>
                        <textarea type="text" name="about" class="form-control" style="background: #f5f6fa"
                            placeholder="About yourself">{{old('about')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Email address*</label>
                        <input style="background: #f5f6fa" value="{{old('email')}}" name="email" required type="email"
                            class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input style="background: #f5f6fa" value="{{old('phone')}}" name="phone" type="text"
                            class="form-control" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input style="background: #f5f6fa" value="{{old('address')}}" name="address" type="text"
                            class="form-control" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label>Password*</label>
                        <input style="background: #f5f6fa" required name="password" minlength="8" type="password"
                            class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password*</label>
                        <input style="background: #f5f6fa" required name="password_confirmation" minlength="8"
                            type="password" class="form-control" placeholder="ConfirmPassword">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input style="background: #f5f6fa" name="image" type="file" class="form-control"
                            placeholder="Enter Name">
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