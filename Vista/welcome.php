<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
<link href="./CSS/welcomeStyle.css" rel="stylesheet" type="text/css">

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


</div> </div> </div>
</head>
<body>	


</body>
</html>