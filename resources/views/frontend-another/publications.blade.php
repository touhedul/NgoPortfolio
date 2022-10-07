@extends('layouts.frontend')
@section('title') Resource @endsection
@section('content')
@include('includes.banner',['programName'=>'Resource'])
<div id="content">

    <!-- Job -->
    <section class="job padding-top-70 padding-bottom-70">
        <div class="container">

            <!-- Job  Content -->
            <div class="col-md-8">

                <!-- About Admin -->
                <h4 class="font-normal margin-bottom-20">Latest Resource</h4>


                <!-- Job Content -->
                <div id="accordion">

                    <!-- Job Section -->
                    @foreach ($publications as $publication)
                    <div class="job-content job-post-page margin-top-20">
                        <div class="panel panel-default">
                            <!-- Save -->
                            <div class="star-save"><a href="#."><i class="fa fa-caret-down"></i></a> </div>
                            <!-- PANEL HEADING -->
                            <div class="panel-heading"> <a data-toggle="collapse" href="#job{{$publication->id}}">
                                    <div class="job-tittle">
                                        <div class="media-left">
                                            <div class="date"> {{date('d ',strtotime($publication->created_at))}}
                                                <span>{{date('M ',strtotime($publication->created_at))}}</span> </div>
                                        </div>
                                        <div class="media-body">
                                            <h5>{{$publication->title}}</h5>
                                        </div>
                                    </div>
                                </a>
                                <p>{!!Str::limit($publication->details,100)!!}</p>
                            </div>

                            <!-- ADD INFO HERE -->
                            <div id="job{{$publication->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>

                                        {!!substr($publication->details, 100, 65530)!!}
                                        @if ($publication->image != NULL)
                                        <p style="color: blue"> <a download
                                                href="{{asset('files/'.$publication->image)}}">Download
                                                File</a></p>

                                        @endif
                                    </p>

                                    <br>

                                    <!-- Share -->
                                    {{-- <div class="col-md-4"> <a href="#." class="sm-tags"></a> </div> --}}

                                    <!-- Clodes -->
                                    <div class="col-md-3 text-right pull-right"> <a class="sm-tags"
                                            data-toggle="collapse" href="#job{{$publication->id}}"> <i
                                                class="fa fa-angle-up margin-right-5"></i>Less Info </a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
                <br><br><br>


                <div class="row">
                    <div class="col-md-6">
                        {{$publications->links()}}
                    </div>
                </div>


            </div>


        </div>
    </section>
</div>
@endsection
