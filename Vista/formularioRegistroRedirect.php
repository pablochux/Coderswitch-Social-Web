<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Registro completado! </title>
	<link rel="stylesheet" type="text/css" href="./CSS/formularioRegistroRedirectStyle.css">

<SCRIPT LANGUAGE="JavaScript">
  function redireccionar() {
    setTimeout("location.href='index.php'", 1500);
  }
  </SCRIPT>



</head>
<body onLoad="redireccionar()">
	
	<?php
$nombre = $_GET["nombre"];

	?>

	<div class="outer">	<div class="middle"> <div class="inner">

	<img src="./img/1.png" width="490px" height="90px"> 

	<h1> Te has registrado correctamente <label> <?= $nombre ?> , inicia sesión para continuar <label> </h1>

</div> </div> </div>
</body>
</html>