<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Events</title>
</head>

<style>
    .error {
        color: red;
    }

</style>

<body>
    @include('layouts.partials.nav')

    <div class="content container">

        @if (session()->has('notification.message'))
            <div class="alert alert-{{ session('notification.type') }}">
                {{ session()->get('notification.message') }}
            </div>
        @endif
        @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.js "> </script>
    @include('flashy::message')
</body>

</html>
