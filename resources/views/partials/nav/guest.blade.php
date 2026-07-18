<a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active-link' : '' }}">{{ __('messages.navHome') }}</a>
<a href="#">{{ __('messages.navProducts') }}</a>
<a href="{{ route('login') }} " class="{{ request()->routeIs('login') ? 'active-link' : '' }}">{{ __('messages.navLogin') }}</a>
<a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active-link' : '' }}">{{ __('messages.navRegister') }}</a>
