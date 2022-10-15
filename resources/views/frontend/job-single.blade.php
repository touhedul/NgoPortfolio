@extends('layouts.frontend')
@section('title')
    {{ $job->title }}
@endsection
@section('content')
    <!-- Content -->
    <div id="content">

        <!-- BLOG -->
        <div class="page-title parallax parallax1 bg-black style1">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title-heading">

                            <h1 class="title">
                                Job
                            </h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Job</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="flat-row pad-bottom40px background-color">
            <div class="container">
                <div class="row">

                    <div class="col-md-11 col-md-offset-1">
                        <div class="flat-services-carousel mg-top-35px">
                            <div class="sv-featured">
                                <img src="{{ asset('job_images/big-' . $job->image) }}" alt="image"><br><br>
                                <h4 style="font-size: 18px;">{{ $job->title }}
                                </h4>
                            </div>

                        </div>

                        <div class="services-content">
                            <div class="flat-services-carousel mg-top-35px">
                                <h4 style="font-size: 18px;">Location: {{ $job->location }}! Deadline: {{ $job->last_date }}
                                </h4>
                            </div>
                            {!! $job->details !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
