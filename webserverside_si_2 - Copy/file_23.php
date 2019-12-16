<?php
$jurusan = array('SI'=>'Sistem Informasi', 'TI'=>'Teknik Informatika','KA'=>'Komputer Akuntansi','MI'=>'Manajemen Informatika','TK'=>'Teknik Komputer') ;
?>
<form>
Nama Calon : <br> <input type="text" name="nama" /> <br>
Pilihan Jurusan : <br> 
 <select name="jurusan">
   <?php 
   foreach ($jurusan as $singkat => $panjang) {
     ?>
      <option value="<?php echo $singkat ?>"><?php echo $panjang ?></option>
     <?php
   }
   ?>
 </select>
 <br>
</form>