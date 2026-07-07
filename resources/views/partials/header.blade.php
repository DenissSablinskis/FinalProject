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
                <button class="toggleLanguage" id="lv">LV</button>
                <button class="toggleLanguage" id="en">EN</button>
                
                <!-- Tēmas pārslēgšanas poga -->
                <button id="themeToggle"></button>
        
            </div>
            
        </header>