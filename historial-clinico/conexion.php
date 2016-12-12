<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "shuitu";
	//Se agrega timezone
	date_default_timezone_set('America/Mexico_City');
	//fin de agregado
	$conexion = mysqli_connect($host, $user, $pass, $db) or die(mysql_error());
	mysqli_select_db($conexion, $db);
?>