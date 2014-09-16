<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Gente </title>
	<link rel="stylesheet" type="text/css" href="./CSS/peopleStyle.css">
</head>
<body>

<?php

include("./menu.html");
// Comprobación usuario

session_start();

if (!isset($_SESSION["user"])) {

	header("Location: ./index.php");

}

?>

<div id="cabeza">

	<h1> Gente </h1>

</div>

	
<div class="min1">

	
<?php

// Base de datos
include("../Modelo/datosGente.php");

$gente = getPeople();
//$gente es un array

$i = 0 ;

foreach ($gente as $persona) {


	if ( $i > 4) {

		$i = 0;
		
	}

	if ( $i == 0 ) {
		
			echo

				'<div class="fila">';

			

			}


		
			echo  '<div class="profile">' .

							'<a href="./peopleProfile.php?u=' . $persona["Usuario"] . '">' .
							'<div class="imgPerfil">' .
							'<img src="' . $persona["Imagen"] . '">' .
							'</div>' .

								'<div class="infoPerfil">' .

									"Nombre: " . $persona['Nombre'] . "<br>" . "<br>". "Twitter: " . $persona['Twitter'] . "<br>" .

								'</div>'	.
					'</div>' . '</a>'

				;

				$i++;
	

	if ($i == 4) {

		echo "</div>";
		$i = 0;
	}

}

?>

</div>


</body>
</html>