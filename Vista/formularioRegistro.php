<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
		
	<title></title>
<link rel="stylesheet" type="text/css" href="./CSS/formularioRegistroStyle.css">
</head>

<body>
<header> <img src="./Img/1.png" height="100" width="500" class="img"> <br> <br><br><br><br><br></header>

<div id="hola">
<form method="post" action="" class="login-form">
	<div class="content">
		<label for="nombre"> Nombre: </label>
			<input type="text" id="nombre" placeholder="Escribe aquí tu nombre" class="input" required aria-required="true">
				<br> 
					<br>
		<label for="apellidos"> Apellidos </label>
			<input type="text" id="apellidos" placeholder="Escribe aquí tus apellidos" class="input" required aria-required="true">	
				<br> 
					<br>
		<label for="usuario"> Usuario: </label>
			<input type="text" id="usuario" placeholder="Escribe aquí tu usuario" class="input" required aria-required="true">
				<br>
					<br>
		<label for="pass"> Contraseña: </label>
			<input type="password" id="pass" placeholder="Escribe aquí"  class="input" required aria-required="true" >
				<br> 
					<br>
		<label for="repass"> Repetir contraseña: </label>
			<input type="password" id="repass" placeholder="Escribe aquí" class="input" required aria-required="true" >
				<br> 
					<br>
		<label for="email"> Email:</label>
			<input type="email" id="email"placeholder="Escribe aquí tu email"  class="input" required aria-required="true">
				<br>
					<br>
		<label for="actual">Situación actual:</label>
			<select name="idioma" id="actual" class="formSelect" style="width:200px">>
				<option value="Estudiante">Estudiante </option>
					<option value="Trabajando">Trabajando </option>
						<option value="Desempleado">Desempleado</option>
			</select>
				<br> 
					<br>
		<label for="hobbys"> Hobbys:</label>
			<input type="text" id="hobbys" placeholder="Escribe aquí tus hobbys" class="input" required aria-required="true" >
				<br> 
					<br>
		<label for="libros"> Libros: </label>
			<input type="text" id="libros" placeholder="Escribe aquí los libros que te estás leyendo"  class="input" required aria-required="true" >
				<br> 
					<br>
		<label for="proyectos"> Proyectos: </label>
			<input type="text" id="proyectos" placeholder="Escribe aquí tus proyectos"  class="input" required aria-required="true">
					<br>
		<label for="twitter"> Twitter: </label>
 			<input type="text" id="twitter" placeholder="Escribe aquí tu Twitter"  class="input" required aria-required="true">
				<br> 
					<br>
		<label for="img" > Imágenes: <label>
			<input type="text" id="img" placeholder="Tercer campo"  class="input">
				<br>
	</div>
	
	<div class="footer">
		<input type="submit" value="¡Registrame!" class="button">
	</div>

</form>
</div>



</body>
</html>










