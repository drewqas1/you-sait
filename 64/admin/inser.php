<?php 	header('Location:http://testgeorge/64/admin/post.php?id='.$_POST['user_id']);
$connect=mysqli_connect('127.0.0.1','root','','film');
 $insert=mysqli_query($connect,"INSERT INTO com (text,user_id) VALUES ('". $_POST['text'] ."','".$_POST['user_id']."')");
 ?>
