<?php
	session_start();
	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result){
				if($result && mysqli_num_rows($result)> 0){
					$user_data=mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password){
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo "<font style='color:white;'>Numele de utilizator sau parola sunt incorecte.</font>";
		}
		else{
			echo "<font style='color:white;'>Numele de utilizator sau parola sunt incorecte.</font>";
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Autentificare</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body style="background-color: black;">
		<img src="imagini/autentificare.png" style="max-width:30%;margin-top: 200px" class="center responsive">
		<font>
			<form method="post" align="center">
				<input type="text" name="user_name"><br>
				<input type="password" name="password"><br>
				<input type="submit" value="Autentificare"><br>
				<a href="signup.php">Înregistrare</a>
			</form>
		</font>
	</body>
</html>