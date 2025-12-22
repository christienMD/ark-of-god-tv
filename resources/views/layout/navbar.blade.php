    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
			<!-- Logo Start -->
			<a class="navbar-brand header-logo" href="{{ route('landing') }}">
				AGCOM TV
			</a>
			<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                                <li class="nav-item {{ request()->routeIs('live.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('live.index') }}">Live</a></li>
                                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                                <li class="nav-item {{ request()->routeIs('events') ? 'active' : '' }}"><a class="nav-link" href="{{ route('events') }}">Events</a></li>
                                <li class="nav-item {{ request()->routeIs('branches.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('branches.index') }}">Branches</a></li>
                                <li class="nav-item {{ request()->routeIs('visit') ? 'active' : '' }}"><a class="nav-link" href="{{ route('visit') }}">Visit Us</a></li>
                                <li class="nav-item {{ request()->routeIs('partnership') ? 'active' : '' }}"><a class="nav-link" href="{{ route('partnership') }}">Partnership</a></li>
                                <li class="nav-item {{ request()->routeIs('blogs.*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('blogs.index') }}">Blogs</a></li>
                                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                                <li class="nav-item {{ request()->routeIs('john-chi-foundation') ? 'active' : '' }}"><a class="nav-link" href="{{ route('john-chi-foundation') }}">Foundation</a></li>                               
                            </ul>
                        </div>
                        <!-- Let's Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="{{ route('give') }}" class="btn-default">Give</a>
                        </div>
                        <!-- Let's Start Button End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
