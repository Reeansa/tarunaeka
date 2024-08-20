<header id="header" class="site-header header-style-1">
    <nav class="navigation navbar navbar-default" style="z-index: 999;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img src="assets/images/logo_000.png" alt></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}"><span @class(['link-active' => request()->routeIs('home')])>Home</span></a></li>
                    <li><a href="{{ route('about') }}"><span @class(['link-active' => request()->routeIs('about')])>About</span></a></li>
                    <li><a href="{{ route('services') }}"><span @class(['link-active' => request()->routeIs(['services', 'show']),])>Service</span></a></li>
                    <li><a href="{{ route('contact') }}"><span @class(['link-active' => request()->routeIs('contact'),])>Contact</span></a></li>
                </ul>
            </div><!-- end of nav-collapse -->

            <div class="search-contact">
                <div class="contact">
                    <div class="call">
                        <i class="fi flaticon-call"></i>
                        <p>WhatsApp 1</p>
                        <h5>+628113550723</h5>
                    </div>
                    <div class="call">
                        <i class="fi flaticon-call"></i>
                        <p>WhatsApp 2</p>
                        <h5>+628155142624</h5>
                    </div>
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
