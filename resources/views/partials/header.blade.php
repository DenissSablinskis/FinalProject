    <header>
            <!-- Burgera izvēlne -->
            <button class="burger-menu" id="burgerBtn" aria-label="Atvērt navigācijas izvēlni">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <!-- Uzņēmuma logotips -->
            <div class="logo">GAISMA</div>

            <!-- Navigācijas saites -->
            <nav class="nav-links" id="navLinks">
                @auth
                    @include('partials.nav.auth')
                @else
                    @include('partials.nav.guest')
                @endauth
            </nav>
            
            <div class="langAndTheme">

                <!-- Valodas izvēlne -->
                <form method='post' action="{{ route('locale.switch', ['locale' => 'lv']) }}">
                    @csrf
                    <button type="submit" class="toggleLanguage {{ app()->getLocale() === 'lv' ? 'active' : '' }}">
                        LV
                    </button>
                </form>
                <form method='post' action="{{ route('locale.switch', ['locale' => 'en']) }}">
                    @csrf
                    <button type="submit" class="toggleLanguage {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                        EN
                    </button>
                </form>
                
                <!-- Tēmas pārslēgšanas poga -->
                <button id="themeToggle"></button>
        
            </div>
            
        </header>