<?php 
 
$connect=mysqli_connect('127.0.0.1','root','','film');
 $result=mysqli_query($connect, "SELECT * FROM users  WHERE name='".$_POST["name"]."' AND password='".$_POST["password"]."',id='".$_POST["id"]."' ");
    $res=$result->fetch_assoc();
    if($result->num_rows==0){
    	 header('Location:http://testgeorge/64/post.php?id='.$res['id'].'');
    }else{
        
    }
  
 ?>