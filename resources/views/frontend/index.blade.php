@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<!-- HOME MAIN SLIDER -->
<section class="home-slide">
    <ul class="slides">
        @foreach ($sliders as $slider)
        <!-- SLIDER 1 -->
        <li class="slide-img-1" style="background: url('{{asset('gallery_images/big-'.$slider->image)}}') ;"
            data-stellar-background-ratio="0.6">
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
    {{-- <section class="padding-top-30 padding-bottom-30">
        <div class="container">
            <div class="heading text-center">
                <br><br>
                <h4>Breaking News</h4>
            </div>
            <div class="who-we">
                <div class="row">
                    <marquee>
                        @foreach ($newses as $news)
                        <a href="{{$news->programUrl()}}"> <span
                                style="font-size: 20px; margin-right: 50px ; color : #52BE80">{{$news->title}}</span></a>
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- WHO WE ARE -->
    <section class="padding-top-30 padding-bottom-30">
        <div class="container">
            <div class="who-we">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="font-normal"> PROLINK GLOBAL: YOUR AUTOMATION PARTNER</h3>
                        <h6>Our keys for development:</h6>
                        <p class="text-justify">The company has been formed by a group of expert professionals having
                            vivid experience and international exposure in Information and Communication Technology
                            (ICT). People involved here are well known academic in ICT sector, highly qualified business
                            graduates and qualified engineers from the renowned universities across the globe.
<br>
                            The resource personnel involved in collaboration of the sister concern company Prolink
                            Limited have been consistently providing reliable support, services and consultancy to a
                            wide variety of corporate houses either in the capacity of executive or as business partner
                            or consultant. Bottom line of the company philosophy is building a long-term business
                            partnership with its clients where interpersonal relationship, reliability, assured quality
                            and target oriented modern technology are the major building blocks.
                            <br>
                            It is a company where professionals from both technical and functional field group together
                            with an objective of providing appropriate solutions based on customer needs. It realizes
                            the importance of functional knowledge and its impact in developing the solutions. We
                            constantly endeavor to be a leading technology firm with profound business and functional
                            knowledge. The key to the company's success is the maintenance of a close working
                            relationship with the clients through ensuring the best possible solutions to their needs;
                            to establish and maintain a thorough knowledge and understanding of client's objective and
                            help them maximize the benefits.

                        </p>
                    </div>
                    <div class="col-md-6">

                        <!-- SERVICES -->
                        <ul class="row">

                            <!-- SERVICES -->
                            <li class="col-sm-12"> <i class="fa fa-eye"></i>
                                <h5>Our Vision</h5>
                                <p class="text-justify">Our Vision is to be a globally recognized engineering and
                                    information technology company trusted by its clients with satisfaction by
                                    delivering innovative quality products and services at an affordable cost, caring
                                    for its employees. We are always ready to take our achievements to the next level.
                                    We are growing and would always like to remain on the growing streak.</p>
                            </li>

                            <!-- SERVICES -->
                            <li class="col-sm-12"> <i class="fa fa-rocket"></i>
                                <h5>Our Mission</h5>
                                <p class="text-justify">Our Mission is to achieve the reputation of a quality, high
                                    standard & reliable solution & service Provider Company in the ICT industry. </p>
                            </li>
                            <!-- SERVICES -->
                            <li class="col-sm-12"> <i class="fa fa-users"></i>
                                <h5>We believe in</h5>
                                <p class="text-justify">
                                    • Motivation <br>
                                    • Collective responsibility and leadership <br>
                                    • Professionalism and ethics <br>
                                    • Adding values to our client needs <br>

                                </p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Core Program -->
    <section class="blog light-gray-bg padding-top-30 padding-bottom-30">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4>Core Programs</h4>
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


    <!-- OUr Projects -->
    <section class="portfolio  padding-top-30 padding-bottom-20">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4>Our Projects</h4>
            </div>

        </div>

        <!-- PORTFOLIO ROW -->
        <div class="ajax-work col-3">
            <!-- ITEMS -->
            @foreach ($projects as $project)

            <div class="cbp-item ana dial growth">
                <article class="item"><img class="img-responsive" src="{{asset('program_images/'.$project->image)}}"
                        alt="">
                    <!-- Hover -->
                    <div class="over-detail">
                        <!-- Link -->
                        <div class="top-detail"> <a href="{{$project->programUrl()}}" class=""><i
                                    class="fa fa-link"></i> </a> </div>
                        <!-- TITTLE HEADING -->
                        <div class="bottom-detail">
                            <h3>{{$project->title}}</h3>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach

        </div>

        <!-- LOAD MORE -->

        <div class="text-center margin-top-50 margin-bottom-50 animate fadeInUp" data-wow-delay="0.4s">
            <div> <a href="{{route('program.different','Project')}}" class="btn btn-1">
                    View All <i class="fa fa-caret-right"></i>
                </a>
            </div>
        </div>

    </section>

    <!-- Our associates -->
    <section class="services padding-top-30 padding-bottom-30">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4>Our Associates</h4>
            </div>
        </div>
        <div class="best-services">
            <!-- Row -->
            <div class="container">
                <ul class="row list">
                    <!-- Analytics -->
                    @foreach ($associates as $associate)
                    <li class="col-md-4">
                        <div class="img-hover-zoom img-hover-zoom--slowmo">
                            <img src="{{asset('program_images/'.$associate->image)}}" alt="">
                        </div>
                        <article class="thumb"><a class="" href="{{$associate->programUrl()}}">
                                <h5>{{$associate->title}}</h5>
                                <p>{!!Str::limit($associate->details,100)!!}</p>
                            </a>
                        </article>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="text-center margin-top-50 margin-bottom-50 animate fadeInUp" data-wow-delay="0.4s">
            <div> <a href="{{route('program.different','Associate')}}" class="btn btn-1">
                    View All <i class="fa fa-caret-right"></i>
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
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{$numberOfService}}" data-from="0"></span> </span>
                        <h5>Associates</h5>
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
                    View All <i class="fa fa-caret-right"></i>
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
                                        <div class="date"> {{date('d ',strtotime($notice->created_at))}}
                                            <span>{{date('M ',strtotime($notice->created_at))}}</span>
                                        </div>
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
