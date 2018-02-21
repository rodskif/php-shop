<?php
include("include/db_connect.php");
?>
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
          <ul id="block-product-grid">
                    
          <?php
            $result = mysql_query("select * from table_products",$link);
            if (mysql_num_rows($result) > 0)
            {
              $row = mysql_fetch_array($result);
              do {
                if ($row["image"] != "" && file_exists("images/".$row["image"])) {
                  $img_path = 'images/'.$row["image"];
                  $max_width = 200;
                  $max_height = 200;
                  list($width, $height) = getimagesize($img_path);
                  $ratioh = $max_height/$height;
                  $ratiow = $max_width/$width;
                  $ratio = min($ratioh, $ratiow);
                  $width = intval($ratio*$width);
                  $height = intval($ratio*$height);
                } else {
                  $img_path = "img/no-image.png";
                  $width = 110;
                  $height = 200;
                }
                echo '
                <li>
                  <div class="block-img-grid">
                    <img src="'.$img_path.'" alt="" width="'.$width.'" height="'.$height.'">
                  </div>
                  <p class="title-grid"><a href="#">'.$row["product_name"].'</a></p>
                  <ul class="reviews-counts-grid">
                    <li><img src="img/eye-icon.png" alt=""><span>0</span></li>
                    <li><img src="img/comment-icon.png" alt=""><span>0</span></li>
                  </ul>
                  <a class="add-cart-grid"><i class="cart-img"></i></a>
                  <p class="price-grid"><strong>'.$row["price"].'</strong> руб.</p>
                  <div class="mini-features">'.$row["mini_features"].'</div>
                </li>
                ';
              }
              while ($row = mysql_fetch_array($result));
            }
          ?>
          </ul>
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