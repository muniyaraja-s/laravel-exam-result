<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | eStore</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/backend.css')}}">
</head>

<body>
    @include('shared.sidebar')
    @yield('content')

    <link rel="stylesheet" href="{{asset('vendor/jquery/jquery.min.js')}}">
    <script src="{{asset('js/backend.js')}}"></script>
</body>

</html>