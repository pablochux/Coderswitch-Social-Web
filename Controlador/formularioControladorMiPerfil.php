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

if($contra == $recontra) {


		insertData($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter /*, $img*/);



		borrarDatos();

}

else {

	header("Location: ../Vista/profile.php?error=1");

}


?>

	<h1> Sus datos se han cambiado correctamente </h1>

</body>
</html>