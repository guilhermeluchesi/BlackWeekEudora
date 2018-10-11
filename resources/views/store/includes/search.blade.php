<div class="row">
    <h2 class="txt-gold col-12">Procurar um produto</h2>
    <form class="col-12" action="/">
        <div class="input-group ">
            <input type="text" class="form-control" style="border-right: 0"
                   value="{{Request::input('search')}}" placeholder="" name="search">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" style="border:1px solid #ced4da; border-left: none; padding: 4px" type="submit button"><img class="menu-side-image" style="margin:0 " src="images/menu_side/Lupa.png"></button>
            </div>
        </div>
    </form>
</div>
