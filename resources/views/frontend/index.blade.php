@extends('layouts.frontend')
@section('title','Sotoful')
@section('content')
<!-- HOME MAIN SLIDER -->
<section class="home-slide">
    <ul class="slides">
        @foreach ($sliders as $slider)
        <!-- SLIDER 1 -->
        <li class="slide-img-1" style="background: url('{{asset('gallery_images/big-'.$slider->image)}}') center center;" data-stellar-background-ratio="0.6">
            <div class="position-center-center">
                <!-- <h1>Sotoful</h1>
                <h5>NGO at your Service</h5>
                <a href="{{route('about')}}" class="btn margin-top-30">Read More <i class="fa fa-caret-right"></i></a> -->
            </div>
        </li>
        @endforeach
    </ul>
</section>

<!-- Content -->
<div id="content">

    <!-- WHO WE ARE -->
    <section class="padding-top-30 padding-bottom-30">
        <div class="container">
            <div class="who-we">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="font-normal">Shataphool Bangladesh: At a glance</h3>
                        <h6>Where We Started</h6>
                        <p class="text-justify">Shataphool Bangladesh is a non-government, not-for-profit, non-sectarian, and non-political organization working for social development of vulnerable people who haven’t progressed as they should have.
                            In 2000, the organization came into being when Mr. M. Shafiqul Islam (UNO of Mohanpur Upazila) founded it with a group of young and energetic people, who were highly motivated and committed to contributing their time, skills and energies for the development and empowerment of socially disadvantaged and vulnerable communities in Mohanpur, addressing poverty issues and eliminating gender based discriminations. By 2001, Shataphool Bangladesh evolved into a formal institution offering micro-credit to poor rural women in Jahanabad Union of Mohanpur Upazila.
                            Over the next decade the micro credit program diversified, and the organization began providing a variety of micro-credit products for its heterogeneous group of family entrepreneurs, alongside various types of social development programs.</p>
                    </div>
                    <div class="col-md-6">

                        <!-- SERVICES -->
                        <ul class="row">

                            <!-- SERVICES -->
                            <li class="col-sm-12"> <i class="fa fa-eye"></i>
                                <h5>our vision</h5>
                                <p class="text-justify">To ensure the sustainable economic development which provides human rights, mainstreams gender equality, ensures social justice, assures good governance by active participation of multi-tier people of society through poor friendly microfinance services.</p>
                            </li>

                            <!-- SERVICES -->
                            <li class="col-sm-12"> <i class="fa fa-rocket"></i>
                                <h5>our mission</h5>
                                <p class="text-justify">To establish an apolitical, cosmopolitan, not-for-profit, socioeconomic and philanthropic private voluntary organization which will work with the mission of making people self-dependent of all the religions and color, especially regenerating those who are impoverished and underprivileged.</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG -->
    <section class="blog light-gray-bg padding-top-30 padding-bottom-30">
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
                        <div class="post-detail"> <a href="{{$program->programUrl()}}" class="post-tittle">{{$program->title}}</a>
                            <p>{!!Str::limit($program->details,100)!!}</p>
                        </div>
                    </article>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <!-- activites -->
    <section class="portfolio  padding-top-30 padding-bottom-20">
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
                <article class="item"><img class="img-responsive" src="{{asset('program_images/'.$activity->image)}}" alt="">
                    <!-- Hover -->
                    <div class="over-detail">
                        <!-- Link -->
                        <div class="top-detail"> <a href="{{$activity->programUrl()}}" class=""><i class="fa fa-link"></i> </a> </div>
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
    <section class="services padding-top-30 padding-bottom-30">
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
    <section class="counter padding-top-30 padding-bottom-30">
        <div class="container">

            <!-- Team Member -->
            <ul class="row">
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="{{$numberOfActivity}}" data-from="0"></span> </span>
                        <h5>Activities</h5>
                    </div>
                </li>

                <!-- Line Of Codes -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="{{$numberOfEvent}}" data-from="0"></span> </span>
                        <h5>Events</h5>
                    </div>
                </li>

                <!-- Satisfied Client -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="{{$numberOfProject}}" data-from="0"></span> </span>
                        <h5>Projects</h5>
                    </div>
                </li>

                <!-- PSD file included -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000" data-refresh-interval="10" data-to="{{$numberOfProgram}}" data-from="0"></span> </span>
                        <h5>Programs</h5>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Events -->
    <section class="light-gray-bg  services padding-top-30 padding-bottom-30">
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
                            <article> <img class="img-responsive col-md-12" src="{{asset('program_images/'.$event->image)}}" alt="">
                                <!-- Date -->
                                {{-- <div class="date"> 19 <span>MAY</span> </div> --}}
                                <!-- Detail -->
                                <div class="post-detail" style="border-bottom: 0px;"> <a href="{{$event->programUrl()}}" class="post-tittle padding-20">{{$event->title}}</a>

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
    <section class="padding-top-30 padding-bottom-30">
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

    <!-- Testimonial -->
    <section class="testi-bg padding-top-30 padding-bottom-30">
        <div class="heading text-center">
            <h4>Management Thoughts</h4>
        </div>

        <div id="owl-example2" class="owl-carousel">
            @foreach ($testimonials as $testimonial)
            <div class="container col-md-12 text-center">
                <img class="mt-img" src="{{asset('testimonial_images/'.$testimonial->image)}}" alt="">
                <br>
                <br>
                <p class="font-bold font-italic" style="font-size: larger;">
                    {!!$testimonial->message!!}
                </p>
                <span class="primary-color">
                    {{$testimonial->name}}
                </span>
            </div>

            @endforeach
        </div>


    </section>
</div>

@endsection
