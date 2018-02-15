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
        <div id="block-content"></div>
        <?php
            include("include/footer.php");
        ?>
    </div>
    
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
    <script type="text/javascript" src="js/shopscript.js"></script>
</body>
</html>