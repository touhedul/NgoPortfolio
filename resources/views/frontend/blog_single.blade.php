@extends('layouts.frontend')
@section('title')
    {{ $blog->category }}
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
                                Blog
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
                            <li><a href="#">Blog</a></li>

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
                                <img src="{{ asset('blog_images/big-' . $blog->image) }}" alt="image">
                            </div>

                        </div>
                        <div class="services-content">
                            {!! $blog->details !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
