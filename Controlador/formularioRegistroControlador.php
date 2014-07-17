<?php 
// Conexión POST

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
	

	include("../Modelo/nuevosDatos.php");


	insertData($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter, $img);


}

else {
	header("Location: ../Vista/formularioRegistro.php?error=1");
}











?>