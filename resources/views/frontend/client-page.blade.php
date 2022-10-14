@extends('layouts.frontend')
@section('title')
    Client
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
                            Client
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="flat-row parallax parallax3 bg-overlay pad-top90px
    pad-bottom110px" id="clients">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="title-section text-white">
                        <h1 class="title">Our Cliens Trust in us</h1>
                        <span class="border-icon">
                            <span class="title-icon"></span>
                        </span>
                    </div>
                    <div class="flat-divider d35px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 flat-animation" data-animation="fadeInRight" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="flat-client" data-item="6" data-nav="false" data-dots="false" data-auto="true">
                        @foreach ($clients as $client)
                            <div class="item"><img src="{{ asset('program_images/' . $client->image) }}" alt="images">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
