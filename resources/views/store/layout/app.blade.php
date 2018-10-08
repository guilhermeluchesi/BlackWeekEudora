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
<header class="c-menu-mobile">
    <div class="c-menu-mobile__container c-menu-mobile__container--buttons">
        <div class="c-menu-mobile__items c-menu-mobile__menu">menu</div>
        <div class="c-menu-mobile__items">logo</div>
        <div class="c-menu-mobile__items">teste</div>
    </div>
    <div class="c-menu-mobile__container">
        <input type="text" class="c-menu-mobile__search" placeholder="Hoje eu quero..." />
    </div>
</header>
<div class="c-menu-options c-menu-options__hidden">
    <div class="c-menu-options__container">
        @include('store.includes.search')
    </div>
    <div class="c-menu-options__container">
        @include('store.includes.category')
    </div>
    <div class="c-menu-options__container">
        @include('store.includes.price')
    </div>
</div>
    <!-- <div class="bg-white menu-content">
        <div class="row">
            @include('store.includes.order')
        </div>
        @include('store.includes.search')
        @include('store.includes.category')
        @include('store.includes.price')
    </div> -->
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


<img src="topo.jpg" class="imageLogo img-fluid">
<div class="container container-site container-site-white">
    <div class="row">
        <nav class="order-sm-first col-xl-3 col-12 col-md-4 d-md-block d-none sidebar">
            @yield('sidebar')
        </nav>
        <div class="col-12 col-xl-9 col-md-8 col-sm-12">
            @yield('content')
        </div>
    </div>
</div>

<footer class="container container-footer">
    @yield('footer')
</footer>
<link href="{{mix('css/app.css')}}" rel="stylesheet">

<script>
    const menu = document.querySelector('.c-menu-mobile__menu');
    const menuContainer = document.querySelector('.c-menu-options');
    let flag = false;
    menu.onclick = () => {
        menuContainer.classList.toggle('c-menu-options__hidden');
        flag = !flag;
    }

    window.onresize = () => {
        if(flag) {
        menuContainer.classList.toggle('c-menu-options__hidden');
        flag = !flag;
        
        }
    }
</script>
</body>
</html>
