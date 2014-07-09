<?php

function isUserValid($user, $pass) {

	$connection = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");

// Primer query, saca usuario
$q = "SELECT *
FROM Social
WHERE Usuario = '$user'
AND Contrasena = '$pass'";

$result = mysqli_query($connection, $q);

$row = mysqli_fetch_assoc($result);

if ($row == false){
return false;

}

else {
	return true;
}
}
?>