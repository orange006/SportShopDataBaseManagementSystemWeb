<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cover.css') }}">
        <title>
            @yield("app-title")
        </title>
    </head>

    <body class="text-center">
        <div class="container w-100 p-3 mx-auto ">
            <header class="masthead mb-auto d-flex flex-column">
                <div class="inner d-flex flex-column">
                    <h3 class="masthead-brand">@yield("app-title")</h3>
                    <nav class="nav nav-masthead mt-3 justify-content-center">
                        <a class="nav-link" href="/">Головна</a>
                        <a class="nav-link" href="/employees">Працівники</a>
                        <a class="nav-link" href="/customers">Клієнти</a>
                        <a class="nav-link" href="/orders">Замовлення</a>
                        <a class="nav-link" href="/products">Продукція</a>
                        <a class="nav-link" href="/supplies">Поставки</a>
                        <a class="nav-link" href="/providers">Постачальники</a>
                        <a class="nav-link" href="/about">Про нас</a>
                    </nav>
                </div>
            </header>

            <main role="main" class="inner cover">
                <h1 class="cover-heading mt-5">@yield("page-title")</h1>

                @yield("page-content")
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    @yield("page-footer")
                </div>
            </footer>
        </div>
    </body>
</html>
