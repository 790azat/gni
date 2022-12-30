<!doctype html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('images/gni.png') }}"/>
    @include('other.yandex-metrika')
    @include('other.jivo')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    <title>Gni</title>
</head>
<body @if(session('alert')) onload="$('.toast').toast('show');" @endif style="background: #309847">
    @if(Route::currentRouteName() == 'welcome' or explode('/',Route::current()->uri)[0] == 'category')
        @include('components.sidebar')
    @endif
    @include('components.alert')
    @include('components.header')
    <div class="col-12">
        @include('components.snow')
    </div>
    @yield('content')
    @include('components.scripts')
    @livewireScripts
</body>
</html>
