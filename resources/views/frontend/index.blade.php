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

    <section class="flat-row pad-top90px pad-bottom0px flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
        data-animation-offset="75%" id="team">
        <div class="container">
            <div class="row">
                <div class="title-section">
                    <h1 class="title">About us</h1>
                    <span class="border-icon">
                        <span class="title-icon"></span>
                    </span>
                </div>
                {{-- <div style="display: flex">

                </div> --}}
                <div class="col-md-6 text-center">
                    <div class="desc">Inspection Engineering & Survey (IES) Limited is a highly reputed trustworthy
                        digital land
                        surveying company in Bangladesh. IES Company was formed on 2009 and at present IES is renowned
                        as a first class trustworthy company in Survey & Valuation area in Bangladesh through high
                        skills,
                        dependable activities, dedications and honest activities. IES Limited is appreciated by the
                        honorable
                        clients for the smooth services. IES expertly provides services for the 19 highest reputed Banks
                        and 7
                        financial organization in Bangladesh.</div>
                    <div class="desc">IES Limited was founded by honorable Mr. Delower Hossain who is very famous in
                        Survey &
                        Valuation Sector in Bangladesh for his mastery knowledge and practical skills. He is giving
                        direction as a
                        Managing Director in IES Limited. A group of talented, hardworking, skillful bonafide teams are
                        practicing their professional talent in IES Limited. IES limited assigned high skilled and well
                        trained
                        employee in several district in Bangladesh.</div>
                    <div class="desc">IES Limited Head Office is situated at Motijheel C/A in Dhaka and Chittangong
                        Branch office at,
                        Moddho Solimpur (Opposite side of Foujdarhat Cadet College) , Sitakunda,Chattogram, Chittagong.
                        In a
                        short time IES Limited expanding new Branches in Khulna, Rajshahi, Sylhet, Bogura to provide
                        smooth
                        services for honorable clients.</div>
                    {{-- <div class="desc" style="font-size: 33px;  font-weight: bold;">
                        MOTO
                    </div> --}}
                    <div class="desc">To secure the investment of honorable clients IES Team collect required
                        information's, make sure
                        authenticity, business risk minimization and finally make honorable client’s Business safe.
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 10%;">
                    <img src="{{ asset('frontend/images/about/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="flat-row pad-top90px pad-bottom0px flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
        data-animation-offset="75%" id="team">
        <div class="container">
            <div class="row">
                <div class="title-section">
                    <h1 class="title">Company Founder</h1>
                    <span class="border-icon">
                        <span class="title-icon"></span>
                    </span>
                </div>
                <div class="col-md-4">
                    <img width="100%" src="{{ asset('frontend/images/about/founder.jpg') }}" alt="">
                </div>
                <div class="col-md-8">
                    <div class="desc">IES Limited founded by honorable Mr. Delower Hossain on 2009. He is an icon for
                        his
                        knowledge in the sector of Digital survey & valuation in Bangladesh. He is also one of the
                        founder and vice president of Bangladesh Survey & Valuation Association (BSVA). He is
                        also leading IES Limited as Managing Director. He has above 20 years experienced in this
                        area.</div>
                    <div class="desc">He completed his graduation Msc in Geography and then
                        Diploma in Survey & Valuation. He is providing his
                        knowledge to improve Survey & Valuation sector in
                        Bangladesh. He often makes policy to secure investment
                        of Banks or Financial organizations. He do analyze to
                        secure and safe investment of Banks or financial
                        organizations. He does thesis on how to minimize the risk
                        of investments and assisting clients by providing authentic
                        valuable information to take the right decision. He is the
                        mastermind in the sector of Digital Survey & Valuation in
                        Bangladesh.</div>
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

    {{-- <section class="flat-row" id="why_chose_us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section">
                        <h1 class="title">Why choose us</h1>
                        <span class="border-icon">
                            <span class="title-icon"></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="flat-list list-left">
                        <ul>
                            <li class="content">
                                <h4 class="title">Integrity</h4>
                                <p>Vestibulum laoreet libero vitae
                                    semper vehicula. Interdum et
                                    malesuada fames ac ante ipsum primis
                                    in faucibus. </p>
                            </li>
                            <li class="content">
                                <h4 class="title">Collaboration</h4>
                                <p>Vestibulum laoreet libero vitae
                                    semper vehicula. Interdum et
                                    malesuada fames ac ante ipsum primis
                                    in faucibus. </p>
                            </li>
                            <li class="content">
                                <h4 class="title">Result orientation</h4>
                                <p>Vestibulum laoreet libero vitae
                                    semper vehicula. Interdum et
                                    malesuada fames ac ante ipsum primis
                                    in faucibus. </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 flat-animation" data-animation="fadeInUp" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="single-image-services">
                        <img src="{{ asset('frontend/images/featured-list.png') }}" alt="images">
                    </div>
                </div>
                <div class="col-md-4 flat-animation" data-animation="fadeInDown" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="flat-list list-right">
                        <ul>
                            <li class="content">
                                <h4 class="title">Respect</h4>
                                <p>Vestibulum laoreet libero vitae
                                    semper vehicula. Interdum et
                                    malesuada fames ac ante ipsum primis
                                    in faucibus. </p>
                            </li>
                            <li class="content">
                                <h4 class="title">Innovation</h4>
                                <p>Vestibulum laoreet libero vitae
                                    semper vehicula. Interdum et
                                    malesuada fames ac ante ipsum primis
                                    in faucibus. </p>
                            </li>
                            <li class="content">
                                <h4 class="title">Experienced</h4>
                                <p>Vestibulum laoreet libero vitae
                                    semper vehicula. Interdum et
                                    malesuada fames ac ante ipsum primis
                                    in faucibus. </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="flat-row pad-top80px main-content blog-posts" id="blog">
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
                <div class="col-md-12">
                    <div class="post-wrap">
                        @foreach ($programs as $index => $program)
                            @if ($index <= 3)
                                <article class="entry flat-animation" data-animation="fadeInUp" data-animation-delay="0"
                                    data-animation-offset="75%">
                                    <div class="entry-border">
                                        <div class="feature-post">
                                            <img src="{{ asset('program_images/' . $program->image) }}" alt="image">
                                        </div>
                                        <div class="main-post">
                                            <h2 class="entry-title"><a href="blog-single.html">{{ $program->title }}</a>
                                            </h2>
                                            {{-- <div class="entry-meta">
                                            <span class="author"><a href="#">{{ $blog->posted_by }}</a></span>
                                            <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                        </div> --}}
                                            <div class="entry-content">
                                                <p>{!! Str::limit($program->details, 100) !!} <a href="{{ $program->programUrl() }}"
                                                        style="color: red; font-size: 16px;">Read more</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                    @if (count($programs) > 3)
                        <a href="{{ route('blog.page') }}">
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
                    <div class="flat-client" data-item="6" data-nav="false" data-dots="false" data-auto="true">
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

    <section class="flat-row pad-top80px main-content blog-posts" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="title-section">
                        <h1 class="title">New from our blog</h1>
                        <span class="border-icon">
                            <span class="title-icon"></span>
                        </span>
                    </div>
                    <div class="flat-divider d20px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap">
                        @foreach ($blogs as $key => $blog)
                            @if ($key <= 3)
                                <article class="entry" data-animation="fadeInUp" data-animation-delay="0"
                                    data-animation-offset="75%">
                                    <div class="entry-border">
                                        <div class="feature-post">
                                            <img src="{{ asset('blog_images/' . $blog->image) }}" alt="image">
                                        </div>
                                        <div class="main-post">
                                            <h2 class="entry-title"><a href="">{{ $blog->title }}</a>
                                            </h2>
                                            <div class="entry-meta">
                                                <span class="author"><a href="">{{ $blog->posted_by }}</a></span>
                                                <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                            </div>
                                            <div class="entry-content">
                                                {!! Str::limit($blog->details, 100) !!} <a href="{{ $blog->blogUrl() }}"
                                                    style="color: red; font-size: 16px;">Read more</a>

                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                    @if (count($blogs) > 3)
                        <a href="{{ route('blog.page') }}">
                            <center>
                                <button>More View</button>
                            </center>
                        </a>
                    @endif
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
                        <h1 class="title">Our Project</h1>
                        <span class="border-icon">
                            <span class="title-icon"></span>
                        </span>
                    </div>
                    <div class="flat-divider d20px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap">
                        @foreach ($projects as $key => $project)
                            @if ($key <= 3)
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

    <section class="flat-row pad-top80px main-content blog-posts" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="title-section">
                        <h1 class="title">News</h1>
                        <span class="border-icon">
                            <span class="title-icon"></span>
                        </span>
                    </div>
                    <div class="flat-divider d20px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap">
                        @foreach ($news as $key => $new)
                            @if ($key <= 3)
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
            </div>
        </div>
    </section>
    <section class="flat-row pad-top80px main-content blog-posts" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div class="title-section">
                        <h1 class="title">Events</h1>
                        <span class="border-icon">
                            <span class="title-icon"></span>
                        </span>
                    </div>
                    <div class="flat-divider d20px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap">
                        @foreach ($events as $key => $event)
                            @if ($key <= 3)
                                <article class="entry" data-animation="fadeInUp" data-animation-delay="0"
                                    data-animation-offset="75%">
                                    <div class="entry-border">
                                        <div class="feature-post">
                                            <img src="{{ asset('program_images/' . $event->image) }}" alt="image">
                                        </div>
                                        <div class="main-post">
                                            <h2 class="entry-title"><a href="">{{ $event->title }}</a>
                                            </h2>
                                            <div class="entry-content">
                                                {!! Str::limit($event->details, 100) !!}
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
            </div>
        </div>
    </section>
    {{-- <section class="counter padding-top-30 padding-bottom-30">
        <div class="container">
            <!-- Team Member -->
            <ul class="row">
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{ $numberOfService }}" data-from="0"></span>
                        </span>
                        <h5>Associates</h5>
                    </div>
                </li>

                <!-- Line Of Codes -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{ $numberOfEvent }}" data-from="0"></span> </span>
                        <h5>Events</h5>
                    </div>
                </li>

                <!-- Satisfied Client -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{ $numberOfProject }}" data-from="0"></span>
                        </span>
                        <h5>Projects</h5>
                    </div>
                </li>

                <!-- PSD file included -->
                <li class="col-md-3">
                    <div class="count"> <span class="number"> <span class="timer" data-speed="2000"
                                data-refresh-interval="10" data-to="{{ $numberOfProgram }}" data-from="0"></span>
                        </span>
                        <h5>Programs</h5>
                    </div>
                </li>
            </ul>
        </div>
    </section> --}}
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
