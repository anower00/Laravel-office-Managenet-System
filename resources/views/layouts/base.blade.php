<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">


</head>
<body>
@include('layouts.header')
<section>
    <nav>
        <ul>
            @yield('content')
        </ul>
    </nav>
</section>
@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
