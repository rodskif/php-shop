<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Интернет-магазин цифровой техники</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="block-body">
        <?php
            include("include/header.php");
        ?>
        <div id="block-right">
          <?php
            include("include/category.php");
            include("include/parametr.php");
            include("include/news.php");
          ?>
        </div>
        <div id="block-content">
          <div id="block-sort">
            <p id="nav-breadcrumbs"><a href="index.php">Главная страница</a> \ <span>Все товары</span></p>
            <ul id="option-list">
              <li>Вид:</li>
              <li><img src="img/icon-grid.png" id="style-grid" alt=""></li>
              <li><img src="img/icon-list.png" id="style-list" alt=""></li>
              
              <li>Сортировать:</li>
              <li>
                <a id="select-sort">Без сортировки</a>
                <ul id="sorting-list">
                  <li><a href="#">От дешевых к дорогим</a></li>
                  <li><a href="#">От дорогих к дешевым</a></li>
                  <li><a href="#">Популярное</a></li>
                  <li><a href="#">Новинки</a></li>
                  <li><a href="#">От А до Я</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <?php
            include("include/footer.php");
        ?>
    </div>
    
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="js/shopscript.js"></script>
</body>
</html>