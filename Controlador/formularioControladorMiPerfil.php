<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Datos cambiados correctamente </title>
	<SCRIPT LANGUAGE="JavaScript">
  function redireccionar() {
    setTimeout("location.href='mainPage.php'", 2000);
  }

  </SCRIPT>
</head>
<body>

<?php 

session_start();


include("../Modelo/profileDatosNuevos.php");


$nombre = $_POST["nombre"];

$apellidos = $_POST["apellidos"];

$usuario = $_POST["usuario"];

$contra = $_POST["contra"];

$recontra = $_POST["recontra"];

$email = $_POST["email"];

$actual = $_POST["actual"];

$hobbys = $_POST["hobbys"];

$libros = $_POST["libros"];

$proyectos = $_POST["proyectos"];

$twitter = $_POST["twitter"];

$img = $_POST["img"];
	
if($contra == $recontra) {


		actualizarDatos($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter , $img);

		$_SESSION["user"] =$_POST["usuario"];

		header("Location: ../Vista/profile.php?estado=NR");

}

else {

	header("Location: ../Vista/profile.php?error=1");

}







?>


</body>
</html>