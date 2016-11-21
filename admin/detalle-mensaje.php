<?php
include "cabecera.inc";
include "../config/config.inc";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM novedades WHERE id_novedades='".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);
?>

<script src="//code.jquery.com/jquery.js"></script>

<a href="admin.php">
						<div class="opcion">
								<h3 class="text-center">Inicio</h3>
							</div>
						</a>
						<a href="egresados.php">
							<div class="opcion">
								<h3 class="text-center">Egresados</h3>
							</div>
						</a>
						<a href="casosdeexito.php">
							<div class="opcion">
								<h3 class="text-center">Casos de Exito</h3>
							</div>
						</a>
						<a href="eventos.php">
							<div class="opcion">
								<h3 class="text-center">Eventos</h3>
							</div>
						</a>
						<a href="noticias.php">
							<div class="opcion">
								<h3 class="text-center">Noticias</h3>
							</div>
						</a>
						<a href="mensajes.php">
							<div class="opcion active">
								<h3 class="text-center">Mensajes</h3>
							</div>
						</a>
						<a href="salir.php">
							<div class="opcion">
								<h3 class="text-center">Salir</h3>
							</div>
						</a>
					</div>
					<style>
						#seleccionar{
							background-color: #eee;
							padding-top: 10px;
							padding-bottom: 10px;
						}
						#seleccionar input{
							border: none;
							background-color: #131313;
							color: #fff;
							padding: 10px;
							width: 480px;
							margin-top: 5px;
						}
						#titulo, #dedicado{
							background-color: #eee;
						}
						input{
							margin-top: 7px;
						}
						input[type="text"]{
							width: 300px;
						}
						input[type="submit"]{
							border: none;
							padding: 15px;
							color: #fff;
							font-size: 2rem;
							background-color: #131313;
						}
						select[name="estado"]{
							padding: 10px;
							background-color: #b71414;
							color: #fff;
							font-size: 2rem;
						}
						#opciones-novedades{
							margin-top: 50px;
						}
					</style>
					<div id="contenedor-derecho" class="col-xs-10">
						<div class="row">
							<h1 class="text-center">Editar Mensaje</h1>
							<h4 class="text-center" style="color: red;">*NOTA: NINGUNDO DE LOS CAMPOS PUEDE ESTAR VACIO.</h4>
							<?php 
								while($fila = mysqli_fetch_array($resultado)){
									echo'
							<form name="formularionovedades" enctype="multipart/form-data" action="actualizarnovedad.php?id='.$fila["id_novedades"].'" method="POST">

							<div id="titulo" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Titulo del mensaje</h4>	
									<h4>Tamaño maximo de 150 caracteres. Cunetan los espacios en blanco, los puntos, comas y caracteres especiales.</h4>
								</div>
								<div class="col-xs-6">
									<input name="titulo" type="text" value="'.$fila["novedad"].'">
								</div>
							</div>							
							<div id="texto" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Texto del mensaje</h4>
									<h4>Tamaño maximo es de 500 carácteres. Cuentan los espacios en blanco, los puntos, comas y caracteres especiales.</h4>
								</div>
								<div class="col-xs-6">
										<textarea name="text" maxlength="500" cols="60" rows="8">'.$fila["texto"].'</textarea>
								</div>
							</div>

							<div id="dedicado" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Caducidad</h4>	
									<h4>Formato: dd/mm/aaaa.</h4>
								</div>
								<div class="col-xs-6">
									<input name="duracion" type="int" value="'.$fila["duracion"].'">
								</div>
							</div>

							<div id="opciones-novedades" class="row">
								<div class="col-xs-4">
									<a href="mensajes.php"><img class="img-responsive center-block" src="../img/mail.png" width="20%"></a>
								</div>
								<div class="col-xs-4">
									<input class="center-block" id="icono-enviar" type="image" name="imageField" src="../img/mail-9.png" width="20%" style="margin-top:0px" />
								</div>
								<div class="col-xs-4">
									<a style="cursor: pointer" onclick="confirmar()"><img class="center-block" src="../img/envelope-2.png" width="20%"></a>
								</div>
							</div>


							</form>
							';
							$id = $fila["id_novedades"];
							}
							?>
							<!-- cierre de divs proncipales -->
					</div><!-- cierre div contenedor derecho -->
				</div>
			</div>
		</div>
		<br><br>

		<script>
		window.onload = function () {
				document.formularionovedades.addEventListener('submit', validarFormulario);
		}
		function confirmar(){

			var id = '<?php echo $id ?>';

			swal({
			  title: "¿Estas seguro?",
			  text: "Se eliminara para siempre el mensaje!",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Si, ¡Eliminalo!",
			  cancelButtonText: "No, ¡Lo necesito!",
			  allowEscapeKey: false,
		  	  allowOutsideClick: false,
			  closeOnConfirm: false,
			  closeOnCancel: false
			},
			function(isConfirm) {
			  if (isConfirm) {
			    swal("¡Eliminado!", "Eliminando mensaje.", "success");
			    window.location.href = 'borrar-mensaje.php?id='+id+'';
			  } else {
			    swal("¡Cancelado!", "Mensaje a salvo :)", "error");
			  }
			});
		}
		function validarFormulario(evObject) {
			evObject.preventDefault();
			var todoCorrecto = true;
			var formulario = document.formularionovedades;


			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.titulo.value)==false){
				swal("¡Titulo Incorrecto!", "Caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionovedades.titulo.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text.value)==false){
				swal("¡Texto Incorrecto!", "Caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionovedades.text.focus();
			}
			if (/^\d{1,2}\/\d{1,2}\/\d{2,4}$/.test(formulario.duracion.value)==false){
					swal("¡Fecha Incorrecta!", "Sigue el formato dd/mm/aaaa", "error");
					todoCorrecto=false;
					document.formularionovedades.duracion.focus();
				}
			if (todoCorrecto == true) {
				formulario.submit();
			}
		}
		</script>
<?php include "pie.inc"; ?>
