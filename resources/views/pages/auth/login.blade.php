@extends('layouts.app')

@section('content')
    <h1 class="form-title">Autorizācija</h1>
    <form method='post' action="{{ route('login.store') }}">
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

        <label for="email">{{ __('messages.loginEmail') }}</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}" required>

        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <label for="password">{{ __('messages.loginPassword') }}</label>
        <input type="password" id="password" name="password" required>

        @error('password')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">{{ __('messages.loginButton') }}</button>
    </form>

@endsection