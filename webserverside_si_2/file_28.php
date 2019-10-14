<?php 
function panggil()
{
  global $nama ;
  $nama = "Budi" ;
}

$nama = "Amir" ;
panggil() ;
echo $nama ;
?>