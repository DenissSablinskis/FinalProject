<a href="#" class="active-link">{{ __('messages.navHome') }}</a>
<a href="#">{{ __('messages.navProfile') }}</a>
<a href="#">{{ __('messages.navProducts') }}</a>
<a href="#">{{ __('messages.navCart') }}</a>
<form method='post' action="{{ route('logout') }}">
    @csrf
    <button type="submit">{{ __('messages.navLogout') }}</button>
</form