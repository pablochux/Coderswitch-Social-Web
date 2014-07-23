<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> </title>
	<SCRIPT LANGUAGE="JavaScript">
  function redireccionar() {
    setTimeout("location.href='../Vista/index.php'", 2000);
  }
  </SCRIPT>


</head>
<body onLoad="redireccionar()">
	

<?php 

// La función inserData inserta en la base de datos los datos introducidos en el formulario 
$connection2 = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");

$q3 = "SELECT *
FROM Social
WHERE Usuario = '$usuario'
or Email = '$email'";

$result3 = mysqli_query($connection2, $q3);

$row3 = mysqli_fetch_assoc($result3);


if (isset($row3)) {

	header("Location: ../Vista/formularioRegistro.php?error=2");

}

else {

function insertData($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter, $img) {

$connection2 = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");

$q2 = 
"INSERT into Social (Usuario, Contrasena, Nombre, Apellidos, Email, Profesion, Hobbys, Libros, Proyectos, Twitter, Imagen)
VALUES ('$usuario', '$contra', '$nombre', '$apellidos', '$email', '$actual', '$hobbys', '$libros', '$proyectos', '$twitter', '$img')";

$result2 = mysqli_query($connection2, $q2);


echo "Te has registrado correctamente, inicia sesión para continuar";


}
}

 ?>


 </body>
</html>
