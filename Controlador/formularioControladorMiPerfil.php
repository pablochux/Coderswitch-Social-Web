<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Datos cambiados correctamente </title>
	<SCRIPT LANGUAGE="JavaScript">
  function redireccionar() {
    setTimeout("location.href='mainPage.php'", 2000);
  }

  </SCRIPT>
</head>
<body>

<?php 

session_start();


include("../Modelo/profileDatosNuevos.php");


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

	
if($contra == $recontra) {

	$archivo = $_FILES['img']['tmp_name'];
	$destino = "../Vista/imgBaseDatos/" . time() . $_FILES['img']['name'];
	move_uploaded_file($archivo, $destino);

	
$rutaImagenOriginal = $destino;

	
//Creamos una variable imagen a partir de la imagen original
$img_original = imagecreatefromjpeg($rutaImagenOriginal);
	
//Se define el maximo ancho o alto que tendra la imagen final
	$max_ancho = 200;
	$max_alto = 200;
	
	//Ancho y alto de la imagen original
	list($ancho,$alto)=getimagesize($rutaImagenOriginal);
	
	//Se calcula ancho y alto de la imagen final
	$x_ratio = $max_ancho / $ancho;
	$y_ratio = $max_alto / $alto;
	
	//Si el ancho y el alto de la imagen no superan los maximos, 
	//ancho final y alto final son los que tiene actualmente
	if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
		$ancho_final = $ancho;
		$alto_final = $alto;
	}

	elseif (($x_ratio * $alto) < $max_alto){
		$alto_final = ceil($x_ratio * $alto);
		$ancho_final = $max_ancho;
	}
	/*
	 * Igual que antes pero a la inversa
	*/
	else{
		$ancho_final = ceil($y_ratio * $ancho);
		$alto_final = $max_alto;
	}
	
	//Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
	$tmp=imagecreatetruecolor($ancho_final,$alto_final);	
	
	//Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
	imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
	
	//Se destruye variable $img_original para liberar memoria
	imagedestroy($img_original);
	
	//Definimos la calidad de la imagen final
	$calidad=95;

	$destino = "../Vista/imgBaseDatos/" . time() . $_FILES['imagenPerfil']['name'];
	
	//Se crea la imagen final en el directorio indicado
	imagejpeg($tmp,$destino,$calidad);



		actualizarDatos($usuario, $contra, $nombre, $apellidos, $email, $actual, $hobbys, $libros, $proyectos, $twitter , $destino);

		$_SESSION["user"] =$_POST["usuario"];

		header("Location: ../Vista/profile.php?estado=NR");

}

else {
	header("Location: ../Vista/profile.php?error=1");
}







?>


</body>
</html>