<?php 
include("nav.php") ;

$id = $_POST['id'] ;
$nim = $_POST['nim'] ;
$nama = $_POST['nama'] ;
$foto = $_FILES['foto'] ;
$nama_foto = $foto['name'] ;
$simpanan_sementara = $foto['tmp_name'] ;

//koneksi
$konek = mysqli_connect("localhost","root","","akakom") ;

//sql
$sql = "update mhs set nim = '$nim', nama = '$nama', foto = '$nama_foto' where id = $id" ;

//jalan query
$query = mysqli_query($konek, $sql) ;

//pesan gagal berhasil
if($query)
  echo "Data Berhasil di update" ;
else
  echo "Data Gagal di update" ;

move_uploaded_file($simpanan_sementara, "foto/".$nama_foto) ;
//tutup koneksi
mysqli_close($konek) ;
?>