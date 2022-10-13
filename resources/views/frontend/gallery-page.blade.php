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
    <div class="page-title parallax parallax1 bg-black style1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">
                            Gallery
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
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="flat-row portfolio-row-page" id="gallery" style="margin-bottom: 22px;">
        <div class="flat-portfolio v1">
            <div class="portfolio-wrap clearfix gallery_image">
                @foreach ($gallaries as $index => $gallary)
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
