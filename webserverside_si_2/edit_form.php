<?php 
include("nav.php") ;

$id = $_GET['id'] ;

// 1. membuat koneksi
$konek = mysqli_connect("localhost","root","","akakom") ;

// 2. membuat sql string
$sql = "select * from mhs where id = '$id'" ;

// 3. menjalankan query / sql
$query = mysqli_query($konek, $sql) ;

// 4. fetching menjadi array
$data = mysqli_fetch_assoc($query) ;

?>

<h2>Edit Data Mahasiswa</h2>
<form action="file_37.php" method="post">
  ID <br> <input type="text" name="id" id="id" value="<?php echo $data['id'] ?>"> <br>
  NIM <br> <input type="text" name="nim" id="nim" value="<?php echo $data['nim'] ?>"> <br>
  Nama <br> <input type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>"> <hr>
  <button type="submit">SIMPAN EDIT</button>
</form>

<?php 
// 5. menutup koneksi
mysqli_close($konek) ;
?>