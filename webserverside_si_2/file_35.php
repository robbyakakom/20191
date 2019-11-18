<?php 
include("nav.php") ;
$nama = $_GET['nama'] ;

// 1. membuat koneksi
$konek = mysqli_connect("localhost","root","","akakom") ;

// 2. membuat sql string
$sql = "select * from mhs where nama like '%$nama%'" ;

// 3. menjalankan query / sql
$query = mysqli_query($konek, $sql) ;

// 4. fetching menjadi array
while($data = mysqli_fetch_assoc($query)) {
  // 5. menampilkan array data hasil fetch
  echo "<h2>Data Mahasiswa</h2>" ;
  echo "ID : ".$data['id']."<br>";
  echo "NIM : ".$data['nim']."<br>";
  echo "Nama : ".$data['nama']."<hr>";
}
// 5. menutup koneksi
mysqli_close($konek) ;
?>