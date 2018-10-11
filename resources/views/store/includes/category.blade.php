<div class="row">
    <h2 class="txt-gold col-12">Categorias</h2>
    <nav class="sidebar-menu border-rounded bg-gold">
        @foreach($categories as $key => $category)
            <a href="{{'/?type='.$key}}">
                <img class="menu-side-image" src="images/menu_side/{!!mb_strtolower($key)!!}.png"></img>
                <i class="fa fa-search"></i>
                <span class="sidebar-menu-txt">{!!mb_strtolower($key)!!}</span>
            </a>
        @endForeach
    </nav>
</div>
