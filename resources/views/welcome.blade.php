<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой интернет магазин</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/bootstrap.css">
    <script src="/public/assets/js/bootstrap.js"></script>
</head>
<body>
@include('home.header')
    <div class="main">
        @yield('content')
    </div>
@include('home.footer')
</body>
</html>
