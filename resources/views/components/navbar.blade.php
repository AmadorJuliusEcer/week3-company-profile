<nav class="navbar">

    <div class="navbar-container">

        <!-- LOGO -->
        <a href="{{ route('home') }}" class="logo">
            <span class="logo-mark">V</span>
            <span>Veyrion</span>
        </a>

        <!-- NAVIGATION -->
        <ul class="nav-links">

            <li>
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </li>

            <li>
                <a href="{{ route('services') }}"
                   class="{{ request()->routeIs('services') ? 'active' : '' }}">
                    Services
                </a>
            </li>

            <li>
                <a href="{{ route('contact') }}"
                   class="nav-cta {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact Us
                </a>
            </li>

        </ul>

    </div>

</nav>