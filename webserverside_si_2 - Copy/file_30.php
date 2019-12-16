<?php 
function panggil(&$nama){
  $nama = $nama. " dari dalam fungsi " ;
}

$nama = "Amir" ;
echo $nama ;
echo "<br>" ;
panggil($nama) ;
echo $nama ;
?>