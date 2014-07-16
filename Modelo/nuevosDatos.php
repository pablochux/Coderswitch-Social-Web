<?php 
// La función inserData inserta en la base de datos los datos introducidos en el formulario 

function insertData($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter, $img) {


$connection2 = mysqli_connect("localhost", "usuario", "1234", "CoderswitchSocial");


$q2 = 
"INSERT into Social (Usuario, Contrasena, Nombre, Apellidos, Email, Profesion, Hobbys, Libros, Proyectos, Twitter, Imagen)
VALUES ('$usuario', '$contra', '$nombre', '$apellidos', '$email', '$actual', '$hobbys', '$libros', '$proyectos', '$twitter', '$img')";

$result2 = mysqli_query($connection2, $q2);


echo "Datos introducidos correctamente";


}

 ?>