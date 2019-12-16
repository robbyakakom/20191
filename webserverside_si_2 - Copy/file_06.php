<?php 
// jika nilai >= 80 maka huruf = A
// jika nilai >= 60 maka huruf = B
// jika nilai >= 40 maka huruf = C
// jika nilai >= 20 maka huruf = D
// selain itu huruf = E
$nilai = 75 ;
$huruf = "" ;

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

echo "Nilai Huruf " . $huruf ;
?>