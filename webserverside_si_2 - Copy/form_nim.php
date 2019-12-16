<?php
$arr_jurus = ["561"=>"Sistem Informasi", "541"=>"Teknik Informatika", "321"=>"Manajemen Informatika","311"=>"Komputer Akuntansi","331"=>"Teknik Komputer"] ;
?>

<form action="buat_nim.php" method="post">
  Tahun Angkatan <input type="text" name="ta" />  <br>
  Jurusan <select name="jurusan">
            <?php 
            foreach($arr_jurus as $kode => $jurusan) {
              ?>
              <option value="<?php echo $kode ?>"><?php echo $jurusan ?></option>
              <?php 
            }
            ?>
          </select>
   <br>
   Registrasi <input type="text" name="reg" /> <br>
   SPP <input type="text" name="spp" /> <br>
   <button type="submit">BUAT NIM</button>
</form> 