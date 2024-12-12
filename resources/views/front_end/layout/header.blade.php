 <!-- Header Section Start -->
 <header class="header-container">
        <div class="container">
            <nav class="navbar">
                <div class="logo-container">
                    <a href="{{ route('home') }}" class="logo-link">
                    </a>
                </div>

                <div class="menu-toggle-btn"></div>

                <div class="navbar-menu">
                    <ul>
                        <li><a class="active-link" href="{{ route('home') }}">Homepage</a></li>
                        <li><a href="{{ route('play-guide') }}">How To Play</a></li>
                        <li><a href="{{ route('blogs') }}">Blogs</a></li>
                        <li><a href="{{ route('about.us') }}">About Us</a></li>
                        <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                    </ul>
                    @if(!Auth::check())

                    <a href="{{ route('register') }}" class="btn signup-btn">Sign Up</a>
                    <a href="{{ route('login') }}" class="btn login-btn">Login</a>
                   @endif

                    @if(Auth::check())

                    <div class="profile">
                        <div class="avatar">
                            <div class="avatar-content">
                                <a href="#">
                                    <div class="profile-image">
                                     <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('assets/images/user-img.png') }}" alt="dp">

                                    </div>
                                    <span>{{ ucfirst(Auth::user()->first_name) }}</span>
                                </a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                            </div>
                            <div class="dropdown">
                                <ul>
                                    <li><a href="{{ route('profile.profile') }}">
                                            <div class="profile-dropdown-options profile-image-dropdown"></div>My
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.matches') }}">
                                            <div class="profile-dropdown-options profile-image-stadium"></div>My Matches
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <div class="profile-dropdown-options profile-image-logout"></div>Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   @endif

                    <div class="menu-close-btn"></div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Section End -->