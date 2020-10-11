<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-md bg-light bg-dark navbar-dark">


        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav m-auto">
                <li class="nav-item @yield('nav')">
                    <a class="nav-link" href="/">Add Item</a>
                </li>
                <li class="nav-item @yield('nav2')">
                    <a class="nav-link" href="/list">View Item</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    @include('partials.success')
    @include('partials.error')
    <div class="my-3">
        @yield('content')
    </div>
</div>
</body>
</html>
