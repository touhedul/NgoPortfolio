@extends('layouts.frontend')
@section('title') Teams | Shataphool Bangladesh @endsection
@section('content')
@include('includes.banner',['programName'=>'Teams'])
<div id="content">

    <!-- WHO WE ARE -->
    @if($teams->where('type','General Committee')->count()>0)
    <section class="team team-wrap padding-top-70 padding-bottom-20">
        <div class="container">

            <div class="text-center">
                <h4 class="primary-color">GENERAL COMMITTEE</h4>
                <hr>
                <ul class="row items">
                    @foreach ($teams as $team)
                    @if ($team->type == "General Committee")


                    <li class="col-md-4 item market">
                        <article class="text-left"> <img class="img-responsive" src="{{asset('team_images/'.$team->image)}}" alt="">
                            <h5>{{$team->name}}</h5>
                            <p>{{$team->designation}}</p>
                            <p>{!!$team->about!!}</p>
                            <ul class="social">
                                <li><a href="tel:{{$team->phone}}"><i class="fas fa-phone-square-alt"></i>&nbsp;{{$team->phone}}</a></li>
                                <li><a href="mailto:{{$team->email}}"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{$team->email}}</a></li>
                            </ul>
                        </article>
                    </li>
                    @endif
                    @endforeach

                </ul>
            </div>

        </div>
    </section>
    @endif

    @if($teams->where('type','Advisor')->count()>0)
    <section class="team team-wrap padding-top-70 padding-bottom-20">
        <div class="container">

            <div class="text-center">
                <h4 class="primary-color">Advisor</h4>
                <hr>
                <ul class="row items">
                    @foreach ($teams as $team)
                    @if ($team->type == "Advisor")


                    <li class="col-md-3 item market">
                        <article class="text-left"> <img class="img-responsive" src="{{asset('team_images/'.$team->image)}}" alt="">
                            <h5>{{$team->name}}</h5>
                            <p>{{$team->designation}}</p>
                            <p>{!!$team->about!!}</p>
                            <ul class="social">
                                <li><a href="tel:{{$team->phone}}"><i class="fas fa-phone-square-alt"></i>&nbsp;{{$team->phone}}</a></li>
                                <li><a href="mailto:{{$team->email}}"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{$team->email}}</a></li>
                            </ul>
                        </article>
                    </li>
                    @endif
                    @endforeach

                </ul>
            </div>

        </div>
    </section>
    @endif

    @if($teams->where('type','Director')->count()>0)
    <section class="team team-wrap padding-top-70 padding-bottom-20">
        <div class="container">

            <div class="text-center">
                <h4 class="primary-color">Director</h4>
                <hr>
                <ul class="row items">
                    @foreach ($teams as $team)
                    @if ($team->type == "Director")


                    <li class="col-md-3 item market">
                        <article class="text-left"> <img class="img-responsive" src="{{asset('team_images/'.$team->image)}}" alt="">
                            <h5>{{$team->name}}</h5>
                            <p>{{$team->designation}}</p>
                            <p>{!!$team->about!!}</p>
                            <ul class="social">
                                <li><a href="tel:{{$team->phone}}"><i class="fas fa-phone-square-alt"></i>&nbsp;{{$team->phone}}</a></li>
                                <li><a href="mailto:{{$team->email}}"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{$team->email}}</a></li>
                            </ul>
                        </article>
                    </li>
                    @endif
                    @endforeach

                </ul>
            </div>

        </div>
    </section>
    @endif

    @if($teams->where('type','Higher Management')->count()>0)
    <section class="team team-wrap padding-top-70 padding-bottom-20">
        <div class="container">

            <div class="text-center">
                <h4 class="primary-color">Higher Management</h4>
                <hr>
                <ul class="row items">
                    @foreach ($teams as $team)
                    @if ($team->type == "Higher Management")


                    <li class="col-md-3 item market">
                        <article class="text-left"> <img class="img-responsive" src="{{asset('team_images/'.$team->image)}}" alt="">
                            <h5>{{$team->name}}</h5>
                            <p>{{$team->designation}}</p>
                            <p>{!!$team->about!!}</p>
                            <ul class="social">
                                <li><a href="tel:{{$team->phone}}"><i class="fas fa-phone-square-alt"></i>&nbsp;{{$team->phone}}</a></li>
                                <li><a href="mailto:{{$team->email}}"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{$team->email}}</a></li>
                            </ul>
                        </article>
                    </li>
                    @endif
                    @endforeach

                </ul>
            </div>

        </div>
    </section>
    @endif
    @if($teams->where('type','Team Member')->count()>0)
    <section class="team team-wrap padding-top-70 padding-bottom-20">
        <div class="container">

            <div class="text-center">
                <h4 class="primary-color">Team Member</h4>
                <hr>
                <ul class="row items">
                    @foreach ($teams as $team)
                    @if ($team->type == "Team Member")


                    <li class="col-md-3 item market">
                        <article class="text-left"> <img class="img-responsive" src="{{asset('team_images/'.$team->image)}}" alt="">
                            <h5>{{$team->name}}</h5>
                            <p>{{$team->designation}}</p>
                            <p>{!!$team->about!!}</p>
                            <ul class="social">
                                <li><a href="tel:{{$team->phone}}"><i class="fas fa-phone-square-alt"></i>&nbsp;{{$team->phone}}</a></li>
                                <li><a href="mailto:{{$team->email}}"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{$team->email}}</a></li>
                            </ul>
                        </article>
                    </li>
                    @endif
                    @endforeach

                </ul>
            </div>

        </div>
    </section>
    @endif

</div>
@endsection
