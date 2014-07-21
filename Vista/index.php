<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="utf-8">
<meta name="keywords" content="coderswitch, código, programación, HTML, PHP, MySQL, bases de datos">
<meta name="description" content="Red social oficial del curso coderswitch">
<title> Coderswitch Social </title>
<script src="./pace/Pace.js"></script>
<link rel="stylesheet" href="./pace/pace.css">
</head>
<body>

<?php 
$errorClass = "";

if (isset($_GET["error"])) {
	// Si en la url encuentra error, imprime mal, solo encuentra error cuando el usuario y la contraseña no son correctos.
	$errorClass = "incorrecto";
}

include("formularioLogin.php") 

?>

<nav class="botones">
<img src="./img/1.png" width="490px" height="90px"> 
	<a href="./info.php" class="info enl"> INFO!!! </a>

	<a href="http://coderswitch.com/curso/" class="enl"> 
		<img width="45px" height="45px" src="./img/Iconos/internet-web-browser-128.png"> 
	</a>

	<a href="http://twitter.com/coderswitch" class="enl"> 
		<img width="50px" height="50px" src="./img/Iconos/twitter111.png"> 
	</a>
	
	<a href="http://coderswitch.com/blog/" class="enl"> 
		<img width="50px" height="50px" src="./img/Iconos/blogger111.png"> 
	</a>

	<a href="mailto:info@coderswitch.com" class="enl"> 
		<img width="50px" height="50px" src="./img/Iconos/email111.png"> 
	</a>

</nav>


</body>

</html>