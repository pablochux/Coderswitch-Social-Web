<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> Perfil </title>
	<link rel="stylesheet" type="text/css" href="./CSS/peopleProfileStyle.css">
</head>
<body>

<?php
include("./menu.html");


// Comprobación usuario

session_start();

if (!isset($_SESSION["user"])) {

	header("Location: ./index.php");
}

include("../Modelo/datosPeopleProfile.php");

$usuario = $_GET["u"];

$datos = datosPerfil ($usuario);

?>

<div id="cabeza">

	<h1> <?= $datos[0]["Nombre"] ?> <?= $datos[0]["Apellidos"] ?> </h1>

</div>

<div id="profile">

		<div id="img">
			Imagen: 
			<br>
			<br>
				<img src=" <?= $datos[0]["Imagen"] ?> ">
			
		</div>

	<div id="text">
		 Usuario: <?= $datos[0]["Usuario"] ?>
		<p> Correo electrónico: <a href='mailto:<?= $datos[0]["Email"]?>' id="email">  <?= $datos[0]["Email"]?> </a></p>
		<p> Hobbys: <?= $datos[0]["Hobbys"]  ?></p>
		<p>	Situación actual: <?= $datos[0]["Profesion"]?> </p>
		<p>	Libros favoritos: <?= $datos[0]["Libros"] ?></p>
		<p>	Proyectos: <?= $datos[0]["Proyectos"] ?></p>
		<p>	Twitter: <a href=' <?php echo  "https://twitter.com/" . substr($datos[0]["Twitter"], 1) ?> ' id="twitter"> <?= $datos[0]["Twitter"]?> </a> </p>

	</div>

</div>

</body>
</html>