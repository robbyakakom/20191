<?php 
include("header.php") ;
session_start() ;
if(!isset($_SESSION['nama'])){
  header("Location: file_44.php") ;
}
include("nav.php") ;
// 1. membuat koneksi
$konek = mysqli_connect("localhost","root","","akakom") ;

// 2. membuat sql string
$sql = "select * from mhs " ;

// 3. menjalankan query / sql
$query = mysqli_query($konek, $sql) ;



echo "<h2>Daftar Mahasiswa</h2>" ;
echo "<table border='1'>
<tr>
  <th>ID</th>
  <th>NIM</th>
  <th>Nama</th>
  <th>Foto</th>
  <th>Operasi</th>
</tr>" ;
// 4. fetching menjadi array
while($data = mysqli_fetch_assoc($query)) {
  // 5. menampilkan array data hasil fetch
  echo " <tr>
    <td>".$data['id']."</td>
    <td>".$data['nim']."</td>
    <td>".$data['nama']."</td>
    <td><a href='foto/".$data['foto']."' target='blank'><img src='foto/".$data['foto']."' width='70' alt='foto kosong'></a></td>
    <td>
        <a href='edit_form.php?id=".$data['id']."'>EDIT</a> | 
        <a href='file_38.php?id=".$data['id']."'>HAPUS</a> | 
    </td>
  </tr>" ;
}
echo "</table>" ;
// 5. menutup koneksi
mysqli_close($konek) ;
include("footer.php") ;
?>
