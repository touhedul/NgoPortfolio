@extends('layouts.admin')
@section('title','Admin Dashboard')
@section('page-title','Admin Dashboard')
@section('content')

<div class="container bootstrap snippet">
    <div class="row">
        
        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading purple">
                        <i class="fa fa-book fa-3x"></i></div>
                </a>
                <div class="circle-tile-content purple">
                    <div class="circle-tile-description text-faded">Events</div>
                    <div class="circle-tile-number text-faded ">{{$events}}</div>
                    <a class="circle-tile-footer" href="#"> <i
                            class="fa "></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading green">
                        <i class="fa fa-book fa-3x"></i></div>
                </a>
                <div class="circle-tile-content green">
                    <div class="circle-tile-description text-faded">Projects</div>
                    <div class="circle-tile-number text-faded ">{{$projects}}</div>
                    <a class="circle-tile-footer" href="#"> <i
                            class="fa "></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading green">
                        <i class="fa fa-book fa-3x"></i></div>
                </a>
                <div class="circle-tile-content green">
                    <div class="circle-tile-description text-faded">Branches</div>
                    <div class="circle-tile-number text-faded ">{{$branches}}</div>
                    <a class="circle-tile-footer" href="#"> <i
                            class="fa "></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading purple">
                        <i class="fa fa-book fa-3x"></i></div>
                </a>
                <div class="circle-tile-content purple">
                    <div class="circle-tile-description text-faded">Teams</div>
                    <div class="circle-tile-number text-faded ">{{$teams}}</div>
                    <a class="circle-tile-footer" href="#"> <i
                            class="fa "></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading purple">
                        <i class="fa fa-book fa-3x"></i></div>
                </a>
                <div class="circle-tile-content purple">
                    <div class="circle-tile-description text-faded">Testimonials</div>
                    <div class="circle-tile-number text-faded ">{{$testimonials}}</div>
                    <a class="circle-tile-footer" href="#"> <i
                            class="fa "></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading green">
                        <i class="fa fa-book fa-3x"></i></div>
                </a>
                <div class="circle-tile-content green">
                    <div class="circle-tile-description text-faded">Jobs</div>
                    <div class="circle-tile-number text-faded ">{{$jobs}}</div>
                    <a class="circle-tile-footer" href="#"> <i
                            class="fa "></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

