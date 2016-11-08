<?php 
  //include & require

include_once("config.php");
$id = $_GET['id'];


//mysqli_query(koneksi databases , "query")
mysqli_query($mysqli, "DELETE FROM users WHERE id = $id") ;  //delete data users berdasarkan id


//kalo udah delete balik ke INDEX.PHP 
header("location:index.php");

?>