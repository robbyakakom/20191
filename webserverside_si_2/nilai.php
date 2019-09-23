<?php 
$nim = $_POST['nim'] ;
//validasi 
if($nim == ""){
  echo "NIM kosong... <br> " ;
  echo "<a href='file_13.php'>Back to form</a>" ;
  exit ;
}

$nama = $_POST['nama'] ;
$namaMk = $_POST['namaMk'] ;
$nilai = $_POST['nilai'] ;
$huruf = null ;
$bobot = null ;

if($nilai >= 80){
  $huruf = "A" ;
}elseif($nilai >= 60){
  $huruf = "B" ;
}elseif($nilai >= 40){
  $huruf = "C" ;
}elseif($nilai >= 20){
  $huruf = "D" ;
}else{
  $huruf = "E" ;
}

if($huruf == "A"){
  $bobot = 4 ;
}elseif($huruf == "B"){
  $bobot = 3 ;
}elseif($huruf == "C"){
  $bobot = 2 ;
}elseif($huruf == "D"){
  $bobot = 1 ;
}else{
  $bobot = 0 ;
}

echo "NIM : ". $nim  . "<br>" ;
echo "Nama : ". $nama  . "<br>" ; 
echo "Nama Matakuliah : ". $namaMk  . "<br>" ;
echo "Nilai : ". $nilai  . "<br>" ;
echo "Huruf : ". $huruf  . "<br>" ;
echo "Bobot : ". $bobot  . "<br>" ;
?>