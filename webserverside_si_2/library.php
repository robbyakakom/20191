<?php 
//semua fungsi ada disini

function garis() {
  echo "<br>-------------------------------------------- <br>" ;
}

function tambah($bilA, $bilB) {
  $bilC = $bilA + $bilB ;
  return $bilC ;
}

function formatTanggal($tgl) {
  $arrTgl = explode("-",$tgl) ;
  $aTgl = (int) $arrTgl[2] ;
  $bln = (int) $arrTgl[1] ;
  $thn = (int) $arrTgl[0] ;
  if($bln == 1){
    $namaBulan = "Januari" ;
  }elseif($bln == 2){
    $namaBulan = "Februari" ;
  }elseif($bln == 3){
    $namaBulan = "Maret" ;
  }elseif($bln == 4){
    $namaBulan = "April" ;
  }elseif($bln == 5){
    $namaBulan = "Mei" ;
  }elseif($bln == 6){
    $namaBulan = "Juni" ;
  }elseif($bln == 7){
    $namaBulan = "Juli" ;
  }elseif($bln == 8){
    $namaBulan = "Agustus" ;
  }elseif($bln == 9){
    $namaBulan = "September" ;
  }elseif($bln == 10){
    $namaBulan = "Oktober" ;
  }elseif($bln == 11){
    $namaBulan = "Nopember" ;
  }elseif($bln == 12){
    $namaBulan = "Desember" ;
  }
  return $aTgl." ".$namaBulan." ".$thn ;
}


function validTgl($tgl){
  $arrTgl = explode("-",$tgl) ;
  if(count($arrTgl) != 3) {
    return "Format tanggal salah" ;
  }
}
?>