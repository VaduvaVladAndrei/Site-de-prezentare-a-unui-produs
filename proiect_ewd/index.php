<?php
	session_start();
	include("connection.php");
	include("functions.php");

	$user_data=check_login($con);
?>	
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/mainstyle.css">
		<title>Placa grafică GeForce RTX 3090</title>
		<script>
			function loadPage(page){
				window.location=page;
			}
		</script>
	</head>
	<body style="background-color:black;">
		<br>
		<a href="logout.php" style="float:right;font-size:1.4vw">Logout</a>
		<input type="image" src="imagini/logo.png" style="max-width:12%;position:relative;" class="center responsive" onclick="loadPage('index.php')">
		<br><br>
		<img src="imagini/rtx3090.png" width="800" height="360" class="center">
		<br><br><br><br>
		<img src="imagini/titlu.png" width="1000" class="center">
		<br><br><br>
			<table align="center">
				<tr>
					<td><input type="image" src="imagini/prezentare generala.png" onclick="loadPage('prezentare.php')" style="max-width: 85%" class="hov responsive"></td>
					<td><input type="image" src="imagini/specificatii.png" style="max-width: 85%" class="hov responsive" onclick="loadPage('specificatii.php')"></td>
				</tr>
			</table>
		
		<div style="text-align: center;font-family:'Courier New', monospace;font-size:1vw">
			<h2>
				<a href="feedback.php">Feedback</a>
			</h2>
		</div>
	</body>
</html>