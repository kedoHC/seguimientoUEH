<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="../js/sweetalert.js"></script>
    <link rel="stylesheet" href="../css/sweetalert.css">
</head>
<body>
<?php 
$id_alumno =$_GET['id'];
$nombre = $_POST['nombre'];
$matricula = $_POST['matricula'];
$titulo = $_POST['titulo'];
$anioTitulo = $_POST['anioTitulo'];
$correo = $_POST['correo'];
$user = $_POST['usuario_alumno'];


if(!preg_match("/^\S[a-zA-Z\sñáéíóú]{2,50}$/",$nombre)){
	?>
	<script>
		var id = '<?php echo $id_alumno ?>';
		swal({
		  title: "¡Error!",
		  text: "Nombre completo, sin números o carácteres especiales.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'config-user.php?id='+id+'';
		}
		});
	</script>
	<?php
	exit;
}
if(!preg_match("/^[a-zA-Z]{2}\d{4}[a-zA-Z]{2}\d{3}$/", $matricula)){
	?>
	<script>
		var id = '<?php echo $id_alumno ?>';
		swal({
		  title: "¡Error!",
		  text: "Matricula incorrecta seguir formato EH1234SC123",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'config-user.php?id='+id+'';
		}
		});
	</script>
	<?php
	exit;
}
if(!preg_match("/^\S[a-zA-Z\sñáéíóú]{2,60}$/", $titulo)){
	?>
	<script>
		var id = '<?php echo $id_alumno ?>';
		swal({
		  title: "¡Error!",
		  text: "Bien escrito, sin números o carácteres especiales.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'config-user.php?id='+id+'';
		}
		});
	</script>
	<?php
	exit;
}
if(!preg_match("/^\d{4}$/", $anioTitulo)){
	?>
	<script>
		var id = '<?php echo $id_alumno ?>';
		swal({
		  title: "¡Error!",
		  text: "Ejemplo: 2016, sin carácteres especiales o letras.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'config-user.php?id='+id+'';
		}
		});
	</script>
	<?php
	exit;
}
if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/", $correo)){
	?>
	<script>
		var id = '<?php echo $id_alumno ?>';
		swal({
		  title: "¡Error!",
		  text: "E-mail no valido, ejemplo: segumiento_2016@ueh.com",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'config-user.php?id='+id+'';
		}
		});
	</script>
	<?php
	exit;
}


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
	correo 		=	'$correo',
	usuario_alumno = '$user'

	WHERE id_alumno = '$id_alumno' ";

$resultado = mysqli_query($conexion, $peticion);

if($resultado){
	?>
	<script>
		var id = '<?php echo $id_alumno ?>';
		swal({
		  title: "¡Guardado!",
		  text: "Cambios efectuados en perfil",
		  type: "success",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'config-user.php?id='+id+'';
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
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'config-user.php?id='+id+'';
		}
		});
	</script>
	<?php
}
?>
</body>
</html>