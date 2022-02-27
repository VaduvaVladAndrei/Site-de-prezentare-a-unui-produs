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
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/prezentare.css">
		<title>Prezentare Generală</title>
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
					<a style="color:black;" href="specificatii.php">Specificații</a>
					<a style="color:black;" href="feedback.php">Feedback</a>
				</div>
			</div>
		</font>
		<!--Meniu de dropdown-->
		<a href="logout.php" style="float:right;">Logout</a>
		<input type="image" src="imagini/logo.png" style="max-width:12%" class="center responsive" onclick="loadPage('index.php')">
		<br><br><br><br>
		<img src="imagini/ceamai.png" class="center">
		<br><br>
		<img src="imagini/tensor.jpg" style="max-width: 15%;float:right;margin-right: 200px">
		<div style="margin-left:200px;font-size:1vw;">
			<h1>
				<font>
					GeForce RTX 3090 este cel mai nou procesor grafic de la Nvidia. Cu arhitectura Ampere, tehnologia ray-tracing si 24 GB de VRAM, această placă este tot ce vă trebuie pentru o experiență de gaming perfectă.
				</font>
			</h1>
		</div>
		<p class="clear">
			<br><br><br><br>
			<img src="imagini/dlss.png" style="max-width:50%" class="center">
		</p>
		<br><br>
		<div style="margin-right:200px;margin-left:200px;font-size:1vw">
			<h1>
				<font>
					DLSS este o tehnologie bazată pe inteligență artificială care se folosește de nucleele Tensor ale plăcii RTX 3090 pentru a mării frecvența de cadre la care pot rula jocurile fără a sacrifica din calitatea imaginii.
				</font>
			</h1>
		</div>
		<div class="container">
			<iframe class="center responsive-iframe" src="https://www.youtube.com/embed/IMi3JpNBQeM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</body>
</html>