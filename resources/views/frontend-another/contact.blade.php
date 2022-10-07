@extends('layouts.frontend')
@section('title','Contact Us')
@section('content')
@include('includes.banner',['programName'=>'Contact'])
<section class="padding-top-70">
    <div class="container">
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.0943437269484!2d88.67794121499675!3d24.551401684200563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb8ce4ef566df5%3A0x1ccdd5c7addc5c9d!2sJahanabad%20Union%20Council!5e0!3m2!1sen!2sbd!4v1596194213663!5m2!1sen!2sbd" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
        <iframe src="{{setting('office_map')}}" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
<br>
<div class="container">
    <div class="col-md-6"><br>
        <h3>Contact Us</h3><br>
        <form class="contact-form" data-parsley-validate method="POST" action="{{route('submit.feedback')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name*</label>
                @guest
                <input data-parsley-trigger="change" value="{{old('name')}}" required type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="nameHelp" placeholder="Enter name">
                @else
                <input data-parsley-trigger="change" required type="text" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->name}}" name="name" aria-describedby="nameHelp" placeholder="Enter name">
                @endguest

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address*</label>
                @guest
                <input data-parsley-trigger="change" value="{{old('email')}}" required type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                @else
                <input data-parsley-trigger="change" required type="email" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->email}}" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                @endguest

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone*</label>
                <input data-parsley-trigger="change" required value="{{old('phone')}}" required type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" placeholder="Enter phone">

            </div>
            <div class="form-group">
                Message* <textarea name="message" required class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('message')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- MAP -->
    <div class="col-md-6">
        <div id="map">
            <div class="contact-info" style="height: inherit;">
                <ul class="row" style="height: inherit;">
                    <li class="col-md-12" style="height: inherit;">
                        <article style="height: inherit; padding-top: 90px;">
                            <br>
                            <h5>Head Office</h5>
                            <p> {{setting('office_name')}}
                            <br>{{setting('office_address')}}
                             <br>{{setting('office_phone')}} <p>
                            <span class="margin-top-30"><i class="fa fa-phone"></i> {{setting('office_phone')}} </span>
                            <span class="primary-color"><i class="fa fa-envelope"></i> {{setting('office_email')}} </span>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
