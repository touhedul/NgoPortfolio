@extends('layouts.frontend')
@section('title')
    Teams
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
                            Teams
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="flat-row pad-top90px pad-bottom0px flat-animation" data-animation="fadeInLeft" data-animation-delay="0"
        data-animation-offset="75%" id="team">
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
@endsection
@section('js')
@endsection
