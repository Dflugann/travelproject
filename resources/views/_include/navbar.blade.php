<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo">
                        <a href="index.html">
                            <img class="img-responsive" src="{{ asset('images/logo_travelAgency.png') }}" alt="logo_travelAgency" width="200">
                        </a>
                    </div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li class="{{ $navSelect == 'home' ? 'active' : '' }}"><a href={{ route('site.home')  }}>Home</a></li>
                        <li class="has-dropdown {{ $navSelect == 'tours' ? 'active' : '' }}">
                            <a href="{{ route('site.tours') }}">Tours</a>
                            <ul class="dropdown">
                                <li><a href="#">Destination</a></li>
                                <li><a href="#">Cruises</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Booking</a></li>
                            </ul>
                        </li>
                        <li class="{{ $navSelect == 'hotels' ? 'active' : '' }}"><a href="{{ route('site.hotels') }}">Hotels</a></li>
                        <li class="{{ $navSelect == 'services' ? 'active' : '' }}"><a href="{{ route('services.index') }}">Services</a></li>
                        <li class="{{ $navSelect == 'blog' ? 'active' : '' }}"><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li class="{{ $navSelect == 'about' ? 'active' : '' }}"><a href="{{ route('about.index') }}">About</a></li>
                        <li class="{{ $navSelect == 'contact' ? 'active' : '' }}"><a href={{ route('site.contact')  }}>Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>