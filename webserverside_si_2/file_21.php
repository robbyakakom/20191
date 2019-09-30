<?php 
$namaMhs = array(10=>"Budi", 5=>"Mira", 0=>"Amir") ;
$namaMhs[3] = "Marjuki" ;
?>
<h1>Daftar Mahasiswa</h1>
<ol>
  <?php 
  foreach($namaMhs as $nilai){
  ?>
    <li><?php echo $nilai ?></li>
  <?php 
  }
  ?>
</ol>