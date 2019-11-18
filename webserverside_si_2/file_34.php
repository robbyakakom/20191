<?php 
include("nav.php") ;
//tangkap data dari form
$nim = $_POST['nim'] ;
$nama = $_POST['nama'] ;

// 1. membuat koneksi
$konek = mysqli_connect("localhost","root","","akakom") ;

// 2. membuat sql string
$sql = "insert into mhs(nim, nama) values ('$nim','$nama')" ;

// 3. menjalankan query / sql
$hasil = mysqli_query($konek, $sql) ;
if($hasil) {
  echo "Data berhasil disimpan" ;
}else{
  echo "Data gagal disimpan" ;
}

// 4. menutup koneksi
mysqli_close($konek) ;
?>