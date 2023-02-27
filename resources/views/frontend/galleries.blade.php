@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<section  class=" gallery_area">
    <div class="container ">
       <div class="text-center">
          <h3>GALLERY</h3>
        </div>  
   <div class="row">
   
    @foreach ($galleries as $gallery)
    <div class="col-md-4">
        <div class="card p-2 mb-3">
           <div class="gallary_item">
                    <img src="{{asset('gallery_images/'.$gallery->image)}}" alt="">
              {{-- <div class="left-right">
                 <div class="top">
                    <div class="img">
                       <img src="{{asset('gallery_images/'.$gallery->image)}}" alt="">
                    </div>
                 </div>
                 <div class="bottom">
                    <div class="img">
                       <img src="{{asset('gallery_images/'.$gallery->image)}}" alt="">
                    </div>
                 </div>
              </div> --}}
           </div>
        </div>
     </div>
    @endforeach
    
   </div>
   

    </div>
    </section>
@endsection
