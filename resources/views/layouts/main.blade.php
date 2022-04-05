<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/app.css">

</head>
<body>

<div class="container">
    <header class="header center">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="/" style="text-decoration: none; color: white"><img src="../../img/Logo_.jpg" alt="News aggregator"></a>
            <div class="collapse navbar-collapse menu-desktop" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/source">ИСТОЧНИК НОВОСТЕЙ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/order">ЗАКАЗ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/feedback">ОТЗЫВЫ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/news">ВСЕ НОВОСТИ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О НАС</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">АДМИНКА</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <br>
    @yield('content')
    <div class="footer">
        <p>&copy; News aggregator <?php echo date("Y")?>  Все права защищены</p>
    </div>
</div>
</body>
</html>
