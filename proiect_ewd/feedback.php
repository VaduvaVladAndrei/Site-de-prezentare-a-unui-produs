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
		<link rel="stylesheet" href="css/feedback.css">
		<title>Feedback</title>
		<script>
			function loadPage(page){
				window.location=page;
			}
			function getResult(){
				var nota=document.getElementsByName("nota");
				var standard=document.getElementsByName("standard");
				var func=document.getElementsByName("func");
				var result="";

				for(var i=0;i<nota.length;i++){
					if(nota[i].checked){
						result+=nota[i].value;
						result+="\n";
						break;
					}
				}
				for(var i=0;i<standard.length;i++){
					if(standard[i].checked){
						result+=standard[i].value;
						result+="\n";
					}
				}
				for(var i=0;i<func.length;i++){
					if(func[i].checked){
						result+=func[i].value;
						result+="\n";
					}
				}
				document.getElementById("result").innerHTML=result;
				setTimeout(function(){ alert("Vă mulțumim pentru răspunsurile dumneavoastră!"); }, 3000);
			}
			function flash(){
				setInterval(changeColor,750);
			}
			function changeColor(){
				document.getElementById("ales").style.color="lime";
				setTimeout(function(){ document.getElementById("ales").style.color="white"; }, 500);
			}
		</script>
	</head>
	<body style="background-color: black">
		<br>
		<!--Meniu de dropdown-->
		<font>
			<div class="meniu">
				<button class="butondrop">Navigare rapidă</button>
				<div class="continut">
					<a style="color:black;" href="index.php">Pagina principală</a>
					<a style="color:black;" href="specificatii.php">Specificații</a>
					<a style="color:black;" href="prezentare.php">Prezentare generală</a>
				</div>
			</div>
		</font>
		<!--Meniu de dropdown-->
		<a href="logout.php" style="float:right;font-size:1.5vw">Logout</a>
		<input type="image" src="imagini/logo.png" class="center responsive" style="max-width:12%" onclick="loadPage('index.php')">
		<br><br><br><br>
		<img src="imagini/formular.png" class="center responsive">
		<h2>
		<font>
			<form align="center">
				<label>Pe o scară de la 1 la 5, cât de convins(ă) sunteți de calitatea plăcii grafice GeForce RTX 3090?</label><br>
				<label style="color:lime">1</label>
				<input type="radio" name="nota" value="1">
				<label style="color:lime">|2</label>
				<input type="radio" name="nota" value="2">
				<label style="color:lime">|3</label>
				<input type="radio" name="nota" value="3">
				<label style="color:lime">|4</label>
				<input type="radio" name="nota" value="4">
				<label style="color:lime">|5</label>
				<input type="radio" name="nota" value="5"><br><br><br>
				<label>Reușește placa RTX 3090 să ajungă la standardele dumneavoastră?</label><br>
				<input type="radio" name="standard" value="Da">
				<label style="color:lime">Da</label>
				<input type="radio" name="standard" value="Nu">
				<label style="color:lime">Nu</label>
				<br><br><br>
				<label>Care este funcționalitatea dumneavoastră preferată a aceste plăci grafice?</label><br>
				<input type="checkbox" name="func" value="Tehnologia Ray-Tracing"><label style="color:lime">Tehnologia Ray-Tracing</label>
				<input type="checkbox" name="func" value="Tehnologia DLSS"><label style="color:lime">Tehnologia DLSS</label>
				<input type="checkbox" name="func" value="Spațiul de memorie"><label style="color:lime">Spațiul de memorie</label>
				<input type="checkbox" name="func" value="NVLink SLI"><label style="color:lime">NVLink SLI</label><br>
				<br>
				<input type="button" value="Trimite" onclick="getResult();flash()"><br>
				<div id="ales"><label>Ați ales:</label></div>
				<textarea cols="50" rows="6" readonly id="result"></textarea>
			</form>
		</font>
		</h2>
	</body>
</html>