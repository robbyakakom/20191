<?php 
include("nav.php") ;

$id = $_POST['id'] ;
$nim = $_POST['nim'] ;
$nama = $_POST['nama'] ;

//koneksi
$konek = mysqli_connect("localhost","root","","akakom") ;

//sql
$sql = "update mhs set nim = '$nim', nama = '$nama' where id = $id" ;

//jalan query
$query = mysqli_query($konek, $sql) ;

//pesan gagal berhasil
if($query)
  echo "Data Berhasil di update" ;
else
  echo "Data Gagal di update" ;

//tutup koneksi
mysqli_close($konek) ;
?>