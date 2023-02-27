@extends('layouts.frontend')
@section('title')
{{setting('website_name')}}
@endsection
@section('content')
<section class="container" >
    <!-- <div class="contact-bg"></div> -->
    <img class="w-100" src="{{ asset('frontend/assets/images/contact_img.png') }}" alt="">
  </section>
@endsection
