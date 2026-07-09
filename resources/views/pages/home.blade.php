@extends('layouts.app')

@section('content')
    <h1>{{ __('messages.heading') }}</h1>
    <p data-translate="text">{{ __('messages.text') }}</p>
    <img src="{{ asset('images/main-img-mobile.jpg') }}" alt="Uzņēmuma logo">
@endsection