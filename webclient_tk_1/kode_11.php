<?php 
  $red = isset($_GET['red']) ? $_GET['red'] : 256 ;
  $green = isset($_GET['green']) ? $_GET['green'] : 256;
  $blue = isset($_GET['blue']) ? $_GET['blue'] : 256 ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body {
      background: rgb(<?= $red ?>,<?= $green ?>,<?= $blue ?>) ;
    }
  </style>
</head>
<body>
  <h2>Mengatur Background</h2>
  <form>
    Red <input type="number" name="red" max="256" value="0"> <br>
    Green <input type="number" name="green" max="256" value="0"> <br>
    Blue <input type="number" name="blue" max="256" value="0"> <br>
    <button type="submit">GANTI WARNA</button>
    <button type="reset">RESET</button>
  </form>
</body>
</html>