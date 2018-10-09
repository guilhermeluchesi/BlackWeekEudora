<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="{{asset('/')}}"/>
    <link rel="icon" href="favicon.ico">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5K34HK2');</script>
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
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
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5K34HK2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<header class="c-menu-mobile">
    <div class="c-menu-mobile__container c-menu-mobile__container--buttons">
        <div class="c-menu-mobile__items c-menu-mobile__menu">menu</div>
        <div class="c-menu-mobile__items">logo</div>
        <div class="c-menu-mobile__items">logo</div>
    </div>
    <div class="c-menu-mobile__container">
        <form class="col-12" action="/">
            <input type="text" name="search" class="c-menu-mobile__search" placeholder="Hoje eu quero..." />
        </form>
    </div>
</header>
<div class="c-menu-options c-menu-options__hidden">
    <div class="c-menu-options__container">
        @include('store.includes.category')
    </div>
    <div class="c-menu-options__container">
        @include('store.includes.price-mobile')
    </div>
    <div class="c-menu-options__container">
        @include('store.includes.order')
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

<footer class="container container-footer mobile-hide">
    @yield('footer')
</footer>
<footer class="container">
    @yield('footer-mobile')
</footer>

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

function evalSlider()
{
    var sliderValue = document.getElementById('rating').value;
    document.getElementById('sliderVal').innerHTML = 'R$ '+sliderValue;
}

function evalSliderMobile()
{
	console.log('sdasd')
    var sliderValueMobile = document.getElementById('ratingmobile').value;
    document.getElementById('sliderValMobile').innerHTML = 'R$ '+sliderValueMobile;
}
</script>
</body>
</html>
