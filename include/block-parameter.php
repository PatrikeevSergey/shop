<div class="price-range"><!--price-range-->
    <h2>Поиск по параметрам</h2>
        <p class="title-filter">Стоимость</p>
    <form method="GET" action="search-filter.php">
            <div id="block-input-price">
                <ul>
                    <li><p>от</p></li>
                    <li><input type="text" id="start-price" name="start_price" value="1000"/></li>
                    <li><p>до</p></li>
                    <li><input type="text" id="end-price" name="end_price" value="30000"/></li>
                    <li><p>руб.</p></li>
                </ul>
            </div>
            <div id="blocktrackbar"></div>
            
        <p class="title-filter">Производители</p>
            <ul class="checkbox-brand">
                <li><input type="checkbox" id="checkbrend1" /><label for="checkbrend1">Бренд 1</label></li>
                <li><input type="checkbox" id="checkbrend2" /><label for="checkbrend2">Бренд 2</label></li>
                <li><input type="checkbox" id="checkbrend3" /><label for="checkbrend3">Бренд 3</label></li>
            </ul>
                <center><input type="submit" name="submit" id="button-param-search" value="Найти"/></center>
        <!--div class="well text-center">
            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="100000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" /><br />
            <b class="pull-left">0</b> <b class="pull-right">99000</b>
        </div-->
    </form>    
</div><!--/price-range-->