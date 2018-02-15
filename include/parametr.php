<div id="block-parametr">
  <p class="header-title">Поиск по параметрам</p>
  <p class="title-filter">Стоимость</p>
  <form action="serch-filter.php" method="get">
    <div id="block-input-price">
      <ul>
        <li><p>от</p></li>
        <li><input type="text" id="start-price" name="start_price" value="1000"></li>
        <li><p>до</p></li>
        <li><input type="text" id="end-price" name="end_price" value="30000"></li>
        <li><p>руб.</p></li>
      </ul>
    </div>
    <div id="block-track-bar"></div>
    <p class="title-filter">Производители</p>
    <ul class="checkbox-brand">
      <li><input type="checkbox" id="checkbrend1"><label for="checkbrend1">Бренд 1</label></li>
      <li><input type="checkbox" id="checkbrend2"><label for="checkbrend2">Бренд 2</label></li>
      <li><input type="checkbox" id="checkbrend3"><label for="checkbrend3">Бренд 3</label></li>
    </ul>
    <input type="submit" name="submit" id="button-param-search" value="Найти">
  </form>
</div>