@extends('layouts.frontend')
@section('title')
    Home
@endsection
@section('css')
    <style>
        .image-source-link {
            color: #98C3D1;
        }

        .mfp-with-zoom .mfp-container,
        .mfp-with-zoom.mfp-bg {
            opacity: 0;
            -webkit-backface-visibility: hidden;
            /* ideally, transition speed should match zoom duration */
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        .mfp-with-zoom.mfp-ready .mfp-container {
            opacity: 1;
        }

        .mfp-with-zoom.mfp-ready.mfp-bg {
            opacity: 0.8;
        }

        .mfp-with-zoom.mfp-removing .mfp-container,
        .mfp-with-zoom.mfp-removing.mfp-bg {
            opacity: 0;
        }

        .mfp-wrap {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999999;
            position: fixed;
            outline: none !important;
            -webkit-backface-visibility: hidden;
        }
    </style>
@endsection
@section('content')
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                @foreach ($sliders as $key => $slider)
                    <li data-transition="" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                        <img src="{{ asset('gallery_images/big-' . $slider->image) }}" alt="slider-image" />
                        <div class="tp-caption sfb title-slide box style2
                        center bg-color color-white"
                            data-x="266" data-y="247" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                            {{ $slider->title }}</div>
                        <div class="tp-caption sft desc-slide style1 box
                        center bg-dark color-white"
                            data-x="266" data-y="365" data-speed="1000" data-start="1500"
                            data-easing="Power3.easeInOut">{!! wordwrap($slider->description, 50, "<br>\n") !!}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>



    @php $m=1; @endphp
    <section class="flat-row portfolio-row-page" id="gallery" style="margin-bottom: 22px;">
        <div class="flat-portfolio v1">
            <div class="portfolio-wrap clearfix service_image">
                @foreach ($service as $key => $values)
                    @if ($m < 7)
                        <div  style="width: 33.33%;height:250px" class="item">
                            <a href=""
                                style="width:193px;height:125px;">
                                <img style="height:100%;width:100%"  src="{{ asset('demo/' . $m . '.jpg') }}" alt="images">
                                <div class="overlay">
                                    <div style="margin: auto; width: 50%; height:50%; padding: 10px;">
                                        <a href="{{ route('service.type', preg_replace('/\s+/im', '_', $key)) }}"><h1 style="font-size: 20px">{{ $key }} Services</h1></a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endif
                    @php $m++; @endphp
                @endforeach
            </div>

        </div>
    </section>





    {{-- <section class="flat-row pad-top80px main-content blog-posts" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="title-section">
                        <h1 class="title">Our Services</h1>
                        <span class="border-icon">
                            <span class="title-icon"></span>
                        </span>
                    </div>
                    <div class="flat-divider d20px"></div>
                </div>
            </div>
            <div class="row">

                <div class="">
                    @php
                        $m = 1;
                    @endphp
                    @foreach ($service as $key => $value)
                        @if ($m <= 6)
                            <article class="entry flat-animation" data-animation="fadeInUp" data-animation-delay="0"
                                data-animation-offset="75%">

                                <div class="entry-border" style="padding:10px;border:1px solid black">
                                    <div class="feature-post">
                                        <img style="height: 220px;width:100%" src="{{ asset('demo/' . $m . '.jpg') }}"
                                            alt="image">
                                    </div>

                                    <div style="margin-top: -26px;text-align:center;font-size:20px">
                                        <a href="{{ route('service.type', preg_replace('/\s+/im', '_', $key)) }}">{{ $key }}</a>
                                    </div>
                                </div>
                            </article>
                        @else
                        @break
                    @endif
                    @php
                        $m++;
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </section> --}}


    <section class="flat-row main-content blog-posts" id="project">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="title-section">
                        <h1 class="title">We are available</h1>
                        <span class="border-icon">
                            <span class="title-icon"></span>
                        </span>
                    </div>
                    <div class="flat-divider d20px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        @foreach ($branches as $key => $branch)
                            @if ($key <= 5)
                                <article  class="entry" data-animation="fadeInUp" data-animation-delay="0"
                                    data-animation-offset="75%">
                                    <div class="entry-border">
                                        <div class="feature-post">
                                            <img src="{{ asset('branch_images/' . $branch->image) }}" alt="image">
                                        </div>
                                        <div class="main-post">
                                            <h2 class="entry-title">{{ $branch->title }} </h2>

                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach

                    </div>
                    @if (count($projects) > 3)
                        <a href="{{ route('project.page') }}">
                            <center>
                                <button>More View</button>
                            </center>
                        </a>
                    @endif
                </div>


            </div>
        </div>
    </section>

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
                <div class="flat-client" data-item="{{$clients->count()+1}}" data-nav="false" data-dots="false" data-auto="true">
                    @foreach ($clients as $client)
                        <div class="item"><img src="{{ asset('program_images/' . $client->image) }}"
                                alt="images">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-row row-testimonilas-slider flat-animation" data-animation="fadeInUp" data-animation-delay="0"
    data-animation-offset="75%" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pd-162px">
                <div class="flat-testimonials-images">
                    <div class="flat-testimonials-slider">
                        <div id="flat-testimonials-flexslider">
                            <ul class="slides">
                                @foreach ($testimonials as $testimonial)
                                    <li>
                                        <p>{!! $testimonial->message !!}</p>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div id="flat-testimonials-carousel">
                            <ul class="slides">
                                @foreach ($testimonials as $testimonial)
                                    <li>
                                        <img alt="image"
                                            src="{{ asset('testimonial_images/' . $testimonial->image) }}">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="flat-row row-contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flat-contact-us">
                    <h1>Have a Question? <a href="{{ route('contact.page') }}"><span>contact us now</span></a></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="flat-row pad-top90px pad-bottom0px flat-animation" data-animation="fadeInLeft"
    data-animation-delay="0" data-animation-offset="75%" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section">
                    <h1 class="title">Meet the team</h1>
                    <span class="border-icon">
                        <span class="title-icon"></span>
                    </span>
                    <div class="desc">Proin aliquam ante quis
                        sagittis blandit. In hac habitasse platea
                        dictumst. In sit amet pharetra<br> tellus.
                        Morbi sed consequat augue. Quisque
                        ultricies, ex et sagittis commodo.</div>
                </div>
                <div class="flat-divider d25px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="flat-team-carosuel" data-item="3" data-nav="true" data-dots="false" data-auto="false">
                    @foreach ($teams as $key => $team)
                        @if ($key <= 3)
                            <div class="flat-team">
                                <h3 class="name">{{ $team->name }}</h3>
                                <div class="avatar">
                                    <div class="overlay">
                                    </div>
                                    <img src="{{ asset('team_images/' . $team->image) }}" alt="image">
                                    <ul class="short-code flat-socials">
                                        {{-- <li class="facebook">
                                            <a href="#"><i
                                                    class="fa
                                            fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i
                                                    class="fa
                                            fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i
                                                    class="fa
                                            fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i
                                                    class="fa
                                            fa-linkedin"></i></a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <span class="position">{{ $team->designation }}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
                @if (count($teams) > 3)
                    <a href="{{ route('team.page') }}">
                        <center>
                            <button>More View</button>
                        </center>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="flat-row main-content blog-posts" id="project">
    <div class="container">
        <div class="row">
            <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                data-animation-offset="75%">
                <div class="title-section">
                    <h1 class="title">Our Projects</h1>
                    <span class="border-icon">
                        <span class="title-icon"></span>
                    </span>
                </div>
                <div class="flat-divider d20px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    @foreach ($projects as $key => $project)
                        @if ($key <= 2)
                            <article class="entry" data-animation="fadeInUp" data-animation-delay="0"
                                data-animation-offset="75%">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <img src="{{ asset('program_images/' . $project->image) }}" alt="image">
                                    </div>
                                    <div class="main-post">
                                        <h2 class="entry-title"><a href="blog-single.html">{{ $project->title }}</a>
                                        </h2>
                                        {{-- <div class="entry-meta">
                                        <span class="author"><a href="#">{{ $blog->posted_by }}</a></span>
                                        <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                    </div> --}}
                                        <div class="entry-content">
                                            <p>{!! Str::limit($project->details, 100) !!}<a href="{{ $project->programUrl() }}"
                                                    style="color: red; font-size: 16px;">Read more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach

                </div>
                @if (count($projects) > 3)
                    <a href="{{ route('project.page') }}">
                        <center>
                            <button>More View</button>
                        </center>
                    </a>
                @endif
            </div>


        </div>
    </div>
</section>





<section class="flat-row parallax parallax3 bg-overlay
    pad-bottom110px" id="clients">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-animation="fadeInRight" data-animation-delay="0"
                data-animation-offset="75%">

                <div class="row">
                    <div class="item col-md-3" style="text-align: center;">
                        <h1 style="color: white;">PROJECTS</h1>
                        <h1>{{ count($projects) }}</h1>
                    </div>
                    <div class="item col-md-3" style="text-align: center;">
                        <h1 style="color: white;">SERVICES</h1>
                        <h1>{{ count($programs) }}</h1>
                    </div>
                    <div class="item col-md-3" style="text-align: center;">
                        <h1 style="color: white;">JOBS</h1>
                        <h1>{{ count($jobs) }}</h1>
                    </div>
                    <div class="item col-md-3" style="text-align: center;">
                        <h1 style="color: white;">CLIENTS</h1>
                        <h1>{{ count($clients) }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="flat-row pad-top80px main-content blog-posts" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                data-animation-offset="75%">
                <div class="title-section">
                    <h1 class="title">Career & News</h1>
                    <span class="border-icon">
                        <span class="title-icon"></span>
                    </span>
                </div>
                <div class="flat-divider d20px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    @foreach ($news as $key => $new)
                        @if ($key <= 2)
                            <article class="entry" data-animation="fadeInUp" data-animation-delay="0"
                                data-animation-offset="75%">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <img src="{{ asset('program_images/' . $new->image) }}" alt="image">
                                    </div>
                                    <div class="main-post">
                                        <h2 class="entry-title"><a href="">{{ $new->title }}</a>
                                        </h2>
                                        <div class="entry-content">
                                            {!! Str::limit($new->details, 100) !!}
                                            {{-- <a href="{{ $news->blogUrl() }}" --}}
                                            {{-- style="color: red; font-size: 16px;">Read more</a> --}}

                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    @foreach ($jobs as $key => $job)
                        @if ($key <= 2)
                            <article class="entry" data-animation="fadeInUp" data-animation-delay="0"
                                data-animation-offset="75%">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <img src="{{ asset('job_images/' . $job->image) }}" alt="image">
                                    </div>
                                    <div class="main-post">
                                        <h2 class="entry-title"><a href="">{{ $job->title }}</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <span class="author"><a href="">{{ $job->location }}</a></span>
                                            <span class="date">{{ $job->last_date }}</span>
                                        </div>
                                        <div class="entry-content">
                                            {!! Str::limit($job->details, 100) !!} <a href="{{ $job->jobUrl() }}"
                                                style="color: red; font-size: 16px;">Read more</a>

                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                </div>
                @if (count($jobs) > 3)
                    <a href="{{ route('job.page') }}">
                        <center>
                            <button>More View</button>
                        </center>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="flat-row pad-top80px main-content blog-posts" id="event">
    <div class="container">
        <div class="row">
            <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                data-animation-offset="75%">
                <div class="title-section">
                    <h1 class="title">Our Events</h1>
                    <span class="border-icon">
                        <span class="title-icon"></span>
                    </span>
                </div>
                <div class="flat-divider d20px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    @foreach ($events as $key => $event)
                        @if ($key <= 3)
                            <article class="entry" data-animation="fadeInUp" data-animation-delay="0"
                                data-animation-offset="75%">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <img src="{{ asset('program_images/' . $event->image) }}" alt="image">
                                    </div>
                                    <div class="main-post">
                                        <h2 class="entry-title"><a href="{{ $event->programUrl() }}">{{ $event->title }}</a>
                                        </h2>
                                        <div class="entry-content">
                                            {!! Str::limit($event->details, 100) !!}
                                            {{-- <a href="{{ $event->programUrl() }}"
                                            style="color: red; font-size: 16px;">Read more</a> --}}

                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>


<br>
<section class="flat-row portfolio-row-page" id="gallery" style="margin-bottom: 22px;">
    <div class="flat-portfolio v1">
        <div class="portfolio-wrap clearfix gallery_image">
            @foreach ($gallaries as $index => $gallary)
                @if ($index < 4)
                    <div class="item">
                        <a href="{{ asset('gallery_images/big-' . $gallary->image) }}"
                            style="width:193px;height:125px;">
                            <img src="{{ asset('gallery_images/big-' . $gallary->image) }}" alt="images">
                            <div class="overlay">
                            </div>
                            <div class="plus">
                                <img src="{{ asset('frontend/images/portfolio/v1/icon-plus.png') }}" alt="images">
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
        <br>
        @if (count($gallaries) > 4)
            <a href="{{ route('gallery.page') }}">
                <center>
                    <button>More View</button>
                </center>
            </a>
        @endif
    </div>
</section>

<section class="flat-row main-content blog-posts" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                data-animation-offset="75%">
                <div class="title-section">
                    <h1 class="title">Our Blogs</h1>
                    <span class="border-icon">
                        <span class="title-icon"></span>
                    </span>
                </div>
                <div class="flat-divider d20px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    @foreach ($blogs as $key => $blog)
                        @if ($key <= 4)
                            <article class="entry" data-animation="fadeInUp" data-animation-delay="0"
                                data-animation-offset="75%">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <img src="{{ asset('blog_images/' . $blog->image) }}" alt="image">
                                    </div>
                                    <div class="main-post">
                                        <h2 class="entry-title"><a href="{{ $blog->blogUrl() }}">{{ $blog->title }}</a>
                                        </h2>
                                        <div class="entry-content">
                                            {!! Str::limit($blog->details, 100) !!}
                                            {{-- <a href="{{ $event->programUrl() }}"
                                            style="color: red; font-size: 16px;">Read more</a> --}}

                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>


<div class="flat-row pad-top60px pad-bottom0px bg-contact" id="contact_us">
    <div class="container">
        <p style="font-size: 32px; margin-bottom: 18px;">If any query or contact <a
                href="{{ route('contact.page') }}" style="color: orange">click here</a></p>
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
            <div class="col-md-8 flat-animation" data-animation="fadeInRight" data-animation-delay="0"
                data-animation-offset="75%">
                <iframe src="{{ setting('office_map') }}" width="100%" height="400" frameborder="0"
                    style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            {{-- <div class="col-md-3">
                <div class="single-images">
                    <img src="{{ asset('frontend/images/member/1.2.png') }}" alt="images">
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $('.gallery_image').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img')
            }
        }

    })
</script>
@endsection
