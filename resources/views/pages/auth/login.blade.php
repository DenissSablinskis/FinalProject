@extends('layouts.app')

@section('content')
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

        <label for="email">Ievadiet e-pasta adresi</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}" required>

        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <label for="password">Ievadiet paroli</label>
        <input type="password" id="password" name="password" required>

        @error('password')
            <div>{{ $message }}</div>
        @enderror
        
        <input type="submit" value="Ieiet">
    </form>

@endsection