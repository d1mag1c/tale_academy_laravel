<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>d1mag1c - laravel10</title>
</head>
<body>
<div class="wrapper">
    <section class="header">
        <div class="header__nav">
            <a href="/">Главная</a>
            <a href="{{route('blog.index')}}">Blog</a>
        </div>

    </section>
    <section class="main">
        @yield('content')
    </section>
    <section class="footer">
        <p>&copy; All rights reversed. Дмитрий Зайцев. &#9786;</p>
    </section>
</div>
</body>
</html>
