<?php 	header('location:http://testgeorge/64/admin/login.php');
$connect=mysqli_connect('127.0.0.1','root','','film');
 $insert=mysqli_query($connect,"INSERT INTO admin (name,password) VALUES ('". $_POST['name'] ."','".$_POST['password']."')");
 ?>

              