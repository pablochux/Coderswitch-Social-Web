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
		<label> Nombre: </label>
			<input type="text" value="Escribe aquí tu nombre" onfocus="this.value=''" class="input" required aria-required="true">
				<br> 
					<br>
		<label> Apellidos </label>
			<input type="text" value="Escribe aquí tus apellidos" onfocus="this.value=''" class="input" required aria-required="true">	
				<br> 
					<br>
		<label> Usuario: </label>
			<input type="text" value="Escribe aquí tu usuario" onfocus="this.value=''" class="input" required aria-required="true">
				<br>
					<br>
		<label> Contraseña: </label>
			<input type="password" value="Escribe aquí" onfocus="this.value=''" class="input" required aria-required="true" >
				<br> 
					<br>
		<label> Repetir contraseña: </label>
			<input type="password" value="Escribe aquí" onfocus="this.value=''" class="input" required aria-required="true" >
				<br> 
					<br>
		<label> Email:</label>
			<input type="email" value="Escribe aquí tu email" onfocus="this.value=''" class="input" required required aria-required="true">
				<br>
					<br>
		<label>Situación actual:</label>
			<select name="idioma" class="formSelect" style="width:200px">>
				<option value="Estudiante">Estudiante </option>
					<option value="Trabajando">Trabajando </option>
						<option value="Desempleado">Desempleado</option>
			</select>
				<br> 
					<br>
		<label> Hobbys:</label>
			<input type="text" value="Escribe aquí tus hobbys" onfocus="this.value=''" class="input" required aria-required="true" >
				<br> 
					<br>
		<label> Libros: </label>
			<input type="text" value="Escribe aquí los libros que te estás leyendo" onfocus="this.value=''" class="input" required aria-required="true" >
				<br> 
					<br>
		<label> Proyectos: </label>
			<input type="text" value="Escribe aquí tus proyectos" onfocus="this.value=''" class="input" required aria-required="true">
					<br>
		<label> Twitter: </label>
 			<input type="text" value="Escribe aquí tu Twitter" onfocus="this.value=''" class="input" required aria-required="true">
				<br> 
					<br>
		<label> Imágenes: <label>
			<input type="text" value="Tercer campo" onfocus="this.value=''" class="input">
				<br>
	</div>
	
	<div class="footer">
		<input type="submit" value="¡Registrame!" class="button">
	</div>

</form>
</div>



</body>
</html>










