<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/js/app.js')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">

<nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
        <li class="p-3">
            <a href="">Home</a>
        </li>
        <li class="p-3">
        <a href="">Dashboard</a>
        </li>
        <li class="p-3">
        <a href="">Posts</a>
        </li>
    </ul>
    <ul class="flex items-center">
        <li class="p-3">
            <a href="">Miroslav Kolev</a>
        </li>
        <li class="p-3">
        <a href="">Login</a>
        </li>
        <li class="p-3">
        <a href="{{route('register')}}">Register</a>
        </li>
        <li class="p-3">
        <a href="">Logout</a>
        </li>
    </ul>
</nav>
@yield('content')
</body>
</html>
