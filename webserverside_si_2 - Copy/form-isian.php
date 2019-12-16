<?php
$jumlah = $_POST['jumlah'] ;

$jurusan = array('SI'=>'Sistem Informasi', 'TI'=>'Teknik Informatika','KA'=>'Komputer Akuntansi','MI'=>'Manajemen Informatika','TK'=>'Teknik Komputer') ;
?>
<h1>Isian Calon Mahasiswa</h1>
<form action="tampil-data.php" method="post">
<?php 
for($i=0;$i<$jumlah;$i++) {
  ?>
  Nama Calon : <br> <input type="text" name="nama[]" /> <br>
  Pilihan Jurusan : <br> 
  <select name="jurusan[]">
    <?php 
    foreach ($jurusan as $singkat => $panjang) {
     ?>
      <option value="<?php echo $singkat ?>"><?php echo $panjang ?></option>
     <?php
    }
   ?>
  </select>
  <hr>
<?php } ?>
<button type="submit">Tampilkan...</button>
</form>