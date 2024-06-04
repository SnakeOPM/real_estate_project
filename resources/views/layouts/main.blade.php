<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real estate</title>
    <!---@vite(['resources/sass/app.scss', 'resources/js/app.js'])-->
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
</head>
<body>
<header class="container">

    <nav class="navbar navbar-expand-lg bg-white">
            <div class="collapse navbar-collapse" id="pagesNav">
                <nav class="navbar-nav">
                        <a href="{{route('home')}}"
                           class="nav-link">Homepage</a>
                        <a href="{{route('flat.index')}}"
                           class="nav-link">Flats</a>
                        <a href="/"
                           class="nav-link">Agencies</a>
                        <a href="/"
                           class="nav-link">Posts</a>
                        <a href="{{route('party.index')}}"
                           class="nav-link">Parties</a>
                </nav>
            </div>
        </div>
    </nav>

</header>

    <div class="container mt-8">
    @yield('content')
</div>
</body>
</html>
