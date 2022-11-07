<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/tools.js') }}"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    </head>
    <body background="https://images.pexels.com/photos/139312/pexels-photo-139312.jpeg?cs=srgb&dl=pexels-fwstudio-139312.jpg&fm=jpg&_gl=1*19xpb18*_ga*MTU0OTMxMDU3LjE2NjA4ODQzNjY.*_ga_8JE65Q40S6*MTY2NzgxNzM0MC4xMS4xLjE2Njc4MTc5NTUuMC4wLjA.">
        @include('layouts.nav')
        
        @yield('content')
        @section('inline_js')
        @show
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>
</html>
