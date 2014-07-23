<?php 


function borrarDatos() {
	// Conexión con base de datos
	$connectionDelete = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");

	// Query borrar datos
	$qDelete = "DELETE
		FROM Social 
		WHERE Usuario = '" . $_SESSION["user"] . "'";

	$resultDelete = mysqli_query($connectionDelete, $qDelete);

}



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

/*$img = $_POST["img"]; */


// Query nuevos datos
function insertData($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter /*, $img*/) {

	$connection5 = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");
																													/*, Imagen*/
	$q5 = "INSERT into Social (Usuario, Contrasena, Nombre, Apellidos, Email, Profesion, Hobbys, Libros, Proyectos, Twitter)
	VALUES ('$usuario', '$contra', '$nombre', '$apellidos', '$email', '$actual', '$hobbys', '$libros', '$proyectos', '$twitter')";

	$result2 = mysqli_query($connection5, $q5);																		/*, '$img'*/
// Queda lo de la imagen que lo he quitado porque no está puesta la imagen aún

}



/*
$delete = mysqli_fetch_assoc($result3);
*/
?>