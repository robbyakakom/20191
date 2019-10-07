<?php 
  $spp = $_POST["spp"] ;

  if(isset($_POST['ta'])) {
    $tahunAngkatan = $_POST['ta'];
  }else{
    die("Tahun Angkatan Belum diisi atau disetting") ;
  }

  if(isset($_POST['jurusan'])) {
    $jurusan = $_POST['jurusan'] ;
  }else{
    die("Jurusan Belum diisi atau disetting") ;
  }

  if(isset($_POST['reg'])) {
    $registrasi = str_pad($_POST['reg'],4,"0",STR_PAD_LEFT)  ;
  }else{
    die("Registrasi Belum diisi atau disetting") ;
  }
   
  $nim = substr($tahunAngkatan, -2) ;
  $nim = $nim.$jurusan ;
  $nim = $nim.$registrasi ;

  echo "NIM " .$nim ;
  echo "<br>" ;
  echo "SPP ". number_format($spp,0,",",".") ;
?>