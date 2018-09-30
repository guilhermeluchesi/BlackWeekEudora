@extends('store.layout.app')

@section('title','MK1')
@section('class-pg','MK1')

@section('sidebar')
    <div class="row">
        <h2 class="txt-gold col-12">Procurar um produto</h2>
        <form class="col-12" action="/">
            <div class="input-group ">
                <input type="text" class="form-control" placeholder="" name="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit button">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <h2 class="txt-gold">Categorias</h2>
        <nav class="sidebar-menu border-rounded bg-gold">
            @foreach($categories as $key => $category)
                <a href="{{'/?type='.$key}}">
                    <i class="fa fa-search"></i>
                    <span class="sidebar-menu-txt">{!!mb_strtolower($key)!!}</span>
                    <span class="sidebar-menu-count">({{$category->count()}})</span>
                </a>
            @endForeach
        </nav>
    </div>
    <div class="row">
        <h2 class="txt-gold">Faixa de preço</h2>
        <form class="col-12" action="/">
            <div class="input-group">
                <input type="range" class="custom-range">
            </div>
        </form>
    </div>
    <div class="row">
        <h2 class="txt-gold">Ordenar Por</h2>
        <form action="/">
        <select onchange="this.form.submit()" class="custom-select" name="orderBy">
            <option value="RE Vende por" selected><b>Menor</b> preço</option>
            <option value="-RE Vende por"><b>Maior</b> preço</option>
            <option value="% de Desconto"><b>Menor</b> desconto</option>
            <option value="-% de Desconto"><b>Maior</b> desconto</option>
            <option value="Produto">Produto</option>
        </select>
        </form>
    </div>
@stop

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-12 col-sm-6 col-xl-4">
                <div class="product-card">
                    <div class="product-card-top">
                        <div class="discount-seal bg-red rounded-circle">
                            <b>{{(int)(array_get($product,'% de Desconto')*100)}}</b><span>DESCONTO</span>
                        </div>
                        <div class="product-card-img-container">
                            <img class="img-fluid"
                                 src="https://http2.mlstatic.com/chevrolet-opala-1970-motor-6cc-cambio-na-coluna-freio-disco-D_NQ_NP_735111-MLB26502778408_122017-F.jpg"
                                 alt="Card image cap">
                        </div>
                    </div>
                    <div class="product-card-container-desc">
                        <span class="product-card-code bg-gold border-rounded">{!! array_get($product,'Cód.  SAP') !!}</span>
                        <h2 class="product-card-title">{!!array_get($product, 'Produto')!!}</h2>
                    </div>
                    <div class="product-card-container-footer">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-5">
                                <span
                                    class="price-card-from"> DE: <b>R${!!array_get($product, 'Valor do Guia')!!}</b></span>
                                <span
                                    class="price-card-to"> POR: <b>R${!!array_get($product, 'Preço Promocionado')!!}</b></span>
                            </div>
                            <div class="col-5 col-md-6 col-xl-7 text-center">
                                <a class="btn-white bg-white txt-grey" href="#">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endForeach
    </div>
    <div class="text-center"><a class="btn-white bg-white txt-grey" href="{{$pagination->nextPageUrl().'&type='.Request::input('type')}}">Carregar Mais</a></div>
@stop
