<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Registro </title>
	<link rel="stylesheet" href="CSS/formularioRegistroStyle.css" type="text/css">
	<script src="./js/jquery-1.11.1.min.js"></script>
	<!--//code.jquery.com/jquery-1.11.0.min.js"-->
	<script>

	$(function() {
		$('input').change(function() {
			if ($(this).val()) {
				$(this).css('width', '350px');
							}
		});
	});

	</script>
</head>
<body> 
<?php 

// Errores

$error = "";
$error2 = "";

if (isset($_GET["error"])) {

	if ($_GET["error"] == 1) {
// error=1 == contraseñas
		$error = "errorStyle";

	}

	if ($_GET["error"] == 2) {
// error=2 == usuario/email
			$error2 = "errorStyle2"	;
		
		}
	
}

// Placeholder contraseñas
$placeholderContra = "Escribe aquí tu contraseña";

$placeholderReContra ="Vuelve a escribir tu contraseña";

if ($error == "errorStyle") {

	$placeholderContra = "Contraseñas mal introducidas";
	
	$placeholderReContra = "Contraseñas mal introducidas";
}

// Placeholder usuario/email
$placeholderEmail = "Escribe aquí tu email";

$placeholderUsuario ="Escribe aquí tu usuario";

if ($error2 == "errorStyle2") {

	$placeholderEmail = "Email y/o Usuario ya registrados";

	$placeholderUsuario = "Email y/o Usuario ya registrados";
}

?>

	<nav class="botones">
<header> <img src="./img/1.png" width="490px" height="90px"> 

	<a href="http://coderswitch.com/curso/" class="enl"> 
		<img width="45px" height="45px" src="./img/Iconos/internet-web-browser-128.png"> 
	</a>

	<a href="http://twitter.com/coderswitch" class="enl"> 
		<img width="50px" height="50px" src="./img/Iconos/twitter111.png"> 
	</a>
	
	<a href="http://coderswitch.com/blog/" class="enl"> 
		<img width="50px" height="50px" src="./img/Iconos/blogger111.png"> 
	</a>

	<a href="mailto:info@coderswitch.com" class="enl"> 
		<img width="50px" height="50px" src="./img/Iconos/email111.png"> 
	</a>

</header>
</nav>



	<section id="formulario"> 	
	<!--	<p id="titulo"> Registro Coderswitch Social </p> -->
<p class="formText"> Formulario de Registro </p>
			<form method="post" action="../Controlador/formularioRegistroControlador.php" class="login-form" enctype="multipart/form-data">
		
				<input name="nombre" type="text" id="nombre" placeholder="Escribe aquí tu nombre" class="input" required>
				
				<input name="apellidos" type="text" id="apellidos" placeholder="Escribe aquí tus apellidos" class="input" required>
				
				<input name="usuario" type="text" id="usuario" placeholder="<?= $placeholderUsuario ?>" class="input <?= $error2 ?>" required>
				
				<input name="contra" type="password" id="pass" placeholder="<?= $placeholderContra ?>"  class="input <?= $error ?>" required>
				
				<input name ="recontra" type="password" id="repass" placeholder="<?= $placeholderReContra ?>" class="input <?= $error ?>"  required>
				
				<input name="email" type="email" id="email"placeholder="<?= $placeholderEmail ?>"  class="input <?= $error2 ?>" required>
				
				<select name="actual" id="actual" class="formSelect" style="width:200px">>
				
					<option name="Estudiante" value="Estudiante"> Estudiante  </option>
						
					<option name="Trabajando" value="Trabajando"> Trabajando </option>
			
					<option name="Desempleado" value="Desempleado"> Desempleado</option>
			
				</select>
				
				<input name="hobbys" type="text" id="hobbys" placeholder="Escribe aquí tus hobbys" class="input" required>
				
				<input name="libros" type="text" id="libros" placeholder="Escribe aquí tus libros favoritos"  class="input" required>
				
				<input name ="proyectos" type="text" id="proyectos" placeholder="Escribe aquí tus proyectos"  class="input" required>
	 			
	 			<input name="twitter" type="text" id="twitter" placeholder="Escribe aquí tu Twitter"  class="input" required>
				
				<label id="labelImg"> Imagen: <label>
				<input name="img" name="img" type="file" id="img" class="input" required>

<div id="cont">
				<a href="index.php" id="enlace"> Volver </a>

				<input type="submit" value="¡Registrame!" id="registrar">

<div>

	

	</section>
	
</body>
</html>