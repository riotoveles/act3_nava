<?php

include("con_db.php");

if (isset($_POST['register'])) {
	if(strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono'])
>= 1) {

	 $name = trim($_POST['nombres']);
	 $lastname = trim($_POST['apellidos']);
	 $dir = trim($_POST['direccion']);
	 $cel = trim($_POST['telefono']);

	 $consulta = "INSERT INTO empleados(Nombre, Apellidos, Direccion, Telefono) VALUES ('$name','$lastname','$dir','$cel')";
	 $resultado = mysqli_query($conex,$consulta);
	 if($resultado) {
	 	?>
	 	<h3 class="ok"> Te has registrado correctamente </h3>
	 	<?php
	 } else {
	 	?>
	 	<h3 class="bad"> Ha ocurrido un error </h3>
	 	<?php
	    }
	} else {
	    ?>
	 	<h3 class="bad"> Por favor completa los campos </h3>
	 	<?php
	    
	    }
     }
?>