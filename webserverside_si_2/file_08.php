<?php 
// jika huruf = A maka bobot = 4
// jika huruf = B maka bobot = 3
// jika huruf = C maka bobot = 2
// jika huruf = D maka bobot = 1
// selain itu maka bobot 0

$huruf = "B" ;
$bobot = null ;

switch ($huruf) {
  case "A" :
    $bobot = 4 ;
    break ;
  case "B" :
    $bobot = 3 ;
    break ;
  case "C" :
    $bobot = 2 ;
    break ;
  case "D" :
    $bobot = 1 ;
    break ;
  default :
    $bobot = 0 ;
}

echo "Bobot " . $bobot ;
?>