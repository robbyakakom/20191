<?php 
$nama = $_POST['nama'] ;
$jurusan = $_POST['jurusan'] ;

$jumlah = count($nama) ;

?>
<table border="1">
  <tr>
   <th>Nama Calon</th>
   <th>Jurusan</th>
  </tr>
  <?php 
    for($index=0;$index < $jumlah; $index++){
    ?>
    <tr>
      <td><?php echo $nama[$index] ?></td>
      <td><?php echo $jurusan[$index] ?></td>
    </tr>
  <?php } ?>
</table>