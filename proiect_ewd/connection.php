<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
	die("Nu s-a putut conecta la baza de date.");
}