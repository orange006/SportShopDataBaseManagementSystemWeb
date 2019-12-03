<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield("app-title")
    </title>
</head>
<body>
<ul>
    <li><a href="/">Головна</a></li>
    <li><a href="/about">Про нас</a></li>
    <li><a href="/employees">Працівники</a></li>
    <li><a href="/customers">Клієнти</a></li>
    <li><a href="/orders">Замовлення</a></li>
    <li><a href="/products">Продукція</a></li>
    <li><a href="/supplies">Поставки</a></li>
    <li><a href="/providers">Постачальники</a></li>
</ul>

<h1>
    @yield("page-title")
</h1>

@yield("page-content")
</body>
</html>
