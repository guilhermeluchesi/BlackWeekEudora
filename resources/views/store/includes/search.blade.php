<div class="row">
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
