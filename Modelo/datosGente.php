<?php 

function getPeople() {
	// Sacar información de usuarios para mostrar en la pantalla Gente 
	$connectionGente = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");

	$qGente = "SELECT *
	           FROM Social
	           WHERE Usuario !='" . $_SESSION["user"] . "'";

	$resultGente = mysqli_query($connectionGente, $qGente);

	$result = array();

	while ($row = mysqli_fetch_assoc($resultGente)) {
	    array_push($result, $row);
	}

	return $result;
}

?>