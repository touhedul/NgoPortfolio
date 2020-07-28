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
                    {{-- <div class="job-content job-post-page margin-top-20">
                        <div class="panel panel-default">
                            <div class="star-save"><a><i class="fa fa-caret-down"></i></a> </div>
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
</div> --}}

@foreach ($jobs as $job)
<!-- Job Section -->
<div class="job-content job-post-page margin-top-20">
    <div class="panel panel-default">
        <!-- Save -->
        <div class="star-save"><a href="#."><i class="fa fa-caret-down"></i></a> </div>
        <!-- PANEL HEADING -->
        <div class="panel-heading"> <a data-toggle="collapse" href="#job{{$job->id}}">
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
            <p>{!!Str::limit($job->details,100)!!}</p>
        </div>

        <!-- ADD INFO HERE -->
        <div id="job{{$job->id}}" class="panel-collapse collapse">
            <div class="panel-body">
                <p>

                    {!!substr($job->details, 100, 65530)!!}
                </p>

                <br>

                <!-- Share -->
                {{-- <div class="col-md-4"> <a href="#." class="sm-tags"></a> </div> --}}

                <!-- Clodes -->
                <div class="col-md-3 text-right pull-right"> <a class="sm-tags" data-toggle="collapse"
                        href="#job{{$job->id}}"> <i class="fa fa-angle-up margin-right-5"></i>Less Info </a> </div>
            </div>
        </div>
    </div>
</div>
@endforeach


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