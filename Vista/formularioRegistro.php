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
			<form method="post" action="../Controlador/formularioRegistroControlador.php" class="login-form">
		
				<input name="nombre" type="text" id="nombre" placeholder="Escribe aquí tu nombre" class="input" required>
				
				<input name="apellidos" type="text" id="apellidos" placeholder="Escribe aquí tus apellidos" class="input" required>
				
				<input name="usuario" type="text" id="usuario" placeholder="Escribe aquí tu usuario" class="input" required>
				
				<input name="contra" type="password" id="pass" placeholder="Escribe aquí tu contraseña"  class="input" required>
				
				<input name ="recontra" type="password" id="repass" placeholder="Escribe aquí tu contraseña" class="input" required>
				
				<input name="email" type="email" id="email"placeholder="Escribe aquí tu email"  class="input" required>
				
				<select name="actual" id="actual" class="formSelect" style="width:200px">>
				
					<option name="Estudiante" value="Estudiante">Estudiante  </option>
						
					<option name="Trabajando" value="Trabajando">Trabajando </option>
			
					<option name="Desempleado" value="Desempleado">Desempleado</option>
			
				</select>
				
				<input name="hobbys" type="text" id="hobbys" placeholder="Escribe aquí tus hobbys" class="input" required>
				
				<input name="libros" type="text" id="libros" placeholder="Escribe aquí tus libros favoritos"  class="input" required>
				
				<input name ="proyectos" type="text" id="proyectos" placeholder="Escribe aquí tus proyectos"  class="input" required>
	 			
	 			<input name="twitter" type="text" id="twitter" placeholder="Escribe aquí tu Twitter"  class="input" required>
				
				<input name="img" name="img" type="text" id="img" placeholder="Escribe aquí la URL de tu imagen"  class="input" required>

<div id="cont">
				<a href="index.php" id="enlace"> Volver </a>

				<input type="submit" value="¡Registrame!" id="registrar">

<div>

	

	</section>
	
</body>
</html>