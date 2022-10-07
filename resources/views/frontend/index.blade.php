@extends('layouts.frontend')
@section('title')
    {{ setting('website_name') }}
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
                    <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
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

    <section class="flat-row pad-bottom90px">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="flat-iconbox flat-animation" data-animation="fadeInUp" data-animation-delay="0"
                        data-animation-offset="75%">
                        <div class="icon">
                            <img src="{{ asset('frontend/images/icon/icon-box1.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">general
                                    contracting</a></div>
                            <p>Morbi at ex porta, cursus magna nec,
                                laoreet purus. Pellentesque tortor
                                augue, finibus non massa a, sollicitudin
                                facilisis dui. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flat-iconbox flat-animation" data-animation="fadeInUp" data-animation-delay="0.2s"
                        data-animation-offset="75%">
                        <div class="icon">
                            <img src="{{ asset('frontend/images/icon/icon-box2.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">construction
                                    consultant</a></div>
                            <p>Morbi at ex porta, cursus magna nec,
                                laoreet purus. Pellentesque tortor
                                augue, finibus non massa a, sollicitudin
                                facilisis dui. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flat-iconbox flat-animation" data-animation="fadeInUp" data-animation-delay="0.4s"
                        data-animation-offset="75%">
                        <div class="icon">
                            <img src="{{ asset('frontend/images/icon/icon-box3.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">tiling and
                                    painting</a></div>
                            <p>Morbi at ex porta, cursus magna nec,
                                laoreet purus. Pellentesque tortor
                                augue, finibus non massa a, sollicitudin
                                facilisis dui. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="flat-divider d45px"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="flat-iconbox flat-animation" data-animation="fadeInUp" data-animation-delay="0.6s"
                        data-animation-offset="75%">
                        <div class="icon">
                            <img src="{{ asset('frontend/images/icon/icon-box4.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">Green
                                    Building</a></div>
                            <p>Morbi at ex porta, cursus magna nec,
                                laoreet purus. Pellentesque tortor
                                augue, finibus non massa a, sollicitudin
                                facilisis dui. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flat-iconbox flat-animation" data-animation="fadeInUp" data-animation-delay="0.8s"
                        data-animation-offset="75%">
                        <div class="icon">
                            <img src="{{ asset('frontend/images/icon/icon-box5.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">house
                                    renovation</a></div>
                            <p>Morbi at ex porta, cursus magna nec,
                                laoreet purus. Pellentesque tortor
                                augue, finibus non massa a, sollicitudin
                                facilisis dui. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="flat-iconbox flat-animation" data-animation="fadeInUp" data-animation-delay="1s"
                        data-animation-offset="75%">
                        <div class="icon">
                            <img src="{{ asset('frontend/images/icon/icon-box6.png') }}" alt="images">
                        </div>
                        <div class="content">
                            <div class="title"><a href="#">Metal Roofing</a></div>
                            <p>Morbi at ex porta, cursus magna nec,
                                laoreet purus. Pellentesque tortor
                                augue, finibus non massa a, sollicitudin
                                facilisis dui. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row portfolio-row-page">
        <div class="flat-portfolio v1">
            <div class="portfolio-wrap clearfix gallery_image">
                @foreach ($gallaries as $gallary)
                    <div class="item">
                        <a href="{{ asset('gallery_images/big-' . $gallary->image) }}" style="width:193px;height:125px;">
                            <img src="{{ asset('gallery_images/big-' . $gallary->image) }}" alt="images">
                            <div class="overlay">
                            </div>
                            <div class="plus">
                                <img src="{{ asset('frontend/images/portfolio/v1/icon-plus.png') }}" alt="images">
                            </div>
                        </a>



                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="flat-row">
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
    </section>

    <section class="flat-row parallax parallax3 bg-overlay pad-top90px
    pad-bottom110px">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-divider d74px"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
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
        data-animation-offset="75%">
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
                        <h1>Have a Question? <span>contact us now</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="flat-row pad-top90px pad-bottom0px flat-animation" data-animation="fadeInLeft"
        data-animation-delay="0" data-animation-offset="75%">
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
                        @foreach ($teams as $team)
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
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row pad-top80px main-content blog-posts">
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
                        @foreach ($blogs as $blog)
                            <article class="entry flat-animation" data-animation="fadeInUp" data-animation-delay="0"
                                data-animation-offset="75%">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <img src="{{ asset('blog_images/' . $blog->image) }}" alt="image">
                                    </div>
                                    <div class="main-post">
                                        <h2 class="entry-title"><a href="blog-single.html">{{ $blog->title }}</a></h2>
                                        <div class="entry-meta">
                                            <span class="author"><a href="#">{{ $blog->posted_by }}</a></span>
                                            <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                        </div>
                                        <div class="entry-content">
                                            <p>{!! $blog->details !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="flat-row pad-top60px pad-bottom0px bg-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget-sv sv-information border
                    flat-animation"
                        data-animation="fadeInLeft" data-animation-delay="0" data-animation-offset="75%">
                        <ul class="information">
                            <li><span>Phone: </span>61 3 8376 6284</li>
                            <li><span>Address: </span>121 King Street,
                                Melbourne Victoria 3000 Australia</li>
                            <li><span>Email: </span><a href="https://themesflat.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="1f5e73766b6c6b6a7b76706c5f78727e7673317c7072">[email&#160;protected]</a>
                            </li>
                        </ul>
                        <ul class="short-code flat-socials">
                            <li class="facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="linkedin">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="flat-divider d70px"></div>
                </div>
                <div class="col-md-5 flat-animation" data-animation="fadeInRight" data-animation-delay="0"
                    data-animation-offset="75%">
                    <div id="map" class="flat-map shadow margin-left" style="width: 530px; height: 262px; "></div>
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
                // titleSrc: function(item) {
                //     return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el
                //         .attr('data-source') + '" target="_blank">image source</a>';
                // }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        });
    </script>
@endsection
