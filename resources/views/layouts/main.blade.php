<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real estate</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">

    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                        aria-label="Toggle navigation" data-target="#pagesNav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="pagesNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('home')}}"
                           class="nav-link"><strong>Homepage</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('flat.index')}}"
                           class="nav-link"><strong>Flats</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/category/food"
                           class="nav-link"><strong>Agencies</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/category/technology"
                           class="nav-link"><strong>Posts</strong></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://material-blog-pro-laravel.creative-tim.com/category/fashion"
                           class="nav-link"><strong>Parties</strong></a>
                    </li>
                </ul>
                <form action="https://material-blog-pro-laravel.creative-tim.com/search" class="form-inline ml-3">
                    <div class="form-group no-border nav-category-search bmd-form-group">
                        <input type="text" class="form-control" name="searching" placeholder="Search">
                    </div>
                    <button type="submit" style="margin-right: 30px;" class="btn btn-white btn-just-icon btn-round">
                        <i class="material-icons">search</i>
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container mt-8"
    @yield('content')
</div>
</div>
</body>
</html>
