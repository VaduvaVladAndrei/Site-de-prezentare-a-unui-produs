<?php
	session_start();
	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
			mysqli_query($con, $query);
			header("Location: login.php");
			die;
		}
		else{
			echo "Datele incluse nu sunt valide.";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Inregistrare</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body style="background-color: black;">
		<img src="imagini/inregistrare.png" style="max-width:30%;margin-top: 200px" class="center responsive">
		<font>
			<form method="post" align="center">
				<input type="text" name="user_name"><br>
				<input type="password" name="password"><br>
				<input type="submit" value="Înregistrare"><br>
				<a href="login.php">Autentificare</a>
			</form>
		</font>
	</body>
</html>