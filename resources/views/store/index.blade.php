@extends('store.layout.app')

@section('title','MK1')
@section('class-pg','MK1')

@section('upperbar')
    <div class="">
        <h2 class="txt-gold col-12">Procurar um produto</h2>
        <form class="col-12" action="/">
            <div class="input-group ">
                <input type="text" class="form-control"
                value="{{Request::input('search')}}" placeholder="" name="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit button">Buscar</button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('order')
    <div class="row">
        <div class="col-md-9"></div>
        <h2 class="txt-gold float-right">Ordenar Por</h2>
        <div class="col-md-9"></div>
        <div class="row">
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
    </div>
@stop

@section('sidebar')
    <div class="row">
        <h2 class="txt-gold">Categorias</h2>
        <nav class="sidebar-menu border-rounded bg-gold">
            @foreach($categories as $key => $category)
                <a href="{{'/?type='.$key}}">
                    <img class="menu-side-image" src="menu_side/{!!mb_strtolower($key)!!}.svg" ></img>
                    <i class="fa fa-search"></i>
                    <span class="sidebar-menu-txt">{!!mb_strtolower($key)!!}</span>
                    <span class="sidebar-menu-count">({{$category->count()}})</span>
                </a>
            @endForeach
        </nav>
    </div>

    <script>
    function evalSlider()
    {
        var sliderValue = document.getElementById('rating').value;
        document.getElementById('sliderVal').innerHTML = 'R$ '+sliderValue;
    }

    </script>

    <style>
    .right {
        float: right;
    }
    .side-image {
        max-height: 200px;
    }

    .menu-side-image {
        max-height: 50px;
        max-width: 50px;
    }
    </style>

    <div class="row">
        <h2 class="txt-gold">Faixa de preço</h2>
        <form class="col-12" action="/" id="sliderForm">
            <div class="input-group">
                <input name="slider" type="range" class="custom-range" min="1"
                max="{!!$maxValue!!}" id="rating" onmousemove="evalSlider()" onchange="this.form.submit()">
            </div>
            <output id="sliderVal"><font color="black">R$ 100</font></output>
            <span class="right"><font color="black"> R$ {!!$maxValue!!}</font></span>
        </form>
    </div>
    <div class="row col-12 side-image">
        <img class="img-fluid" src="side_image.jpg"></img>
    </div>
        <div class="col-7 col-md-8 col-xl-12 text-center">
            <a class="btn-white bg-purple" href="#"><font color="white">Quero revender</font></a>
        </div>
@stop


<style>
.bg-purple {
    background-color: purple;
}

.bg-black {
    background-color: black;
}
</style>

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-12 col-sm-6 col-xl-4">
                <div class="product-card">
                    <div class="product-card-top">
                        <div class="product-card-img-container">
                            <img class="img-fluid"
                                     src="productImage/165x165_{{array_get($product, 'Cód.  SAP')}}.png"
                                 alt="Card image cap">
                        </div>
                    </div>
                    <div class="product-card-container-desc">
                        <span class="product-card-code bg-gold border-rounded">{!! array_get($product,'Cód.  SAP') !!}</span>
                        <h2 class="product-card-title"><font color="black">{!!array_get($product,
                            'Produto')!!}</font></h2>
                    </div>
                    <div class="product-card-container-footer">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-7">
                                <span
                                    class="price-card-from"><font
                                        color="black"> DE:
                                      <strike><b>R${!!array_get($product, 'Valor do Guia')!!}</font></b></strike></span>
                                <span
                                    class="price-card-to"><font color="red" size="+1">
                                        POR: <b>R${!!array_get($product, 'Preço Promocionado')!!}</font></b></span>
                            </div>
                        </div>
                        <div class="col-7 col-md-8 col-xl-12 text-center">
                            <a class="btn-white bg-purple" href="#"><font color="white">Comprar com uma representante</font></a>
                        </div>
                    </div>
                </div>
            </div>
        @endForeach
    </div>
    <div class="text-center"><a class="btn-white bg-white txt-grey" href="{{$pagination->nextPageUrl().'&type='.Request::input('type')}}">Carregar Mais</a></div>
@stop

@section('footer')
    <div class="col-12 col-sm-6 col-xl-4">
        <div class="row">
            asdadsa
        </div>
        <div class="row">
            asdasdadasads
        </div>
    </div>

@stop
