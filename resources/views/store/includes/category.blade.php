<div class="row">
    <h2 class="txt-gold col-12">Categorias</h2>
    <nav class="sidebar-menu border-rounded bg-gold">
        @foreach($categories as $key => $category)
            <a href="{{'/?type='.$key}}">
                <img class="menu-side-image" src="menu_side/{!!mb_strtolower($key)!!}.svg"></img>
                <i class="fa fa-search"></i>
                <span class="sidebar-menu-txt">{!!mb_strtolower($key)!!}</span>
                <span class="sidebar-menu-count">({{$category->count()}})</span>
            </a>
        @endForeach
    </nav>
</div>
