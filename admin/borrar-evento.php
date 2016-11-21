<?php 

include "cabecera.inc";
include "../config/config.inc";

 $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  mysqli_set_charset($conexion, "utf8");

$id = $_GET["id"];

  $peticion = "DELETE FROM eventos WHERE id_evento = $id ";
  $resultado = mysqli_query($conexion, $peticion);

  if($resultado){
  	?><script>
  	swal({
		  title: "¡Evento eliminado!",
		  text: "Elimnado permanentemente del sistema",
		  type: "success",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'eventos.php';
		}
		});
  	</script>
  	<?php
  }
  else{
  	?>
  	<script>
  	swal({
		  title: "¡Evento NO eliimnado!",
		  text: "Error en la conexión con la base de datos.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'eventos.php';
		}
		});
  	</script>

  	<?php
  }

 ?>