@extends('layouts.frontend')
@section('title') Branches @endsection
@section('content')
@include('includes.banner',['programName'=>'Branches'])

<div class="contact-info  padding-top-70 padding-bottom-50">
    <div class="container">

        <!-- Heading -->
        <div class="heading black text-center branch-info padding-20">
            <h4>our Branches</h4>
            <span>We are in</span>
        </div>
        <ul class="row">

            @foreach ($branches as $branch)

            <li class="col-md-4 margin-top-25">
                <article>
                    <h5>{{$branch->title}}</h5>
                    <p>{{$branch->short_details}}</p>
                    <span class="margin-top-30"><i class="fa fa-phone"></i>{{$branch->phone}}</span>
                    <span class="primary-color"><a href="{{route('branch.single',$branch->id)}}"> See More <i
                                class="fa fa-arrow-right"></i> </a></span>
                </article>
            </li>
            @endforeach


        </ul>
    </div>
</div>
@endsection