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

    <section class="info">
        <div class="contenedor">
            <article class="info__columna">
                <img src="{{ asset('template/img/compromiso.jpg') }}" alt="" class="info__img">
                <h2 class="info__titulo">Compromiso</h2>
                <p class="info__txt">La empresa estará comprometida con sus clientes al entregarles productos frescos y de buena calidad, para que ellos tengan una buena salud consumiendo nuestros productos a un precio accesible. </p>
            </article>
            <article class="info__columna">
                <img src="{{ asset('template/img/honestidad.jpg') }}" alt="" class="info__img">
                <h2 class="info__titulo">Honestidad</h2>
                <p class="info__txt">Todos los miembros de la empresa ofrecerán al cliente la información real con respecto a los productos que ellos consumen, dándole la seguridad de que el producto que adquieren es de calidad.</p>
            </article>
            <article class="info__columna">
                <img src="{{ asset('template/img/respeto.jpg') }}" alt="" class="info__img">
                <h2 class="info__titulo">Respeto</h2>
                <p class="info__txt">La empresa dará un trato al cliente para que se esté cómodo en las instalaciones y se sienta como en su casa, dándole la sensación de que forma parte de nuestra familia.</p>
            </article>
        </div>
    </section>

    <section class="platos">
        <div class="contenedor">
            <h2 class="platos__titulo">Nuestros Menús</h2>
            <p class="platos__txt">La empresa cuenta con una línea de productos, que son las hamburguesas, la cual se divide en hamburguesas de lenteja y de frijol.<br><br></p>
            <div class="platos__columna">
                <img src="{{ asset('template/img/lenteja1.jpg') }}" alt="" class="platos__img">
                <h3>H. de Lenteja (Grande)</h3>
            </div>
            <div class="platos__columna">
                <img src="{{ asset('template/img/lenteja2.jpg') }}" alt=""  class="platos__img">
                <h3>H. de Lenteja (Pequeña)</h3>
            </div>
            <div class="platos__columna">
                <img src="{{ asset('template/img/frijol1.jpg') }}" alt=""  class="platos__img">
                <h3>H. de Frijol (Grande)</h3>
            </div>
            <div class="platos__columna">
                <img src="{{ asset('template/img/frijol2.jpg') }}" alt=""  class="platos__img">
                <h3>H. de Frijol (Pequeña)</h3>
            </div>
        </div>
        <br>
    </section>
    <section class="mapa">
        <div class="contenedor">
            <div class="mapa__iframe">
                <h3 >DONDE ESTAMOS?</h3>
                <br>
                <p id="centrado">Estamos ubicados en la ciudad de Santa Cruz de la Sierra, 6to. anillo, Av./Santos Dumont.</p>
                <br>
                <iframe src="{{ asset('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.8744018255616!2d-77.03726188530837!3d-12.052161691463677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c86ee1e773%3A0x5a934f86f41f490b!2sRestaurante+Plaza+San+Mart%C3%ADn!5e0!3m2!1ses!2spe!4v1526171528511') }}" width="90%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
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