@extends('store.layout.app')

@section('title','MK1')
@section('class-pg','MK1')

@section('sidebar')
    @include('store.includes.search')
    @include('store.includes.category')
    @include('store.includes.price')
    <div class="row col-12 side-image">
        <img class="img-fluid" src="side_image.jpg"/>
    </div>
    <div class="col-7 col-md-8 col-xl-12 text-center">
        <a class="btn bg-purple txt-white" href="#">Quero revender</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="offset-md-9 d-sm-none mb-4 mobile-hide">
            @include('store.includes.order')
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-6 col-sm-6 col-xl-4 card-margin">
                <div class="product-card">
                    <div class="product-card-top">
                        <div class="product-card-img-container">
                            @if (file_exists(public_path().'/images/products/165x165_'.array_get($product, 'Cód.  SAP').'.png'))
                            <img class="img-fluid"
                                 src="images/products/165x165_{{array_get($product, 'Cód.  SAP')}}.png"
                                 alt="Card image cap">
                         @else
                            <img class="img-fluid"
                                 src="not_found.png"
                                 alt="Card image cap">
                         @endif
                        </div>
                    </div>
                    <div class="product-card-container-desc">
                        <span
                            class="product-card-code bg-gold font-white border-rounded">{!! array_get($product,'Cód.  SAP') !!}</span>
                        <h2 class="product-card-title"><font class="product-description" color="black">{!!array_get($product,
                            'Produto')!!}</font></h2>
                    </div>
                    <div class="product-card-container-footer text-center">
                        <span
                            class="price-card-from txt-grey">DE:<b>R${!!number_format(array_get($product, 'Valor do Guia'), 2, ',', '.')!!}</b></span>
                        <span
                            class="price-card-to txt-red">POR: <b>R${!!number_format(array_get($product, 'Preço Promocionado'), 2, ',', '.')!!}</b></span>
                        <div class="hidden">
                            <a class="col-sm-12 btn bg-purple" href="#">Comprar com<br/> uma representante</a>
                        </div>
                    </div>
                </div>
            </div>
        @endForeach
    </div>
    <div class="text-center">
        <a class="btn-load btn bg-purple-load txt-white"
           href="{{$pagination->nextPageUrl().'&type='.Request::input('type')}}">Carregar
            Mais</a>
    </div>

    <div class="promo-app">
        <div class="col-12 side-image side-image-bottom">
            <img class="img-fluid" src="bottom_image.jpg"/>
        </div>
    </div>
@stop

@section('footer-mobile')
    <div class="row footer-mobile">
        <div class="bg-grey col-12 col-md-2 footer-txt-mobile">
            <a href="#">Quero Revender</a>
            <a href="#">Sou Consumidora</a>
            <a href="#">Revista</a>
            <a href="#">Encontre Eudora</a>
        </div>
        <div class="col-12 col-md-2 txt-mobile-footer-small">
            <a href="#">Trabalhe Conosco</a>
            <a href="#">Dúvidas Frequentes</a>
            <a href="#">Termos de Uso</a>
            <a href="#">Política de Privacidade</a>
            <a href="#">Sobre Eudora</a>
            <a href="#">Fale com Eudora</a>
         </div>
         <div class="txt-mobile-footer-smallest">
            <div>Quero revender Eudora: 0800 727 4535</div>
            <div>INTERBELLE COMERCIO DE PRODUTOS E BELEZA LTDA</div>
            <div>CNPJ: 11.137.051.0002-67-Rodovia Regis Bitencourt-S/N - KM437+700M/DOCA 22</div>
            <div>CEP: 11900-000-Ribeirão Vermelho-Registro-SP</div>
        </div>
        <div class="social-networks-mobile">
            <a href="#">INSTAGRAM</a>
            <a href="#">FACEBOOK</a>
            <a href="#">YOUTUBE</a>
        </div>
        <div class="mobile-end-logos">
            <a href="#" class=""><img class="footer-image" src="images/logo_eudora.png"></a>
            <span class="end-footer-txt-mobile">&copy; 2015 eudora. Todos os direitos reservados.</span>
            <a href="#" class=""><img class="footer-image" src="images/logo_grupo_boticario.png"></a>
        </div>
    </div>
@stop

@section('footer')
    <div class="mobile-hide">
    <div class="social-networks mobile-hide">
        <a href="#">INSTAGRAM</a>
        <a href="#">FACEBOOK</a>
        <a href="#">YOUTUBE</a>
    </div>
    <div class="row mobile-hide">
        <div class="col-12 col-md-2">
            <h2>Atendimento</h2>
            <a href="#">Trabalhe Conosco</a>
            <a href="#">Dúvidas frequentes</a>
            <a href="#">Termos de uso</a>
            <a href="#">Política de privacidade</a>
            <a href="#">Sobre Eudora</a>
            <br/>
            <h2>Fale com eudora</h2>
            0800 727 4535
        </div>
        <div class="col-12 col-md-2 offset-md-1">
            <h2>Atendimento</h2>
            <a href="#">Sou consumidora</a>
            <a href="#">Quero revender</a>
            <a href="#">Revista</a>
            <a href="#">Dúvidas</a>
            <a href="#">Encontre Eudora</a>
        </div>
        <div class="col-12 col-md-7 text-right ">
            <a href="#" class="logo-eudora"><img src="images/logo_eudora.png"></a>
            <a href="#" class="logo-boticario"><img src="images/logo_grupo_boticario.png"></a>
            <span class="copyright">&copy; EUDORA. Todos os direitos reservados.</span>
        </div>
    </div>
    </div>

    <script>
        function evalSlider() {
            var sliderValue = document.getElementById('rating').value;
            document.getElementById('sliderVal').innerHTML = 'R$ ' + sliderValue;
        }

    </script>
@stop
