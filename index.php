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
    <div class="nav">
      <form action="" method = "get">
        <center>
          <button type = "submit" <?=@$_GET['page'] === "segitiga" ? 'style="background-color :blue;"' : ""; ?>><a href="?page=segitiga"  <?= @$_GET['page'] ==="segitiga" ? 'style="color: white;"' : "";?>>Luas segitiga</a></button>
          <button type = "submit" <?=@$_GET['page'] === "persegi" ? 'style="background-color : blue;"' : ""; ?>> <a href="?page=persegi"  <?= @$_GET['page'] ==="persegi" ? 'style="color: white;"' : "";?> >Luas persegi panjang</a></button>
        </center>
      </form>
    </div>
   
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