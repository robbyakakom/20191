<form>
Tanggal <input type="text" name="tanggal" > <br>
<button type="submit">TAMPILKAN</button>
</form>

<?php 
include("library.php") ;

if(isset($_GET['tanggal'] )){
  $tgl = $_GET['tanggal'] ;
  echo validTgl($tgl) ;
  echo "<br>" ;
  echo $tgl ;
}

?>
