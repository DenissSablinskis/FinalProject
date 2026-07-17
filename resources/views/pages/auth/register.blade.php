@extends('layouts.app')

@section('content')
    <h1 class="form-title">Reģistrācija</h1>
    <form method='post' action="{{ route('register.store') }}">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="email">{{ __('messages.registerEmail') }}</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}" required>

        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <label for="username">{{ __('messages.registerUsername') }}</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required>

        @error('username')
            <div>{{ $message }}</div>
        @enderror

        <label for="password">{{ __('messages.registerPassword') }}</label>
        <input type="password" id="password" name="password" required>

        @error('password')
            <div>{{ $message }}</div>
        @enderror

        <label for="password_confirmation">{{ __('messages.registerConfirmPassword') }}</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        @error('password_confirmation')
            <div>{{ $message }}</div>
        @enderror
        
        <button type="submit">{{ __('messages.registerButton') }}</button>
    </form>

@endsection