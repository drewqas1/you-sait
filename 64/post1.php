<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php

$connect=mysqli_connect('127.0.0.1','root','','film');
 $result=mysqli_query($connect, "SELECT * FROM users  WHERE id='".$_GET['id']."'  ");
    $res=$result->fetch_assoc();

?>

 <?php echo '<h2>'.$res['name'].'</h2>';?>
<?php

$connect=mysqli_connect('127.0.0.1','root','','film');
 $result=mysqli_query($connect, "SELECT * FROM post  ");
 for ($i=0; $i<$result->num_rows; $i++) { 
    $res=$result->fetch_assoc();

?>
<?php echo '<img src="' . $res["img"] . '"class="w-1">'; ?>

<?php  echo '<p>'.$res["opi"].'</p>';?>
<iframe src="video.mp4" width="610" height="370" allowfullscreen="" style="height: 255.386px;"></iframe>
<?php
}
?>


<?php

$connect=mysqli_connect('127.0.0.1','root','','film');
 $result=mysqli_query($connect, "SELECT * FROM users  WHERE id='".$_GET['id']."'  ");
    $res=$result->fetch_assoc();

?>

 <?php echo '<h2>'.$res['name'].'</h2>';?>
<?php

$connect=mysqli_connect('127.0.0.1','root','','film');
 $result=mysqli_query($connect, "SELECT * FROM users  WHERE id='".$_GET['id']."'  ");
    $res=$result->fetch_assoc();

?>
<form method="post" action="inser.php">
	<?php echo '<input type="hidden" name="user_id" value="'.$_GET['id'].'">'  ?>
	<?php echo '<input type="" name="text">'  ?>
	<button>добавть</button>
</form>
<form method="post" action="proverka2.php">
	<?php echo '<input type="hidden" name="user_id" value="'.$_GET['id'].'">'  ?>
	<button>1страница</button>
</form>
<?php
 $result2=mysqli_query($connect, "SELECT * FROM users INNER JOIN com ON users.id = com.user_id");
for ($i=0; $i<$result2->num_rows; $i++) { 
	 $res2=$result2->fetch_assoc();
 ?>
 <?php echo '<h2>'.$res2['name'].'</h2>';?>
<?php  echo '<p>'.$res2["text"].'</p>';?>

<?php
}
?>
