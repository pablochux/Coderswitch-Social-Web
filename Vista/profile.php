<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Mi perfil </title>
	<link rel="stylesheet" type="text/css" href="./CSS/profileStyle.css">
	
	<script>

	$(function() {
		$('input').change(function() {
			if ($(this).val()) {
				$(this).css('width', '200px');
							}
		});
	});

	</script>

</head>
<body>
	
<?php
session_start();

// Menu
include("./menu.html");

// Rellenar Datos
include("../Modelo/profileDatos.php");



// Comprobación usuario

if (!isset($_SESSION["user"])) {

	header("Location: ./index.php");

}

$error = "";
$error2 = "";
$placeholderContra = "Escriba aquí su contraseña";
$placeholderReContra = "Repetir contraseña";

if (isset($_GET["error"])) {

	if ($_GET["error"] == 1) {
// error=1 == contraseñas
		$error = "errorStyle";

	}

		if ($_GET["error"] == 1){

			$placeholderContra = "Vuelva a escribir su contraseña";
			$placeholderReContra = "Vuelva a escribir su contraseña";

	}
}


?>	


<div class="cont" id="div1"> 
	<div id="img">

	</div>
	
	<div id="form1">
		<form method="post" class="login-form" enctype="multipart/form-data" action="../Controlador/formularioControladorMiPerfil.php">
		<label id="labelImg"> Imagen: <label>
				<!-- <input name="img" type="file" id="formImg" class="input" required > -->
					
			
	</div>
</div>

<div class="cont" id="div2"> 
	<div class="formularios">
		<section class="contenedores" id="cont1">
				<input name="nombre" type="text" id="nombre" class="input" required placeholder="Escriba aquí su nombre" value="<?= $BD["Nombre"] ?>" onfocus="this.value=''">

				<input name="apellidos" type="text" id="apellidos" class="input" required placeholder="Escriba aquí sus apellidos" value="<?= $BD["Apellidos"] ?>" onfocus="this.value=''">
				
				<input name="usuario" type="text" id="usuario" class="input" required placeholder="Escriba aquí su usuario" value="<?= $BD["Usuario"] ?>" onfocus="this.value=''">
				
				<input name="email" type="email" id="email"  class="input" required placeholder="Escriba aquí su email" value="<?= $BD["Email"] ?>" onfocus="this.value=''">
	
		</section>

		
		<section class="contenedores" id="cont3">

				<select name="actual" id="actual" class="formSelect" style="width:200px">>
				
					<option name="Estudiante" value="Estudiante" <?= $profesion1 ?> > Estudiante  </option>
						
					<option name="Trabajando" value="Trabajando" <?= $profesion2 ?> > Trabajando </option>
			
					<option name="Desempleado" value="Desempleado" <?= $profesion3 ?> > Desempleado</option>
			
				</select>
				
				<input name="hobbys" type="text" id="hobbys" class="input" required placeholder="Escriba aquí sus hobbys" value="<?= $BD["Hobbys"] ?>" onfocus="this.value=''">
				
				<input name="libros" type="text" id="libros" class="input" required placeholder="Escriba aquí sus libros" value="<?= $BD["Libros"] ?>" onfocus="this.value=''">
				
				<input name ="proyectos" type="text" id="proyectos" class="input" required placeholder="Escriba aquí sus proyectos" value="<?= $BD["Proyectos"] ?>" onfocus="this.value=''">
	 			
	 			<input name="twitter" type="text" id="twitter" class="input" required placeholder="Escriba aquí su twitter" value="<?= $BD["Twitter"] ?>" onfocus="this.value=''">
	 	</section>
	 	<section class="contenedores" id="cont2">	

				<input name="contra" type="password" id="pass" class="input <?= $error ?>" required placeholder="<?= $placeholderContra ?>">
				
				<input name ="recontra" type="password" id="repass"  class="input <?= $error ?>"  required placeholder="<?= $placeholderReContra ?>">
			
			
				
				<input type="submit" value="¡Registrame!" id="registrar">	
				</section>		

			</form>
	</div>
</div>









</body>
</html>












