@extends('layouts.frontend')
@section('title','Sotoful')
@section('content')
<!-- HOME MAIN SLIDER -->
<section class="home-slide">
    <ul class="slides">
        @foreach ($sliders as $slider)
        <!-- SLIDER 1 -->
        <li class="slide-img-1"
            style="background: url('{{asset('gallery_images/big-'.$slider->image)}}') center center;"
            data-stellar-background-ratio="0.6">
            <div class="position-center-center">
                <h1>Sotoful</h1>
                <h5>NGO at your Service</h5>
                <a href="{{route('about')}}" class="btn margin-top-30">Read More <i class="fa fa-caret-right"></i></a>
            </div>
        </li>
        @endforeach
    </ul>
</section>

<!-- Content -->
<div id="content">

    <!-- WHO WE ARE -->
    <section class="padding-top-70 padding-bottom-70">
        <div class="container">
            <div class="who-we">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="font-normal">who we are</h3>
                        <h6>Pushing out limits to provide the highest quality services</h6>
                        <p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere
                            libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel
                            tempus metus leo non est. <br>
                            <br>
                            Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus
                            ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede
                            metus eget nisi.

                            <br><br>

                            Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor,</p>
                    </div>
                    <div class="col-md-6">

                        <!-- SERVICES -->
                        <ul class="row">

                            <!-- SERVICES -->
                            <li class="col-sm-12"> <i class="fa fa-eye"></i>
                                <h5>our vision</h5>
                                <p>Phasellus congue lacus eget neque. Phasellus ornare, vitae consectetuer consequat,
                                    purus sapien ultricies dolor,</p>
                            </li>

                            <!-- SERVICES -->
                            <li class="col-sm-12"> <i class="fa fa-rocket"></i>
                                <h5>our mission</h5>
                                <p>Phasellus congue lacus eget neque. Phasellus ornare, vitae consectetuer consequat,
                                    purus sapien ultricies dolor,</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG -->
    <section class="blog light-gray-bg padding-top-70 padding-bottom-70">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4>Specialized Programs</h4>
            </div>
            <!-- Blog Row -->
            <div class="row blog-slide">
                <!-- Blog Post -->
                @foreach ($programs as $program)

                <div class="col-md-12 no-padding">
                    <article> <img class="img-responsive" src="{{asset('program_images/'.$program->image)}}" alt="">

                        <!-- Date -->
                        <!-- <div class="date"> 19 <span>MAY</span> </div> -->

                        <!-- Detail -->
                        <div class="post-detail"> <a href="{{$program->programUrl()}}"
                                class="post-tittle">{{$program->title}}</a>
                            <p>{!!Str::limit($program->details,100)!!}</p>
                        </div>
                    </article>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <!-- activites -->
    <section class="portfolio  padding-top-70 padding-bottom-20">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4>Our Activities</h4>
            </div>

        </div>

        <!-- PORTFOLIO ROW -->
        <div class="ajax-work col-3">
            <!-- ITEMS -->
            @foreach ($activities as $activity)

            <div class="cbp-item ana dial growth">
                <article class="item"><img class="img-responsive" src="{{asset('program_images/'.$activity->image)}}"
                        alt="">
                    <!-- Hover -->
                    <div class="over-detail">
                        <!-- Link -->
                        <div class="top-detail"> <a href="{{$activity->programUrl()}}" class=""><i
                                    class="fa fa-link"></i> </a> </div>
                        <!-- TITTLE HEADING -->
                        <div class="bottom-detail">
                            <h3>{{$activity->title}}</h3>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach

        </div>

        <!-- LOAD MORE -->

        <div class="text-center margin-top-50 margin-bottom-50 animate fadeInUp" data-wow-delay="0.4s">
            <div> <a href="{{route('program.different','Activity')}}" class="btn btn-1">
                    View All Activities <i class="fa fa-caret-right"></i>
                </a>
            </div>
        </div>

    </section>

    <!-- SERVICES -->
    <section class="services padding-top-70 padding-bottom-70">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4>Our Services</h4>
            </div>
        </div>
        <div class="best-services">
            <!-- Row -->
            <div class="container">
                <ul class="row list">
                    <!-- Analytics -->
                    @foreach ($services as $service)
                    <li class="col-md-4">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <img src="{{asset('program_images/'.$service->image)}}" alt="">
                        </div>
                        <article class="thumb"><a class="" href="{{$service->programUrl()}}">
                                <h5>{{$service->title}}</h5>
                                <p>{!!Str::limit($service->details,100)!!}</p>
                            </a>
                        </article>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="text-center margin-top-50 margin-bottom-50 animate fadeInUp" data-wow-delay="0.4s">
            <div> <a href="{{route('program.different','Service')}}" class="btn btn-1">
                    View Services <i class="fa fa-caret-right"></i>
                </a>
            </div>
        </div>


    </section>






    <!-- Counter -->
    <section class="counter padding-top-50 padding-bottom-50">
        <div class="container">

            <!-- Team Member -->
            <ul class="row">
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{$numberOfActivity}}" data-from="0"></span> </span>
                        <h5>Activities</h5>
                    </div>
                </li>

                <!-- Line Of Codes -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{$numberOfEvent}}" data-from="0"></span> </span>
                        <h5>Events</h5>
                    </div>
                </li>

                <!-- Satisfied Client -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{$numberOfProject}}" data-from="0"></span> </span>
                        <h5>Projects</h5>
                    </div>
                </li>

                <!-- PSD file included -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{$numberOfProgram}}" data-from="0"></span> </span>
                        <h5>Programs</h5>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Events -->
    <section class="light-gray-bg  services padding-top-70 padding-bottom-70">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4>Events</h4>
            </div>
        </div>
        <div class="blog blog-pages">
            <!-- Row -->
            <div class="container">
                <ul class="row list ">
                    <!-- Analytics -->
                    @foreach ($events as $event)

                    <li class="col-md-4">

                        <div class="col-md-12">

                            <!-- Post -->
                            <article> <img class="img-responsive col-md-12"
                                    src="{{asset('program_images/'.$event->image)}}" alt="">
                                <!-- Date -->
                                {{-- <div class="date"> 19 <span>MAY</span> </div> --}}
                                <!-- Detail -->
                                <div class="post-detail" style="border-bottom: 0px;"> <a href="{{$event->programUrl()}}"
                                        class="post-tittle padding-20">{{$event->title}}</a>

                                </div>
                            </article>

                        </div>

                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="text-center margin-top-50 margin-bottom-50 animate fadeInUp" data-wow-delay="0.4s">
            <div> <a href="{{route('program.different','Event')}}" class="btn btn-1">
                    View All Events <i class="fa fa-caret-right"></i>
                </a>
            </div>
        </div>


    </section>

    <!-- Notice -->
    <section class="padding-top-100 padding-bottom-100">
        <div class="heading text-center">
            <h4>Notices</h4>
        </div>

        <div id="owl-example" class="owl-carousel">
            @foreach ($notices as $notice)
            <div class="container col-md-5 text-center" style="float: initial;">
                <div class="job-content job-post-page margin-20" style="border: 0px;    padding-bottom: 20px;">
                    <div class="panel panel-default" style="border: 0px;">
                        <!-- Save -->
                        <div class="star-save"><a href="{{$notice->programUrl()}}"><i class="fa fa-caret-right"></i></a>
                        </div>
                        <!-- PANEL HEADING -->
                        <div class="panel-heading" style="border: 0px;"> <a href="{{$notice->programUrl()}}">
                                <div class="job-tittle">
                                    <div class="media-left">
                                        {{-- <div class="date"> 19 <span>MAY</span> </div> --}}
                                    </div>
                                    <div class="media-body">
                                        <h5>{{$notice->title}}</h5>
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <p> {!!Str::limit($notice->details,100)!!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>


    </section>

    <!-- Management -->
    <section class="features light-gray-bg padding-top-70 padding-bottom-70">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4>Management Thoughts</h4>
            </div>
            <!-- Features -->
            <div class="list-style-featured">
                <div class="row no-margin">
                    <!-- LIST LEFT -->
                    <div class="col-md-4 no-padding">
                        <ul class="text-right">
                            @foreach ($testimonials1 as $testimonial)
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6>{{$testimonial->name}}</h6>
                                        <p>
                                            {!!$testimonial->message!!}
                                        </p>
                                    </div>
                                    <div class="media-right">
                                        <div class="icon"> <i class="fas fa-book-open fa-2x"></i> </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- LIST IMAGE -->
                    <div class="col-md-4 text-center no-padding"> <img class="img-responsive"
                            src="https://source.unsplash.com/255x426" alt=""> </div>

                    <!-- LIST ICON RIGHT -->
                    <div class="col-md-4 no-padding">
                        <ul class="text-right">
                            @foreach ($testimonials2 as $testimonial)
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6>{{$testimonial->name}}</h6>
                                        <p>
                                            {!!$testimonial->message!!}
                                        </p>
                                    </div>
                                    <div class="media-right">
                                        <div class="icon"> <i class="fas fa-book-open fa-2x"></i> </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testi -->
    <section class="testi-bg padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="testi">
                <p>
                    We don’t believe that people passively receive aid,
                    they act as agents in their own lives. We are committed to creating opportunities for people in
                    poverty.
                </p>
                <h6>MR. XYZ / <span class="primary-color">Sotoful</span></h6>
            </div>
        </div>
    </section>
</div>

@endsection