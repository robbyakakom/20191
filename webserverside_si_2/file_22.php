<?php 
$jurusan = array('SI'=>'Sistem Informasi', 'TI'=>'Teknik Informatika','KA'=>'Komputer Akuntansi','MI'=>'Manajemen Informatika','TK'=>'Teknik Komputer') ;
?>
<ol>
  <?php 
    foreach ($jurusan as $singkat => $panjang) {
      echo "<li>".$singkat." : ".$panjang."</li>" ;
    }
  ?>
</ol>