@extends('layouts.frontend')
@section('title')
    Testimonial
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
                            Testimonial
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection
@section('js')
@endsection
