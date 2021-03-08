<header :class="isActive ? 'active' : ''">

    <div id="wp-header" class="wp-header">

        <div id="menu-fixed">

            <div class="header-navbar">
                <a href="{{ route('welcome') }}">
                    <div class="logo">
                        <img src="{{ asset('images/logo-studio.png') }}" alt="logo-studio-legale">
                    </div>
                </a>
                <div class="header-right">
                    <div class="toggle-menu"  @click="toggleMenu()">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>

            </div>


        </div>
</header>
