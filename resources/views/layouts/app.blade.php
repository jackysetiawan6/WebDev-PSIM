<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('bootstrap-5.3.3-dist/jquery-3.7.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist/dataTables.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    <link rel="shortcut icon" href="{{ asset('logo.svg') }}" type="image/x-icon">
    <title>@yield('title')</title>
</head>

<body lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-black">
    @include('components.header')
    <div class="content">
        @yield('content')
    </div>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3-dist/dataTables.js') }}"></script>
    <script src="{{ asset('custom.js') }}"></script>
</body>

</html>
