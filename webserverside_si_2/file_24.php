<?php 
$nim = "195610099" ;
echo "Angkatan ". substr($nim,0,2) ;
echo "<br>" ;
echo "Kode Jurusan ".substr($nim,2,3) ;
echo "<br>" ;
echo "Nomor Registrasi ".substr($nim,-4) ;

echo "<hr>" ;

$nama = "budi firmansyah" ;
echo strtoupper($nama) ;

echo "<hr>" ;

$microdetik = strtotime("1995-07-22") ;
$tgl = date("l d-m-Y",$microdetik) ;
echo $tgl ;
?>