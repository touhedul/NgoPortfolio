<header id="header" class="header clearfix">
    <div class="header-wrap clearfix">
        <div id="logo" class="logo">
            <a href="index.html" rel="home">
                <img src="{{ asset('images/' . setting('logo')) }}" alt="image">
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
                        <a href="{{ route('about.page') }}">About us</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('gallery.page') }}">gallery</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('team.page') }}">Team</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('client.page') }}">Clients</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('testimonial.page') }}">Testimonial</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('blog.page') }}">Blog</a>
                    </li>
                    <li class="home">
                        <a href="{{ route('contact.page') }}">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
        {{-- <div class="show-search">
            <a href="#"><i class="fa fa-search"></i></a>
        </div> --}}
    </div>
</header>
