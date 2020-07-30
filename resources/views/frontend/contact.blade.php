@extends('layouts.frontend')
@section('title','Contact Us')
@section('content')
@include('includes.banner',['programName'=>'Contact'])
<section class="padding-top-70">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58144.53047175591!2d88.57099636236786!3d24.380150026228986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefa96a38d031%3A0x10f93a950ed6f410!2sRajshahi!5e0!3m2!1sen!2sbd!4v1595540829142!5m2!1sen!2sbd" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                            <p>Jahanabad, Mohanpur, Rajshahi <p>
                                    <span class="margin-top-30"><i class="fa fa-phone"></i> +8801711062767 </span>
                                    <span class="primary-color"><i class="fa fa-envelope"></i> shataphool@gmail.com </span>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
