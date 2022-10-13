@extends('layouts.frontend')
@section('title')
    Blog
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
                            Blog
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <article class="entry flat-animation" data-animation="fadeInUp" data-animation-delay="0"
                                data-animation-offset="75%">
                                <div class="entry-border">
                                    <div class="feature-post">
                                        <img src="{{ asset('blog_images/' . $blog->image) }}" alt="image">
                                    </div>
                                    <div class="main-post">
                                        <h2 class="entry-title"><a href="blog-single.html">{{ $blog->title }}</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <span class="author"><a href="#">{{ $blog->posted_by }}</a></span>
                                            <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                                        </div>
                                        <div class="entry-content">
                                            <p>{!! Str::limit($blog->details, 100) !!} <a href="{{ $blog->blogUrl() }}"
                                                    style="color: red; font-size: 16px;">Read more</a>
                                            </p>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
