<?php 

include "cabecera.inc";
include "../config/config.inc";

 $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  mysqli_set_charset($conexion, "utf8");

$id = $_GET["id"];

  $peticion = "DELETE FROM novedades WHERE id_novedades = $id ";
  $resultado = mysqli_query($conexion, $peticion);

  if($resultado){
  	?><script>
  	swal({
		  title: "¡Mensaje eliminado!",
		  text: "Elimnado permanentemente del sistema",
		  type: "success",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'mensajes.php';
		}
		});
  	</script>
  	<?php
  }
  else{
  	?>
  	<script>
  	swal({
		  title: "¡Mensaje NO eliimnado!",
		  text: "Error en la conexión con la base de datos.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'mensajes.php';
		}
		});
  	</script>

  	<?php
  }

 ?>