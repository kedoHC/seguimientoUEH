<?php 

include "cabecera.inc";
include "../config/config.inc";

 $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  mysqli_set_charset($conexion, "utf8");

$id = $_GET["id"];

  $peticion = "DELETE FROM casoexito WHERE id_caso = $id ";
  $resultado = mysqli_query($conexion, $peticion);

  if($resultado){
  	?><script>
  	swal({
		  title: "¡Caso de Éxito eliminado!",
		  text: "Elimnado permanentemente del sistema",
		  type: "success",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'casosdeexito.php';
		}
		});
  	</script>
  	<?php
  }
  else{
  	?>
  	<script>
  	swal({
		  title: "¡Caso de Éxito NO eliimnado!",
		  text: "Error en la conexión con la base de datos.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = 'casosdeexito.php';
		}
		});
  	</script>

  	<?php
  }

 ?>