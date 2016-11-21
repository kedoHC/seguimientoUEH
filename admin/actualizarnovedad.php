<?php
include "../config/config.inc";
include "cabecera.inc";

		$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
		mysqli_set_charset($conexion, "utf8");

		$id_novedades = $_GET['id'];
		$novedad = $_POST['titulo'];
		$texto = $_POST['text'];
		$dedicado = 0;
		$duracion = $_POST['duracion'];


		$peticion = " UPDATE novedades SET 
			novedad = '$novedad',
			texto = '$texto',
			dedicado = '$dedicado',
			duracion = '$duracion'

 		WHERE id_novedades = '$id_novedades';

		";
		$resultado = mysqli_query($conexion, $peticion);

			if($resultado){
				?>
				<script type="text/javascript">
					swal({
						  title: "¡Mensaje actualizado!",
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
					  text: "Cambios NO realizados en el mensaje",
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
			}/*else{
			?>
			<script type="text/javascript">
				swal({
				  title: "¡Error!",
				  text: "Cambios NO guardados. Error del servidor",
				  type: "error",
				  allowEscapeKey: false,
				  allowOutsideClick: false
				 },
				function (confirmado) {
					if(confirmado){
						window.location.href = 'mensajes.php';
				}
				});
			</script>*/
			/*<?php	
		}*/
?>