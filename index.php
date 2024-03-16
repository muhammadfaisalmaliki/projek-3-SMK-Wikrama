<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="bungkus">
  <div class="container" > 
<?php 
$page = isset($_GET['page']) ? $_GET['page'] : 'segitiga' ;

switch($page) {
  case "segitiga" :
    include "segitiga.php";
    break;
    case "persegi" :
      include "persegipanjang.php";
      break;
      default :
      include "index.php";
};
?>
</body>
</html>