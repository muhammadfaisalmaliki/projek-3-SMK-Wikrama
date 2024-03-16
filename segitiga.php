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
      <div class="isian" style = "height : 44vh;">
        <p>Kalkulator Hitung Luas segitiga</p>
        <div class="input">
          <form action="" method = "post" >
            <center>             
              <input type="number" name = "nomor" placeholder="  nilai alas">
              <input type="number" name = "nomor1" placeholder="  nilai tinggi">
            </center>
        </div>
          <div class="submit">
              <button type = "submit" name = "hasil">klik</button>
            </form>
        </div>
        <?php
        if (isset($_POST['hasil'])) {
            $alas = @$_POST['nomor'];
            $tinggi = @$_POST['nomor1'];

            $luas = 0.5 * $alas * $tinggi;
                echo "<center>"."Luas segitiga =  " . $luas . "</center>";            
              }
          else {
              echo "<center>masukkan nilai disini yaaa</center>";
          };
        ?>
  </div>
    </div>
   
  
</body>
</html>