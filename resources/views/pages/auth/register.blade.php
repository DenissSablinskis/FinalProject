@extends('layouts.app')

@section('content')
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

        <label for="email">Jūsu e-pasts:</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}" required>

        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <label for="username">Jūsu lietotāvārds:</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required>

        @error('username')
            <div>{{ $message }}</div>
        @enderror

        <label for="password">Ievadiet paroli</label>
        <input type="password" id="password" name="password" required>

        @error('password')
            <div>{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Atkārtojie paroli</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        @error('password_confirmation')
            <div>{{ $message }}</div>
        @enderror
        
        <input type="submit" value="Reģistrēties">
    </form>

@endsection