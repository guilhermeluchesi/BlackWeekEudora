<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/album/album.css" rel="stylesheet">
  </head>
  <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="https://http2.mlstatic.com/chevrolet-opala-1970-motor-6cc-cambio-na-coluna-freio-disco-D_NQ_NP_735111-MLB26502778408_122017-F.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{!!array_get($product, 'Produto')!!}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            DE:R${!!array_get($product, 'Valor do Guia')!!}
                            </br>
                            POR:R${!!array_get($product, 'Preço Promocionado')!!}
                        </small>
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             @endForeach
            </div>
           </div>
            <div class="text-center">
                <button type="submit" class="btn btn-sm btn-outline-secondary">
                    <a href="{{$pagination->nextPageUrl().'&type='.Request::input('type')}}">Carregar Mais</a>
                </button>
            </div>
          </div>
        </div>
      </div>


<div class="topnav">
  <div class="search-container">
    <form action="/">
      <input type="text" placeholder="" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<p>Categorias</p>
@foreach($categories as $key => $category)
    <div class="text-left">
        <button type="submit" class="btn btn-sm btn-outline-secondary">
            <a href="{{'/?type='.$key}}">{!!$key!!} ({{$productCollection->where('Categoria', $key)->count()}})</a>
        </button>
    </div>
@endForeach


<style>
body {
  font-family: "Arial";
}

.ui-widget-content {
border: 1px solid #ffcc00;
background: #000000;
color: #0000ff;
}

.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
border: 1px solid #bbb;
background: #f6f6f6 url(https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.2/css/lightness/images/ui-bg_glass_100_f6f6f6_1x400.png) 50% 50% repeat-x;
font-weight: bold;
color: #1c94c4;

.ui-slider-horizontal .ui-slider-handle {
top: -.3em;
margin-left: -.6em;
}

.ui-slider-handle.ui-state-default.ui-corner-all{
  border: 3px solid #00ff00;
}
</style>

<script>
    $(function() {

  $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 500,
    values: [ 0, 300 ],
    slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
  });

 $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});

</script>



 <script src="http://jsconsole.com/remote.js?ED1DA72B-96E9-4697-A7BF-209E03754074"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>

  <p>
    <label for="amount">Price range:</label>
    <input type="text" id="amount" readonly style="border:0; font-weight:bold;">
  </p>

  <div id="slider-range"></div>
  <br />
  <br />
  <br />






<form action="/" method="GET">
<div class="form-group">
  <label for="sel1">ORDENAR POR</label>
  <select onchange="this.form.submit()" class="form-control" name="orderBy">
    <option value=""></option>
    <option value="RE Vende por">Menor preço</option>
    <option value="% de Desconto">Menor desconto</option>
    <option value="-% de Desconto">Maior desconto</option>
    <option value="Produto">Produto</option>
  </select>
</div>
</form>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

  </body>
</html>
