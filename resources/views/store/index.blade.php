@extends('store.layout.app')

@section('title','Blackweek - Eudora')
@section('class-pg','MK1')

@section('sidebar')
    @include('store.includes.category')
    @include('store.includes.price')
    <!-- <div class="col-7 col-md-8 col-xl-12 text-center">
        <a class="btn bg-purple txt-white" href="https://cadastro.eudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora">Quero revender</a>
    </div> -->
@stop

@section('content')
    <div class="row d-md-block d-none">
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
                            <a target="_blank" class="col-sm-12 btn bg-purple" href="http://encontreeudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_content={!!array_get($product, 'Cód.  SAP')!!}">Comprar com<br/> uma representante</a>
                        </div>
                    </div>
                </div>
            </div>
        @endForeach
    </div>
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="d-none d-lg-block">{{ $pagination->appends(request()->input())->render() }}</div>
            <div class="d-lg-none">{{ $pagination->appends(request()->input())->render('vendor/pagination/simple-bootstrap-4') }}</div>
        </div>
    </div>
@stop

@section('footer-mobile')
    <div class="row footer-mobile">
        <div class="bg-grey col-12 col-md-2 footer-txt-mobile">
            <a target="_blank"  href="https://cadastro.eudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora">Quero Revender</a>
            <a target="_blank" href="https://loja.eudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=sou-consumidora">Sou consumidora</a>
            <a target="_blank" href="http://guia.eudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=revista">Revista</a>
            <a target="_blank" href="http://encontreeudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=encontre-eudora">Encontre Eudora</a>
        </div>
        <div class="col-12 col-md-2 txt-mobile-footer-small">
            <a target="_blank" href="http://www.grupoboticario.com.br/pt/faca-beleza-com-a-gente/Paginas/Inicial.aspx?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=trabalhe-conosco">Trabalhe Conosco</a>
            <a target="_blank" href="https://eudoraconsumidor.zendesk.com/hc/pt-br?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=duvidas-frequentes">Dúvidas Frequentes</a>
            <a target="_blank" href="https://cadastro.eudora.com.br/termos-de-uso?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=termos-de-uso">Termos de Uso</a>
            <a target="_blank" href="https://cadastro.eudora.com.br/politica-de-privacidade?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=politica-de-privacidade">Política de Privacidade</a>
            <a target="_blank" href="https://cadastro.eudora.com.br/sobre-eudora?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=sobre-eudora">Sobre Eudora</a>
            <a href="#">Fale com Eudora</a>
         </div>
         <div class="txt-mobile-footer-smallest">
            <div>Quero revender Eudora: 0800 727 4535</div>
            <div>INTERBELLE COMERCIO DE PRODUTOS E BELEZA LTDA</div>
            <div>CNPJ: 11.137.051.0002-67-Rodovia Regis Bitencourt-S/N - KM437+700M/DOCA 22</div>
            <div>CEP: 11900-000-Ribeirão Vermelho-Registro-SP</div>
        </div>
        <div class="social-networks-mobile">
			<a target="_blank" href="https://www.instagram.com/eudoraoficial/">INSTAGRAM</a>
			<a target="_blank" href="https://www.facebook.com/eudoraoficial/">FACEBOOK</a>
            <a target="_blank" href="https://www.youtube.com/user/eudora/">YOUTUBE</a>
        </div>
        <div class="mobile-end-logos">
            <img class="footer-image" src="images/logo_eudora.png">
            <span class="end-footer-txt-mobile">&copy; 2015 eudora. Todos os direitos reservados.</span>
            <a href="#" class=""><img class="footer-image" src="images/logo_grupo_boticario.png"></a>
        </div>
    </div>
@stop

@section('footer')
    <div class="mobile-hide">
    <div class="social-networks mobile-hide">
        <a target="_blank" href="https://www.instagram.com/eudoraoficial/">INSTAGRAM</a>
        <a target="_blank" href="https://www.facebook.com/eudoraoficial/">FACEBOOK</a>
        <a target="_blank" href="https://www.youtube.com/user/eudora/">YOUTUBE</a>
    </div>
    <div class="row mobile-hide">
        <div class="col-12 col-md-2">
            <h2>Eudora</h2>
            <a target="_blank" href="http://www.grupoboticario.com.br/pt/faca-beleza-com-a-gente/Paginas/Inicial.aspx?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=trabalhe-conosco">Trabalhe Conosco</a>
            <a target="_blank" href="https://eudoraconsumidor.zendesk.com/hc/pt-br?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=duvidas-frequentes">Dúvidas frequentes</a>
            <a target="_blank" href="https://cadastro.eudora.com.br/termos-de-uso?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=termos-de-uso">Termos de uso</a>
            <a target="_blank" href="https://cadastro.eudora.com.br/politica-de-privacidade?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=politica-de-privacidade">Política de privacidade</a>
            <a target="_blank" href="https://cadastro.eudora.com.br/sobre-eudora?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=sobre-eudora">Sobre Eudora</a>
            <br/>
            <h2>Fale com eudora</h2>
            0800 727 4535
        </div>
        <div class="col-12 col-md-2 offset-md-1">
            <h2>Eudora</h2>
            <a target="_blank" href="https://loja.eudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=sou-consumidora">Sou consumidora</a>
            <a target="_blank" href="https://cadastro.eudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=quero-revender">Quero revender</a>
            <a target="_blank" href="http://guia.eudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=revista">Revista</a>
            <a target="_blank" href="https://eudoraconsumidor.zendesk.com/hc/pt-br?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=duvidas">Dúvidas</a>
            <a target="_blank" href="http://encontreeudora.com.br/?utm_source=blackweekeudora.com.br&utm_medium=lp-link&utm_campaign=blackweek-eudora&utm_term=encontre-eudora">Encontre Eudora</a>
        </div>
        <div class="col-12 col-md-7 text-right ">
            <a href="#" class="logo-eudora"><img src="images/logo_eudora.png">
            <a href="#" class="logo-boticario"><img src="images/logo_grupo_boticario.png"></a>
            <span class="copyright">&copy; EUDORA. Todos os direitos reservados.</span>
        </div>
    </div>
    </div>
@stop
