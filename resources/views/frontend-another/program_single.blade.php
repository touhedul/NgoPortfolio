@extends('layouts.frontend')
@section('title') {{$program->category}} @endsection
@section('content')
@include('includes.banner',['programName'=>$program->category])
<!-- Content -->
<div id="content">

    <!-- BLOG -->
    <section class="blog blog-pages padding-top-70 padding-bottom-70">
        <div class="container">
            <div class="row">


                <div class="col-md-12">

                    <!-- Post -->
                    <article> <img class="img-responsive col-md-12"
                            src="{{asset('program_images/big-'.$program->image)}}" alt="">
                        <!-- Date -->
                        {{-- <div class="date"> 19 <span>MAY</span> </div> --}}
                        <!-- Detail -->
                        <div class="post-detail" style="border-bottom: 0px;"> <a
                                class="post-tittle padding-30">{{$program->title}}</a>

                            <p class="col-md-12 text-justify margin-bottom-30">
                                {!!$program->details!!}
                            </p>

                            <br>

                            @if ($program->category == 'NOTICES' && $program->image != NULL)
                            <p style="color: blue"> <a download href="{{asset('files/'.$program->image)}}">Download
                                    File</a></p>

                            @endif



                            <!-- Tags -->

                        </div>
                    </article>

                </div>

            </div>
            @if ($program->category == 'News')
            @foreach (App\Models\Program::where('category','News')->latest()->get() as $news)
                
            <div class="row">


                <div class="col-md-12">
                   <a href="{{$news->programUrl()}}"> <h6 style="color: #52BE80">
                    {{$news->title}}</h6></a>
                </div>
            </div>@endforeach
            @endif
        </div>
    </section>
</div>
@endsection