<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="sweetalert.js"></script>
    <link rel="stylesheet" href="sweetalert.css">
</head>
<body>
<?php 

include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$id_alumno = $_GET['id'];

$peticion = "DELETE FROM alumno	WHERE id_alumno=$id_alumno";

$resultado = mysqli_query($conexion, $peticion);

if($resultado){
	?>
	<script>
		swal({
		  title: "Egresado eliminado =(",
		  text: "Registro eliminado del sistema",
		  imageUrl: 'users.png',
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'egresados.php';
		}
		});
	</script>
	<?php
}
else{
	?>
	<script>
		swal({
		  title: "¡Registro NO eliminado!",
		  text: "Error con el servidor, vuelve a intertarlo.",
		  imageUrl: 'database-2.png',
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'egresados.php';
		}
		});
	</script>
	<?php

	
}
?>
</body>
</html>