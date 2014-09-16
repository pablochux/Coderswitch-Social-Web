<?php
function datosPerfil ($usuario) {

	$connectionPeopleProfile = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");

		$qPeopleProfile = "SELECT *
		           FROM Social
		           WHERE Usuario = '$usuario'";

			$resultPeopleProfile = mysqli_query($connectionPeopleProfile, $qPeopleProfile);

				$result = array();

					while ($row = mysqli_fetch_assoc($resultPeopleProfile)) {
						    array_push($result, $row);
						}

						return $result;


}


?>