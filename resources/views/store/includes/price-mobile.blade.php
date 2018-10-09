<div class="row">
    <h2 class="txt-gold col-12">Faixa de preço</h2>
    <form class="col-12" action="/" id="sliderFormMobile">
        <div class="input-group">
            <input name="slider" type="range" class="custom-range" value="{{Request::input('slider')}}" min="1" max="{!!$maxValue!!}" id="ratingmobile" ontouchmove="evalSliderMobile()" onchange="this.form.submit()">
        </div>
        @php
            $value = $maxValue;
            if (Request::input('slider')) {
                $value = Request::input('slider');
            }

        @endphp
        <output >R$ 0</output>
        <span class="right" id="sliderVal">R$ {!!$value!!}</font>
    </form>
</div>
