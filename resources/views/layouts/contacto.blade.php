<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Documento Nuevo</title>
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <link href="{{ asset('https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css') }}" rel="stylesheet">
    {{--    <link rel="stylesheet" href="css/estilos.css">--}}
    <link rel="stylesheet" href="{{ asset('template/css/estilos.css') }}">
</head>
<body>
<header class="header">
    <div class="contenedor">
        {{--        <img src="{{ asset('img/logo.jpg') }}" alt"" title="" width="" class="logo">--}}
        <img src="{{ asset('template/img/logo.jpg') }}" alt="" class="logo">
        <span class="icon-menu" id="btn-menu"></span>
        <nav class="nav" id="nav">
            <ul class="menu">
                <li class="menu__item"><a  class="menu__link">Inicio</a></li>
                <li class="menu__item"><a  class="menu__link">Menu</a></li>
                <li class="menu__item"><a  class="menu__link">Fotos</a></li>
                <li class="menu__item"><a  class="menu__link">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="banner">
    <img src="{{ asset('template/img/banner.jpg') }}" alt="">
    <div class="contenedor">
        <h1 class="banner__titulo">EL LUGAR MÁS CÓMODO</h1>
        <p class="banner__txt">Bienvenidos a Nuestro Restaurante</p>
    </div>
</div>

<main class="main">

    <div class="address"><!--address-->
        <div class="container">
            <div class="address-row">
                <div class="col-md-6 address-left wow agile fadeInLeft animated" data-wow-delay=".5s">
                    <div class="address-grid">
                        <h4 class="wow fadeIndown animated" data-wow-delay=".5s">DROP US A LINE </h4>
                        <form>
                            <input class="wow fadeIndown animated" data-wow-delay=".6s" type="text" placeholder="Name" required="">
                            <input class="wow fadeIndown animated" data-wow-delay=".7s" type="text" placeholder="Email" required="">
                            <input class="wow fadeIndown animated" data-wow-delay=".8s" type="text" placeholder="Subject" required="">
                            <textarea class="wow fadeIndown animated" data-wow-delay=".8s" placeholder="Message" required=""></textarea>
                            <input class="wow fadeIndown animated" data-wow-delay=".9s" type="submit" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 address-right">
                    <div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
                        <h4>ADDRESS</h4>
                        <p>123 San Sebastian, CG 09-123 Ba,Block(#456),Hill Towers 4567 New York City USA.</p>
                    </div>
                    <div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
                        <h4>PHONE </h4>
                        <p>+222 111 333 4444</p>
                        <p>+222 111 333 5555</p>
                    </div>
                    <div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
                        <h4>MAIL</h4>
                        <p><a href="mailto:example@mail.com"> mail@example.com</a></p>
                        <p><a href="mailto:example@mail.com"> mail2@example.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<footer class="footer">
    <div class="social">
        <img src="{{ asset('template/img/icono2.png') }}" alt="">
        <img src="{{ asset('template/img/icono3.png') }}" alt="">
        <img src="{{ asset('template/img/icono1.png') }}" alt="">
    </div>
    <p class="copy">&copy; Derechos Reservados | 2021</p>
</footer>
<script src="{{ asset('template/js/menu.js') }}"></script>
</body>
</html>