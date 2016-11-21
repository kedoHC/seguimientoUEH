<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="../js/sweetalert.js"></script>
    <link rel="stylesheet" href="../css/sweetalert.css">
</head>
<style type="text/css" media="screen">
	body{
	background-image: url("../img/soyeuro4.png");
	    background-size: 500px, 450px;
	}	
</style>
<body>
<?php 

include "../config/config.inc";

$nombre 		=	$_POST['nombre-egresado'];
$matricula 		= 	$_POST['matricula-egresado'];
$titulo 		=	$_POST['titulo-egresado'];
$anio_egreso 	=	$_POST['anio-egreso'];
$telefono 		=	$_POST['telefono-egresado'];
$correo 		=	$_POST['correo-egresado'];
$fecha_nac 		= 	$_POST['fecha-nac-egresado'];
$lugar_nac 		=	$_POST['lugar-nac-egresado'];
$sexo 			=	$_POST['sexo'];


$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "INSERT INTO alumno (nombre, matricula, titulo, anioTitulo, telefono, correo, fechaNac, lugarNac, sexo) VALUES(
	'$nombre', '$matricula', '$titulo', '$anio_egreso', '$telefono', '$correo', '$fecha_nac', '$lugar_nac', '$sexo')";

$resultado = mysqli_query($conexion, $peticion);

if($resultado){
	?>
	<script>
		swal({   title: "Are you sure?",   text: "You will not be able to recover this imaginary file!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes, delete it!",   cancelButtonText: "No, cancel plx!",   closeOnConfirm: false,   closeOnCancel: false }, function(isConfirm){   if (isConfirm) {     swal("Deleted!", "Your imaginary file has been deleted.", "success");   } else {     swal("Cancelled", "Your imaginary file is safe :)", "error");   } });
	</script>
	<?php
}
else{
	?>
	<script>
		sweetAlert({
		 		title: "¡Error en el envio!", 
			    text: "Vuelve a intentarlo por favor. ¡Gracias!", 
			    type: "warning",
			    allowEscapeKey: false,
			    allowOutsideClick: false
			 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'form-alta-egresado.php';
			}
		});
	</script>
	<?php
}
mysqli_close($conexion);
?>
</body>
</html>