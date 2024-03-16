<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>

  
  <div class="bungkus2">
      <div class="isian" style = "height : 44vh; @media">
        <p>Kalkulator Hitung Luas persegi panjang</p>
        <div class="input">
          <form action="" method = "post" >
            <center>             
              <input type="number" name = "nomor" placeholder="  nilai panjang">
              <input type="number" name = "nomor1" placeholder="  nilai lebar">
            </center>
        </div>
          <div class="submit">
              <button type = "submit" name = "hasil">klik</button>
            </form>
        </div>
        <?php
        if (isset($_POST['hasil'])) {
            $panjang = @$_POST['nomor'];
            $lebar = @$_POST['nomor1'];

            $luas =  $panjang * $lebar;
                echo "<center>"."Luas persegi panjang =  " . $luas . "</center>";            
              }

          else {
              echo "<center>masukkan nilai disini yaaa</center>";
          };
        ?>
  </div>
    </div>
   
  
</body>
</html>