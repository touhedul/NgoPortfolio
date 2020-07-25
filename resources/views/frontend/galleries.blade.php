@extends('layouts.frontend')
@section('title') Gallery @endsection
@section('content')
@include('includes.banner',['programName'=>'Gallery'])
<!-- Content -->
<div id="content">

    <!-- WHO WE ARE -->
    <section class="team team-wrap padding-top-70 padding-bottom-70">
        <div class="container">

            <div class="">
                <ul class="row items">
                    @foreach ($galleries as $gallery)
                    <!-- Member -->
                    <li class="col-md-4 item market">
                        <a href="#" data-fancybox="gallery">
                            <img style="margin-bottom: 20px" class="img-responsive" src="{{asset('gallery_images/big-'.$gallery->image)}}" />
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
</div>
@endsection