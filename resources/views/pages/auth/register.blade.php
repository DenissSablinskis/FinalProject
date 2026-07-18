@extends('layouts.app')

@section('content')
    <div class='auth-container'>
        <div class="auth-sidebar"></div>
        <div class="auth-form-wrapper">
            <h1 class="form-title">{{ __('messages.registerTitle') }}</h1>
            <form method='post' action="{{ route('register.store') }}">
                @csrf

                <div class="input-group">
                    <label for="email">{{ __('messages.registerEmail') }}</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="field-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="username">{{ __('messages.registerUsername') }}</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required>
                    @error('username')
                        <div class="field-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password">{{ __('messages.registerPassword') }}</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')
                        <div class="field-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password_confirmation">{{ __('messages.registerConfirmPassword') }}</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                    @error('password_confirmation')
                        <div class="field-error">{{ $message }}</div>
                    @enderror
                </div>
                
                <button class="submit-btn" type="submit">{{ __('messages.registerButton') }}</button>
            </form>
            <div class='redirect'>
                <p>{{ __('messages.registered') }} <a href="{{ route('login') }}">{{ __('messages.toLogin') }}</a></p> 
            </div>
        </div>
    </div>
@endsection