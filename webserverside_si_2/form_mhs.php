<?php 
include("nav.php") ;
?>
<h2>Input Data Mahasiswa</h2>
<form action="file_34.php" method="post" enctype="multipart/form-data">
  NIM <br> <input type="text" name="nim" id="nim"> <br>
  Nama <br> <input type="text" name="nama" id="nama"> <br>
  Foto <br> <input type="file" name="foto" id="foto"> 
  <hr>
  <button type="submit">SIMPAN</button>
</form>