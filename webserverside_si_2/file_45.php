<?php 
session_start() ;
$konek = mysqli_connect("localhost","root","","akakom") ;

$input_user = $_POST['user'] ;
$input_password = md5($_POST['password']) ;

$sql = "select * from login where user='{$input_user}' and pass='{$input_password}'" ;

$query = mysqli_query($konek,$sql) ;

$row = mysqli_num_rows($query) ;

if($row > 0){
  $_SESSION['nama'] = $input_user ;
  header("Location: daftar.php") ;
}else {
  echo "<script>
          alert('User Password salah!!!');
          window.history.back();
          </script>" ;
}
?>