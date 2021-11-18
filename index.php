<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilo.css">
	<title> Formulario Registro </title>
</head>
<body>
	<form method="post">
	<section class="form-register">
		<h4> Alta de Empleados </h4>
		<input class="controls" type="text" name="nombres" placeholder="Ingrese su Nombre">
		<input class="controls" type="text" name="apellidos" placeholder="Ingrese sus Apellidos">
		<input class="controls" type="text" name="direccion" placeholder="Ingrese su Direccion">
		<input class="controls" type="text" name="telefono" placeholder="Ingrese su Telefono">
		
		<input class="button" type="submit" name="register" value="Registrar">
		<p><a href="#"> Ya tengo una Cuenta </a></p>
	</section>
</form>

<?php
include("empleado.php");
?>

</body>
</html>
