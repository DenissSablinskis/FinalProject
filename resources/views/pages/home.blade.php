@extends('layouts.app')

@section('content')
    <h1>{{ __('messages.heading') }}</h1>
    <p data-translate="text">{{ __('messages.text') }}</p>
    <picture class="about-image-wrapper">
        <source media="(min-width: 580px)" srcset="{{ asset('images/main-img.jpg') }}">
        <img src="{{ asset('images/main-img-mobile.jpg') }}" alt="Uzņēmuma logo">
    </picture>
@endsection