<?php 
// jika huruf = A maka bobot = 4
// jika huruf = B maka bobot = 3
// jika huruf = C maka bobot = 2
// jika huruf = D maka bobot = 1
// selain itu maka bobot 0

$huruf = "B" ;
$bobot = null ;

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

echo "Bobot " . $bobot ;
?>