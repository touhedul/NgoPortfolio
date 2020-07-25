@extends('layouts.frontend')
@section('title') Jobs @endsection
@section('content')
@include('includes.banner',['programName'=>'Jobs'])
<div id="content">

    <!-- Job -->
    <section class="job padding-top-70 padding-bottom-70">
        <div class="container">

            <!-- Job  Content -->
            <div class="col-md-8">

                <!-- About Admin -->
                <h4 class="font-normal margin-bottom-20">available jobs</h4>


                <!-- Job Content -->
                <div id="accordion">




                    <!-- Job Section -->
                    <div class="job-content job-post-page margin-top-20">
                        <div class="panel panel-default">
                            <!-- Save -->
                            <div class="star-save"><a><i class="fa fa-caret-down"></i></a> </div>
                            <!-- PANEL HEADING -->
                            @foreach ($jobs as $job)
                            <div class="panel-heading"> <a data-toggle="collapse">
                                    <div class="job-tittle">
                                        <div class="media-left">
                                            <div class="date"> {{date('d ',strtotime($job->last_date))}}
                                                <span>{{date('M ',strtotime($job->last_date))}}</span> </div>
                                        </div>
                                        <div class="media-body">
                                            <h5>{{$job->title}}</h5>
                                            <span>{{$job->location}}</span>
                                        </div>
                                    </div>
                                </a>
                                <p> {!!$job->details!!}</p>
                            </div><br><br><br>
                            @endforeach
                        </div>
                    </div>


                </div>
                <br><br><br>


                <div class="row">
                    <div class="col-md-6">
                        {{$jobs->links()}}
                    </div>
                </div>


            </div>


        </div>
    </section>
</div>
@endsection