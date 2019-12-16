<?php 
// membuat perulangan kata Akakom sebanyak 10 

for($nilai = 1 ; $nilai <= 10; $nilai++  ){
  if($nilai == 5){
    continue; 
  }
  if($nilai == 8){
    break ;
  }
  echo $nilai . " Akakom <br>" ;
}

?>