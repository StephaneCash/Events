<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
        @yield('content')
    </div>
</body>

</html>
