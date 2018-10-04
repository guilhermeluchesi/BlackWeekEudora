<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{asset('/')}}"/>
    <link rel="icon" href="favicon.ico">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS - ->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template - ->
    <link href="https://getbootstrap.com/docs/4.1/examples/album/album.css" rel="stylesheet">-->
    <!--<script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>-->
</head>
<body class="page-@yield('class-pg')">
<header>
    <img src="topo.jpg" class="imageLogo img-fluid">
    <!--
    <div class="left">
        <div class="imagePromo">imagem</div>
        <div class="infoRectangle bg-gold">
            <div class="infoWrapper">
                <span class="textInfo">Produtos a partir de:</span>
                <div class="priceWrapper">
                    <span class="moeda">R$</span>
                    <span class="reais">6</span>
                    <span class="centavos">,99</span>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="imageLogo">
            imagem
        </div>
    </div>-->
</header>
<style>
.container-site-white {
    background-color: white;
}
.container-footer{
    margin: 30px auto;
}
</style>


<div class="container container-site container-site-white">
    <div class="row">
        <div class="col-12 col-md-4 col-xl-3">
            @yield('upperbar')
        </div>
        <div class="col-12 col-md-8 col-xl-9">
            @yield('order')
        </div>
    </div>
    <div class="row">
        <nav class="order-sm-first col-12 col-md-4 col-xl-3 sidebar">
            @yield('sidebar')
        </nav>
        <div class="col-12 col-md-8 col-xl-9">
            @yield('content')
        </div>
    </div>
</div>
<link href="{{mix('css/app.css')}}" rel="stylesheet">

<footer class="container container-footer">
    <div class="row">
        @yield('footer')
    </div>
</footer>
</body>
</html>
