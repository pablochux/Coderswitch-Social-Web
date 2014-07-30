<?php 


// Query nuevos datos
function actualizarDatos($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter , $img) {

	$connection5 = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");
																											
	$q5 = "UPDATE Social	
	SET Usuario='$usuario', Contrasena='$contra', Nombre='$nombre', Apellidos='$apellidos', Email='$email', Profesion='$actual', Hobbys='$hobbys', Libros='$libros', Proyectos='$proyectos', Twitter='$twitter', Imagen='$img'
	WHERE Usuario ='" . $_SESSION["user"] . "'";

	$result2 = mysqli_query($connection5, $q5);	

// Queda lo de la imagen que lo he quitado porque no está puesta la imagen aún

}

?>