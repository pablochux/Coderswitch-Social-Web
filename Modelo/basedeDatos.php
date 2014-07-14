<?php

/* La función isUserValid conecta con la base de datos y ejecuta la query, si saca datos es que hay un usuario y una contraseña que coincida, 
por lo que devolverá true. En el caso en el que el usuario o la contraseña introducidos no existan, la query no devuelve nada. Por lo que es false */


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