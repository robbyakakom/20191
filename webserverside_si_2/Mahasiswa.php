<?php 
class Mahasiswa {
  var $nim ;
  var $nama ;
  var $jurusan ;

  function isiData($nim, $nama, $jurusan){
    $this->nim = $nim ;
    $this->nama = $nama ;
    $this->jurusan = $jurusan ;
  }

  function tampilData(){
    echo "Data Mahasiswa <hr>" ;
    echo "NIM " . $this->nim ."<br>" ;
    echo "Nama " . $this->nama ."<br>" ;
    echo "Jurusan " . $this->jurusan ."<br>" ;
  }
}
?>