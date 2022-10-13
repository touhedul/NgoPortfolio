@extends('layouts.frontend')
@section('title')
    {{ $program->category }}
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
                            @if ($program->category == 'Program')
                                <h1 class="title">
                                    Service
                                </h1>
                            @elseif($program->category == 'Project')
                                <h1 class="title">
                                    Project
                                </h1>
                            @endif
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
                            @if ($program->category == 'Program')
                                <li><a href="#">Service</a></li>
                            @elseif($program->category == 'Project')
                                <li><a href="#">Project</a></li>
                            @endif
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
                                <img src="{{ asset('program_images/big-' . $program->image) }}" alt="image">
                            </div>

                        </div>
                        <div class="services-content">
                            {!! $program->details !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
