<?php 
/*
function datosPerfil() {
*/
	$connectionDatosPerfil = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");

	$qDatosPerfil = "SELECT Nombre, Apellidos, Usuario, Email, Hobbys, Libros, Proyectos, Twitter, Profesion, Imagen
		FROM Social 
		WHERE Usuario = '" . $_SESSION["user"] . "'";


	$resultDatosPerfil = mysqli_query($connectionDatosPerfil, $qDatosPerfil);

	$BD = mysqli_fetch_assoc($resultDatosPerfil);

		$profesion1 = "";
		$profesion2 = "";
		$profesion3 = "";

		if ($BD["Profesion"] == "Estudiante") {
			$profesion1 = "selected";
		}

		if ($BD["Profesion"] == "Trabajando") {
			$profesion2 = "selected";
		}
		if ($BD["Profesion"] == "Desempleado") {
			$profesion3 = "selected";
		}
		/*
};
*/
 ?>