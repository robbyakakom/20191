<?php 
include("nav.php") ;

$id = $_GET['id'] ;

//koneksi
include("koneksi.php") ;

//sql
$sql = "delete from mhs where id = $id" ;

//jalankan query
$query = mysqli_query($konek,$sql) ;

//pesan 
if($query)
  echo "Berhasil dihapus" ;
else
  echo "Gagal dihapus" ;

//tutup koneksi
mysqli_close($konek) ;
?>