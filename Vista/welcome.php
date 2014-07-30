<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
<link href="./CSS/welcomeStyle.css" rel="stylesheet" type="text/css">
<title> ¡ Bienvenido ! </title>

<SCRIPT LANGUAGE="JavaScript">
  function redireccionar() {
    setTimeout("location.href='mainPage.php'", 1000);
  }
  </SCRIPT>

</head>
<body onLoad="redireccionar()">
<div class="outer">	<div class="middle"> <div class="inner">

	<img src="./img/1.png" width="490px" height="90px"> 
<h1> 
		¡ Bienvenido/a <label id="usuario">
						<?php session_start();
							
							if (!isset($_SESSION["user"])) {
								// Comprobación que el array está seteado
								header("Location: ./index.php");
							}
							// Autentificación

						echo $_SESSION["user"];
						?> </label> !
</h1>

<footer id="pulsa">
Pulsa 
	<a href="mainPage.php"> aquí </a> 
		si no se te redirecciona directamente

</footer>
</div> </div> </div>



</body>
</html>