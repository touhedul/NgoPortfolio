@extends('layouts.frontend')
@section('title')
    Contact
@endsection
@section('css')
@endsection
@section('content')
    <div class="page-title parallax parallax1 bg-black style1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">
                            Contact
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flat-row background-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form class="flat-contact-form
                        style2 bg-white height-small" method="post"
                        action="{{ route('submit.feedback') }}">
                        @csrf
                        <div class="field clearfix">
                            <div class="wrap-type-input">
                                <div class="input-wrap name">
                                    <input type="text" value="" tabindex="1" placeholder="Name" name="name"
                                        id="name" required>
                                </div>
                                <div class="input-wrap email">
                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email"
                                        id="email" required>
                                </div>
                                <div class="input-wrap last Subject">
                                    <input type="text" value="" placeholder="Phone" name="phone" id="subject"
                                        required>
                                </div>
                            </div>
                            <div class="textarea-wrap">
                                <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required></textarea>
                            </div>
                        </div>
                        <div class="submit-wrap">
                            <button type="submit" class="flat-button bg-theme">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="flat-row pad-top60px pad-bottom0px bg-contact" id="contact_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget-sv sv-information border
                        flat-animation"
                            data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                            <ul class="information">
                                <li><span>Phone: </span>{{ setting('office_phone') }}</li>
                                <li><span>Address: </span>{{ setting('office_address') }}</li>
                                <li><span>Email: </span> {{ setting('office_email') }}
                                </li>
                            </ul>
                            <ul class="short-code flat-socials">
                                <li class="facebook">
                                    <a href="{{ setting('facebook') }}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="{{ setting('youtube') }}"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li class="linkedin">
                                    <a href="{{ setting('linkedin') }}"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-divider d70px"></div>
                    </div>
                    <div class="col-md-5 flat-animation" data-animation="fadeInRight" data-animation-delay="0"
                        data-animation-offset="75%">
                        <iframe src="{{ setting('office_map') }}" width="100%" height="400" frameborder="0"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-3">
                        <div class="single-images">
                            <img src="{{ asset('frontend/images/member/1.2.png') }}" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
