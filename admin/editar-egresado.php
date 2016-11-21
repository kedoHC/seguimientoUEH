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
$id_alumno =$_GET['id'];
$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$titulo = $_POST['titulo'];
$anioTitulo = $_POST['anioTitulo'];
$correo = $_POST['correo'];

$nombre = strtoupper($nombre);
$matricula = strtoupper($matricula);
$titulo = strtoupper($titulo);
$correo = strtoupper($correo);




include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "UPDATE alumno SET  
	nombre		=	'$nombre',
	matricula	=	'$matricula',
	titulo		=	'$titulo',
	anioTitulo	=	'$anioTitulo',	
	correo 		=	'$correo'

	WHERE id_alumno = '$id_alumno' ";

$resultado = mysqli_query($conexion, $peticion);

if($resultado){
	?>
	<script>
		var id = '<?php echo $id_alumno ?>';
		swal({
		  title: "¡Guardado!",
		  text: "Cambios efectuados en perfil",
		  imageUrl: 'users.png',
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'detalle-egresado.php?id='+id+'';
		}
		});
	</script>
	<?php
}
else{
	?>
	<script>
		var id = '<?php echo $id_alumno ?>';
		swal({
		  title: "Sin Cambios",
		  text: "Error con el servidor, vuelve a intertarlo.",
		  imageUrl: 'database-2.png',
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'detalle-egresado.php?id='+id+'';
		}
		});
	</script>
	<?php

	
}
?>
</body>
</html>