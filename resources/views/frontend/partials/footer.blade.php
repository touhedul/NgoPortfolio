<footer class="footer flat-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-2" style="margin-top: 45px;">
                    <img src="{{ asset('images/' . setting('logo')) }}" alt="image">
                </div>
                <div class="col-md-4">
                    <div class="widget widget_text">
                        <h4 class="widget-title">about us</h4>
                        <div class="textwidget">
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                                mus. Phasellus finibus augue non tellus viverra, eget finibus lacus sagittis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget widget-categories">
                        <h4 class="widget-title">company</h4>
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('team.page') }}">Team</a></li>
                            <li><a href="{{ route('service.page') }}">Services</a></li>
                            <li><a href="{{ route('project.page') }}">Project</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget widget-text">
                        <h4 class="widget-title">business hour</h4>
                        <div class="textwidget">
                            <p>Our support available to help you 24 hours a day, seven days a week.</p>
                            <p class="time">Monday-Friday: 9am to 5pm</p>
                            <p class="time">Saturday: 10am to 2pm</p>
                            <p class="time">Sunday: Closed</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<div class="bottom flat-animation" data-animation="fadeInDown" data-animation-delay="0" data-animation-offset="75%">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="copyright">
                    <p>© Copyright <a href="#">Alitstudio</a> 2015. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<a class="go-top">
    <i class="fa fa-angle-up"></i>
</a>
