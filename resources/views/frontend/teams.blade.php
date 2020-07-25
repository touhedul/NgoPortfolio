@extends('layouts.frontend')
@section('title') Teams @endsection
@section('content')
@include('includes.banner',['programName'=>'Teams'])
<div id="content">

    <!-- WHO WE ARE -->
    <section class="team team-wrap padding-top-70 padding-bottom-20">
        <div class="container">

            <div class="text-center">
                <h4 class="primary-color">BOARD OF DIRECTORS</h4>
                <hr>
                <ul class="row items">
                    @foreach ($teams as $team)
                    @if ($team->type == "General")


                    <li class="col-md-4 item market">
                        <article class="text-left"> <img class="img-responsive"
                                src="{{asset('team_images/'.$team->image)}}" alt="">
                            <h5>{{$team->name}}</h5>
                            <p>{!!$team->about!!}</p>
                            <p>Email : {{$team->email}}</p>
                            <p>Phone : {{$team->phone}}</p>
                            <p>Designation : {{$team->designation}}</p>
                        </article>
                    </li>
                    @endif
                    @endforeach

                </ul>
            </div>

        </div>
    </section>
    <section class="team team-wrap padding-top-70 padding-bottom-20">
        <div class="container">

            <div class="text-center">
                <h4 class="primary-color">EXECUTIVE COMMITTEE</h4>
                <hr>
                <ul class="row items">
                    @foreach ($teams as $team)
                    @if ($team->type == "Executive")


                    <li class="col-md-4 item market">
                        <article class="text-left"> <img class="img-responsive"
                                src="{{asset('team_images/'.$team->image)}}" alt="">
                            <h5>{{$team->name}}</h5>
                            <p>{!!$team->about!!}</p>
                            <p>Email : {{$team->email}}</p>
                            <p>Phone : {{$team->phone}}</p>
                            <p>Designation : {{$team->designation}}</p>
                        </article>
                    </li>
                    @endif
                    @endforeach

                </ul>
            </div>

        </div>
    </section>
</div>
@endsection