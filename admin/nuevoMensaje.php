<?php
include "../config/config.inc";
include "cabecera.inc";

		$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
		mysqli_set_charset($conexion, "utf8");

		$novedad = $_POST['titulo'];
		$texto = $_POST['text'];
		$dedicado = 0;
		$duracion = $_POST['duracion'];

		$peticion = "INSERT INTO  novedades VALUES(
			NULL,
			'".$novedad."',
			'".$texto."',
			'".$dedicado."',
			'".$duracion."'
			)";
		$resultado = mysqli_query($conexion, $peticion);

			if($resultado){
				?>
				<script type="text/javascript">
					swal({
						  title: "¡Se ha creado y mandado nuevo mensaje!",
						  text: "Muy buen trabajo!!! =)",
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
				<script type="text/javascript">
					swal({
					  title: "¡Error!",
					  text: "Mensaje NO creado, vuelve a intentarlo.",
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