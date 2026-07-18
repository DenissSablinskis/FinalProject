@extends('layouts.app')

@section('content')
    <div class="auth-container">
        <div class="auth-sidebar"></div>
        <div class="auth-form-wrapper">
            <h1 class="form-title">Autorizācija</h1>
            <form method='post' action="{{ route('login.store') }}">
                @csrf
                <div class='input-group'>
                    <label for="email">{{ __('messages.loginEmail') }}</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class='field-error'>{{ $message }}</div>
                    @enderror
                </div>

                <div class='input-group'>
                    <label for="password">{{ __('messages.loginPassword') }}</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')
                        <div class='field-error'>{{ $message }}</div>
                    @enderror
                </div>

                <button class="submit-btn" type="submit">{{ __('messages.loginButton') }}</button>
            </form>
        </div>
    </div>

@endsection