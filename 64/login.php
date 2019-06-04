<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="utf-8">
</head>
<body>

<form method="post" action="proverka.php">
<div class="container" >
<?php echo '<input  name="name">';?>
</div>
<div class="container" >
<?php echo '<input  name="password" >';?>
</div>
<div class="container" >
<button>авторизация</button>
</div>
</form>
<?php echo $_GET['error'] ?>
</body>
</html>