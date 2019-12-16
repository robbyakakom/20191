<?php 
include("Mahasiswa.php") ;

$objMhs = new Mahasiswa ;
//input data
$objMhs->isiData("0999", "Budi", "SI") ;
//tampilkan data
$objMhs->tampilData() ;

$obj2 = new Mahasiswa ;
$obj2->isiData("1000","Amir","TI") ;
$obj2->tampilData() ;

$objMhs->tampilData ;
?>