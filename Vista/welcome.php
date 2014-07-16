<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
<link href="./CSS/welcomeStyle.css" rel="stylesheet" type="text/css">
<title> ¡ Bienvenido ! </title>

<SCRIPT LANGUAGE="JavaScript">
  function redireccionar() {
    setTimeout("location.href='mainPage.php'", 2000);
  }
  </SCRIPT>

</head>
<body onLoad="redireccionar()">
<div class="outer">	<div class="middle"> <div class="inner">


<p class="welcome"> 
		¡ Bienvenido/a
						<?php session_start();
						
						if (!isset($_SESSION["user"])) {
							header("Location: ./index.php");
						}


						echo $_SESSION["user"];
						?> !
</p>

<footer id="pulsa">
Pulsa 
	<a href="mainPage.php"> aquí </a> 
		si no se te redirecciona directamente

</footer>
</div> </div> </div>



</body>
</html>