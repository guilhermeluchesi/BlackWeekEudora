<div class="row">
    <h2 class="txt-gold col-12">Faixa de preço</h2>
    <form class="col-12" action="/" id="sliderFormMobile">
        <div class="input-group">
            <input name="sliderMobile" type="range" class="custom-range" min="1" max="{!!$maxValue!!}" id="rating-mobile" onmousemove="evalSliderMobile()" onchange="this.form.submit()">
        </div>
        <output id="sliderValMobile">R$ 100</output>
        <span class="right"><font color="black"> R$ {!!$maxValue!!}</font></span>
    </form>
</div>
