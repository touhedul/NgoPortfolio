<header id="header" class="header clearfix">
    <div class="header-wrap clearfix">
        <div id="logo" class="logo">
            <a href="{{ route('index') }}" rel="home">
                <img src="{{ asset('images/' . setting('logo')) }}" alt="image">
                {{-- <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/' . setting('logo')) }}" alt="image">
                    </div>
                    <div class="col-md-8">
                        <h6 style='font-family: "Condensed-Black";font-size: 20px'>Inspection</h6>
                        <h6 style='font-family: "Condensed-Black";font-size: 10px'>Engineering & Survey Ltd</h6>
                    </div>
                </div> --}}


            </a>
        </div>
        <div class="nav-wrap">
            <div class="btn-menu"></div>
            <nav id="mainnav" class="mainnav">
                <ul class="menu">
                    <li class="home">
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('service.page') }}">Services</a>
                        <ul class="submenu">
                            @foreach ($service as $key=> $value )
                            <li><a href="{{route('service.type', preg_replace('/\s+/im','_',$key))}}">{{$key}}</a></li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="home">
                        <a href="{{ route('about.page') }}">About us</a>
                        <ul class="submenu">
                            <li><a href="">Founder </a></li>
                            <li><a href="">Company Profile</a></li>
                            @if ($management)
                            <li><a href="{{route('team.type',preg_replace('/\s+/im','_',$management->type))}}">{{$management->type}}</a></li>
                            @endif

                        </ul>
                    </li>
                    <li class="home">
                        <a href="{{ route('project.page') }}">Projects</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('team.page') }}">Team</a>
                            <ul class="submenu">
                                @foreach ($team as $key=> $value )
                                <li><a href="{{route('team.type',preg_replace('/\s+/im','_',$key))}}">{{$key}}</a></li>
                                @endforeach

                            </ul>
                    </li>
                    {{-- <li class="home">
                        <a href="{{ route('gallery.page') }}">gallery</a>
                    </li> --}}
                    <li class="home">
                        <a href="{{ route('client.page') }}">Clients</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('contact.page') }}">Contact</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('job.page') }}">Career</a>
                    </li>
                </ul>
            </nav>
        </div>
        {{-- <div class="show-search">
            <a href="#"><i class="fa fa-search"></i></a>
        </div> --}}
    </div>
</header>
