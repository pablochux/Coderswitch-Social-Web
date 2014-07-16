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
	
var_dump($nombre);
echo "<br>";
var_dump($apellidos);
echo "<br>";
var_dump($usuario);
echo "<br>";
var_dump($contra);
echo "<br>";
var_dump($recontra);
echo "<br>";
var_dump($email);
echo "<br>";
var_dump($actual);
echo "<br>";
var_dump($hobbys);
echo "<br>";
var_dump($libros);
echo "<br>";
var_dump($proyectos);
echo "<br>";
var_dump($twitter);
echo "<br>";
var_dump($img);


include("../Modelo/nuevosDatos.php");


insertData($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter, $img);


}












?>