<?php 
include("nav.php") ;
//tangkap data dari form
$nim = $_POST['nim'] ;
if($nim == ""){
  echo "
    <script>
      alert('NIM belum diisi') ;
      window.history.back(); 
    </script>
  " ;
  exit() ;
}

$nama = $_POST['nama'] ;
$foto = $_FILES['foto'] ;
$nama_foto = $foto['name'] ;
$simpanan_sementara = $foto['tmp_name'] ;
$ukuran = $foto['size'] ;
$type= $foto['type'] ;

if($type != 'image/jpg'){
  echo "
    <script>
      alert('Bukan file foto') ;
      window.history.back(); 
    </script>
  " ;
  exit() ;
}

if($ukuran >= 1000000){
  echo "
    <script>
      alert('Foto terlalu besar') ;
      window.history.back(); 
    </script>
  " ;
  exit() ;
}

if($nama_foto == ""){
  echo "
    <script>
      alert('Foto belum dikirim') ;
      window.history.back(); 
    </script>
  " ;
  exit() ;
}

// 1. membuat koneksi
$konek = mysqli_connect("localhost","root","","akakom") ;

// 2. membuat sql string
$sql = "insert into mhs(nim, nama, foto) values ('$nim','$nama','$nama_foto')" ;

// 3. menjalankan query / sql
$hasil = mysqli_query($konek, $sql) ;
if($hasil) {
  echo "Data berhasil disimpan" ;
}else{
  echo "Data gagal disimpan" ;
}

//memindahkan file foto dari tmp_name ke folder foto
move_uploaded_file($simpanan_sementara, "foto/".$nama_foto) ;

// 4. menutup koneksi
mysqli_close($konek) ;
?>