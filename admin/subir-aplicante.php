<?php 

include "cabecera.inc";
include "../config/config.inc";

 $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  mysqli_set_charset($conexion, "utf8");

$id = $_GET["id"];
$usuario = $_POST["email"];
$contra = password_hash($usuario,  PASSWORD_DEFAULT, ['cost' => 10]); 
$nombre = $_POST["nombre"];
$matricula = $_POST["matricula"];
$carrera = $_POST["carrera"];
$email = $_POST["email"];
$anio = $_POST["anio"];
$acceso = 0;

  $peticion = "INSERT INTO alumno (usuario_alumno, contra_alumno, nombre, matricula, titulo, anioTitulo, correo, acceso) VALUES ( '".$usuario."', '".$contra."', '".$nombre."', '".$matricula."', '".$carrera."', 	'".$anio."', '".$email."', '".$acceso."' )";
  
  $resultado = mysqli_query($conexion, $peticion);

  $peticion2 = "DELETE FROM aplicantes WHERE id_aplicante = $id ";
  $resultado2 = mysqli_query($conexion, $peticion2);

  if($resultado && $resultado2){
  	?><script>
  	swal({
		  title: "¡Alta de Aplicante Exitosa!",
		  text: "Nuevo usuario creado.",
		  type: "success",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'aplicantes.php';
		}
		});
  	</script>
  	<?php
  }
  else{
  	?>
  	<script>
  	swal({
		  title: "¡El alta de aplicante fallo =(!",
		  text: "Error en la conexión con la base de datos.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'aplicantes.php';
		}
		});
  	</script>

  	<?php
  }

 ?>