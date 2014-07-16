<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> </title>
<SCRIPT LANGUAGE="JavaScript">
  function redireccionar() {
    setTimeout("location.href='../Vista/index.php'", 5000);
  }
  </SCRIPT>

</head>
<body onLoad="redireccionar()">
	

<?php 
// La función inserData inserta en la base de datos los datos introducidos en el formulario 

function insertData($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter, $img) {


$connection2 = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");


$q2 = 
"INSERT into Social (Usuario, Contrasena, Nombre, Apellidos, Email, Profesion, Hobbys, Libros, Proyectos, Twitter, Imagen)
VALUES ('$usuario', '$contra', '$nombre', '$apellidos', '$email', '$actual', '$hobbys', '$libros', '$proyectos', '$twitter', '$img')";

$result2 = mysqli_query($connection2, $q2);


echo "Te has registrado correctamente, inicia sesión para continuar";


}

 ?>


 </body>
</html>
