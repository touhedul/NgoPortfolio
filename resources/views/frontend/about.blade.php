@extends('layouts.frontend')
@section('title') About @endsection
@section('content')
@include('includes.banner',['programName'=>'About'])
<!-- WHO WE ARE -->
<section class="padding-top-70 padding-bottom-70">
    <div class="container">
        <div class="who-we">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="font-normal">who we are</h3>
                    <h6>Pushing out limits to provide the highest quality services</h6>
                    <p class="text-justify"> is a development success story – founded in Bangladesh, we are by some
                        measures the largest non-governmental organisation in the world, an innovator in poverty
                        eradication and a social enterprise. Demonstrating the power of a holistic, community-based
                        approach and best known for the scale of our programmes, we have created opportunities for 138
                        million people.
                        <br>
                        <br>
                        The heroes of our story are people, in particular women struggling in poverty, but the
                        challenges against them are immense. We are a southern based enterprise committed to working
                        with communities to design programmes that will effectively and efficiently solve the problems
                        they have identified.
                        <br><br>

                        We will concentrate our efforts on three priorities; education and empowerment, equitable
                        economic development and access to health and water, sanitation and hygiene services.
                    </p>


                </div>
                <div class="col-md-6">

                    <!-- SERVICES -->
                    <ul class="row">

                        <!-- SERVICES -->
                        <li class="col-sm-12"> <i class="fa fa-eye"></i>
                            <h5>our vision</h5>
                            <p>Phasellus congue lacus eget neque. Phasellus ornare, vitae consectetuer consequat, purus
                                sapien ultricies dolor,</p>
                        </li>

                        <!-- SERVICES -->
                        <li class="col-sm-12"> <i class="fa fa-rocket"></i>
                            <h5>our mission</h5>
                            <p>Phasellus congue lacus eget neque. Phasellus ornare, vitae consectetuer consequat, purus
                                sapien ultricies dolor,</p>
                        </li>
                    </ul>

                    <hr>

                    <div class="col-md-6">
                        <div class="broc">
                            <img class="img-responsive" src="images/q4.png" alt="">
                            <a href="#." class="icon-down"><i class="fa fa-download"></i></a>
                            <a href="#." class="icon-file">Get Portfolio</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="broc">
                            <img class="img-responsive" src="images/q1.png" alt="">
                            <a href="#." class="icon-down"><i class="fa fa-download"></i></a>
                            <a href="#." class="icon-file">Get Portfolio</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>
@endsection