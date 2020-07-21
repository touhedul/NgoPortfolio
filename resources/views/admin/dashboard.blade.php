@extends('layouts.admin')
@section('title','Admin Dashboard')
@section('page-title','Admin Dashboard')
@section('content')

<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading dark-blue">
                        <i class="fa fa-book fa-3x"></i></div>
                </a>
                <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded">Users </div>
                    <div class="circle-tile-number text-faded ">{{$users}}</div>
                    <a class="circle-tile-footer" href="{{route('admin.user.index')}}">More Info <i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading blue"><i class="fa fa-briefcase fa-3x"></i></div>
                </a>
                <div class="circle-tile-content blue">
                    <div class="circle-tile-description text-faded"> Online Users </div>
                    <div class="circle-tile-number text-faded ">20</div>
                    <a class="circle-tile-footer" href="#">More Info <i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="circle-tile ">
                <a href="#">
                    <div class="circle-tile-heading purple">
                        <i class="fa fa-shopping-basket fa-3x"></i></div>
                </a>
                <div class="circle-tile-content purple">
                    <div class="circle-tile-description text-faded"> Disable Users </div>
                    <div class="circle-tile-number text-faded ">50</div>
                    <a class="circle-tile-footer" href="#">More Info <i
                            class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

