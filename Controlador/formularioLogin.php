<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title> Registro </title>
	
</head>

<body onLoad="redireccionar()">

<?php

session_start();

include("../Modelo/basedeDatos.php");


$user = $_POST["user"];

$pass = $_POST["pass"];

if (isUserValid($user, $pass)) {

		$_SESSION["user"] = $_POST["user"];

		header("Location: ../Vista/welcome.php");
		// Redirigir a welcome si el usuario y la contraseña coinciden con los almacenados en la base de datos
	}
	
else {
	header("Location: ../Vista/index.php?error=1");
}

?>



</body>
</html>