<!doctype html>
<head>

</head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'default title') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body>
    @include('includes.navbar')
    <div class="container">
        @yield('page-content')
    </div>
</body>
</html>