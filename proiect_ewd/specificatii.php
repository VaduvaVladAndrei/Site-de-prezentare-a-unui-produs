<?php
	session_start();
	include("connection.php");
	include("functions.php");

	$user_data=check_login($con);
?>	

<!DOCTYPE html>
<html>
<head>
	<title>Specificații</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/specificatii.css">
	<script>
		function loadPage(page){
			window.location=page;
		}
	</script>
</head>
<body style="background-color:black;">
	<br>
		<!--Meniu de dropdown-->
		<font>
			<div class="meniu">
				<button class="butondrop">Navigare rapidă</button>
				<div class="continut">
					<a style="color:black;" href="index.php">Pagina principală</a>
					<a style="color:black;" href="prezentare.php">Prezentare generală</a>
					<a style="color:black;" href="feedback.php">Feedback</a>
				</div>
			</div>
		</font>
		<!--Meniu de dropdown-->
	<a href="logout.php" style="float:right;font-size:1.5vw">Logout</a>
	<input type="image" src="imagini/logo.png" style="max-width:12%" class="center responsive" onclick="loadPage('index.php')">
	<br><br><br><br>
	<img src="imagini/titluspec.png" class="center responsive" style="max-width: 35%">
	<h1>
	<font>
		<table align="center">
			<tr>
				<td>Nuclee CUDA</td>
				<td>10,496</td>
			<tr>
			<tr>
				<td>Frecvență Boost</td>
				<td>1.7GHz</td>
			</tr>
			<tr>
				<td>Spațiu de memorie</td>
				<td>24GB GDDR6X</td>
			</tr>
			<tr>
				<td>Lățime de bandă a memoriei</td>
				<td>936 GBps</td>
			</tr>
			<tr>
				<td>Nuclee RT</td>
				<td>82</td>
			</tr>
			<tr>
				<td>Nuclee Tensor</td>
				<td>328</td>
			</tr>
			<tr>
				<td>NVLink SLI</td>
				<td>Da</td>
			</tr>
		</table>
	<font>
	<h1>
</body>
</html>