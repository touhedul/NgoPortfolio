@extends('layouts.frontend')
@section('title') Branch @endsection
@section('content')
@include('includes.banner',['programName'=>'Branch'])
<div id="content">

    <!-- Job -->
    <section class="job padding-top-70 padding-bottom-70">
        <div class="container">

            <!-- Job  Content -->
            <div class="col-md-8">

                <!-- About Admin -->


                <!-- Job Content -->
                <div id="accordion">




                    <!-- Job Section -->
                    <div class="job-content job-post-page margin-top-20">
                        <div class="panel panel-default">

                            <div class="panel-heading"> <a data-toggle="collapse" href="notice-details.php">
                                    <div class="job-tittle">

                                        <div class="media-body">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                                <h5> {{$branch->title}} </h5>
                                <p>
                                    {{$branch->short_details}}
                                </p>
                                <p>{!!$branch->details!!}}</p>
                                <p>Phone : {{$branch->phone}}</p>
                            </div>


                        </div>
                    </div>

                </div>
                <br><br><br>


            </div>


            <!-- Side Bar -->
            <div class="col-md-4">
                <div class="job-sider-bar">


                    <!-- Filter Results -->
                    <h5 class="side-tittle margin-top-30">All Branches</h5>

                    <!-- By Region -->
                    <ul class="cate result">
                        @foreach ($branches as $branch)
                        <li> <a href="{{route('branch.single',$branch->id)}}"> {{$branch->title}}</a></li>
                        @endforeach

                    </ul>

                </div>
            </div>


        </div>
    </section>
</div>
@endsection