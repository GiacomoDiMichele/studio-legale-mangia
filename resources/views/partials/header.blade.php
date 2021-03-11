<header :class="isActive ? 'active' : ''">
        <div class="header-navbar">
            <div class="header-logo">
                <a href="{{ route('welcome') }}">
                    <div class="logo">
                            <img src="{{ asset('images/logo-studio.png') }}" alt="logo-studio-legale">
                    </div>
                </a>
            </div>
            <div class="header-menu">
                <ul>
                    <li>
                        <a href="#">Professionisti</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">Contatti</a>
                    </li>
                    <li>
                        <a href="#">Risorse</a>
                    </li>
                    <li>
                        <a href="#">Competenze</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                    <li>
                        <a href="#">Link</a>
                    </li>
                </ul>
            </div>
            <div class="toggle-menu"  @click="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="menu-mobile"> {{--:class="isActive ? 'active' : ''"> --}}
            <div class="nav-menu-mobile">
                <ul>
                    <li>
                        <a href="#">Professionisti</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contatti</a>
                    </li>
                    <li>
                        <a href="#">Risorse</a>
                    </li>
                    <li>
                        <a href="#">Competenze</a>
                    </li>
                </ul>
            </div>
        </div>
</header>
