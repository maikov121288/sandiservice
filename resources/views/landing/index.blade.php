@extends('layouts.landing')
@section('content')
    <h1>{{ __('test') }}</h1>
    <div class="language__inner">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if(LaravelLocalization::getCurrentLocale() == $localeCode)
                <span class="language__inner--active">{{ strtoupper($localeCode) }}</span>
            @else
                <a class="language__inner--link"
                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, []) }}">
                    {{ strtoupper($localeCode) }}
                </a>
            @endif
        @endforeach
    </div>
@endsection