<?php 
$namaMhs = array("Budi", "Mira", "Amir") ;
$namaMhs[] = "Marjuki" ;
$jumlah = count($namaMhs) ;
?>
<h1>Daftar Mahasiswa</h1>
Jumlah : <?php echo $jumlah ?>
<ol>
  <?php 
  for($x=0;$x<$jumlah;$x++){
  ?>
    <li><?php echo $namaMhs[$x] ?></li>
  <?php 
  }
  ?>
</ol>