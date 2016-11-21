<?php
include "cabecera.inc";
include "../config/config.inc";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM noticias WHERE id_noticia='".$_GET['id']."'";
$resultado = mysqli_query($conexion, $peticion);
?>

<script src="//code.jquery.com/jquery.js"></script>
<?php
/*include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM alumno";
$resultado = mysqli_query($conexion, $peticion);*/
?>
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
							<div class="opcion active">
								<h3 class="text-center">Noticias</h3>
							</div>
						</a>
						<a href="mensajes.php">
							<div class="opcion">
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
						#nombre-div, #text-1, #pieimg1, #pieimg2, #text-3, #text-5{
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
					</style>
					<div id="contenedor-derecho" class="col-xs-10">
						<div class="row">
							<h1 class="text-center">Editar Noticia</h1>
							<h4 class="text-center" style="color: red;">*NOTA: NINGUNDO DE LOS CAMPOS PUEDE ESTAR VACIO.</h4>
							<p class="text-center" style="color: red;">Verifique las extensiones de las imagenes ya que si no se cumplen se volveran a llenar todos los campos.</p>

							<br><br>

							<div id="nombre-div" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Noticia, 100 carácteres maximo:</h4>
								</div>
								<div class="col-xs-5">
									<?php

									while($fila = mysqli_fetch_array($resultado)){
										echo'
										<form name="formularionoticias" enctype="multipart/form-data" action="actualizarnoticia.php?id='.$fila["id_noticia"].'" method="POST">
										<input name="noticia" maxlength="100" type="text" value="'.$fila["noticia"].'">
										';
									?>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Imagen representativa, 78 X 78 pixeles:</h4>
								</div>
								<div class="col-xs-5">
									<input id="imagen1" name="uploadedfile1" type="file"/>
								</div>
							</div>
							<img src="" alt="">

							<div id="text-1" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Texto de introducción, 200 carácteres maximo:</h4>
								</div>
								<div class="col-xs-5">
									<?php
									echo'
									<textarea name="text1" maxlength="201" cols="48" rows="3">'.$fila["texto1"].'</textarea>
									';

									?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Imagen principal, 576 X 256 pixeles:</h4>
								</div>
								<div class="col-xs-5">
										<input name="uploadedfile2" type="file" />
								</div>
							</div>
							<div  id="pieimg1" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Pie de imagen principal, 100 carácteres maximo.</h4>
								</div>
								<div class="col-xs-5">
								<?php
									echo'
										<input name="pieimg1" maxlength="101" type="text" value="'.$fila["imgpie1"].'" >
									';
								?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Imagen secundaria, 400 X 300 pixeles:</h4>
								</div>
								<div class="col-xs-5">
									<input name="uploadedfile3" type="file" />
								</div>
							</div>
							<div id="pieimg2" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Pie de imagen secundaria, 50 carácteres maximo.</h4>
								</div>
								<div class="col-xs-5">
								<?php
									echo'
									<input name="pieimg2" maxlength="51" type="text" value="'.$fila["imgpie2"].'">
									';
								?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Parrafo 2</h4>
									<h4>Tamaño maximo es de 585 carácteres. Cuentan los espacios en blanco, los puntos, comas y carácteres especiales.</h4>
									<a href="http://www.contarcaracteres.com/" target="_blank">Contador de caracteres.</a>
									<a href=""></a>
								</div>
								<div class="col-xs-6">
									<?php
									echo'
										<textarea name="text2" maxlength="586" cols="60" rows="8">'.$fila["texto2"].'</textarea>
									';
									?>
								</div>
							</div>
							<div id="text-3" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Parrafo 3</h4>
									<h4>Tamaño maximo es de 585 carácteres. Cuentan los espacios en blanco, los puntos, comas y carácteres especiales.</h4>
									<a href="http://www.contarcaracteres.com/" target="_blank">Contador de caracteres.</a>
								</div>
								<div class="col-xs-6">
									<?php
									echo'
										<textarea name="text3" maxlength="586" cols="60" rows="8">'.$fila["texto3"].'</textarea>
									';
									?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Parrafo 4</h4>
									<h4>Tamaño maximo es de 350 carácteres. Cuentan los espacios en blanco, los puntos, comas y carácteres especiales.</h4>
									<a href="http://www.contarcaracteres.com/" target="_blank">Contador de caracteres.</a>
								</div>
								<div class="col-xs-6">
									<?php
									echo'
										<textarea name="text4" maxlength="351" cols="60" rows="8">'.$fila["texto4"].'</textarea>
									';
									?>
								</div>
							</div>
							<div id="text-5" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Parrafo 5</h4>
									<h4>Tamaño maximo es de 585 carácteres. Cuentan los espacios en blanco, los puntos, comas y carácteres especiales.</h4>
									<a href="http://www.contarcaracteres.com/" target="_blank">Contador de caracteres.</a>
								</div>
								<div class="col-xs-6">
									<?php
									echo'
										<textarea name="text5" maxlength="586" cols="60" rows="8">'.$fila["texto5"].'</textarea>
									';
									?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<h4 class="text-center" style="color: red">Es necesario volver a cargar las images del caso de éxito para modificar algunos de los campos. Por cuestiones de seguridad. Disculpa las molestias ocacionadas. Gracias.</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Estado del caso de éxito</h4>
								</div>

								<div class="col-xs-3">
								<?php
								echo '
									<select name="estado">
										<option value="'.$fila["estado"].'">'.$fila["estado"].'</option>
										<option value="Activo1">Activo1</option>
										<option value="Activo2">Activo2</option>
										<option value="Activo3">Activo3</option>
										<option value="Activo4">Activo4</option>
										<option value="Activo5">Activo5</option>
										<option value="Activo6">Activo6</option>
										<option value="Inactivo">Inactivo</option>
									</select>
								';

								 ?>
								</div>
								<div class="col-xs-3" style="border: 1px solid red">
									<h4 class="text-center" style="color:red">Estrictamente solo 6 noticias pueden estar activas en el sitio.</h4>
								</div>
							</div>
							<br><br>
							<div class="row">
								<!-- <div class="col-xs-1"></div>
								<div class="col-xs-11">
									<input class="center-block" type="submit" value="Actualizar caso de éxito" />
									</form>
								</div> -->
								<div class="col-xs-2"></div>
								<div class="col-xs-2"></div>
								<div class="col-xs-2">
									<a href="casosdeexito.php"><img src="../img/user-23.png" width="50%"></a>
								</div>

								<div class="col-xs-2">
									<input id="icono-enviar" type="image" name="imageField" src="../img/user-32.png" width="50%" style="margin-top:0px" />
								</div>

								<div class="col-xs-2">
								<?php
									$id = $fila["id_noticia"];
									echo'
									<a style="cursor: pointer" onclick="confirmar()"><img src="../img/user-22.png" width="50%"></a>
									';
								}//cierre de while de consulta
								?>
								</div>
								<div class="col-xs-2"></div>
							</form>
							</div>
						</div>
					<!-- cierre de divs proncipales -->
					</div><!-- cierre div contenedor derecho -->
				</div>
			</div>
		</div>
		<br><br>

		<script>
		window.onload = function () {
				document.formularionoticias.addEventListener('submit', validarFormulario);
		}
		function confirmar(){

			var id = '<?php echo $id ?>';

			swal({
			  title: "¿Estas seguro?",
			  text: "Se eliminara para siempre la noticia!",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Si, ¡Eliminala!",
			  cancelButtonText: "No, ¡La necesito!",
			  allowEscapeKey: false,
		  	  allowOutsideClick: false,
			  closeOnConfirm: false,
			  closeOnCancel: false
			},
			function(isConfirm) {
			  if (isConfirm) {
			    swal("¡Eliminado!", "La noticia va a ser eliminada.", "success");
			    window.location.href = 'borrar-caso.php?id='+id+'';
			  } else {
			    swal("¡Cancelado!", "Noticia a salvo :)", "error");
			  }
			});
		}
		function validarFormulario(evObject) {
			evObject.preventDefault();
			var todoCorrecto = true;
			var formulario = document.formularionoticias;

			var x = document.formularionoticias.uploadedfile1.value;
			var y = document.formularionoticias.uploadedfile2.value;
			var z = document.formularionoticias.uploadedfile3.value;

			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.noticia.value)==false){
				swal("¡Titulo Incorrecto!", "Caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionoticias.nombrecasoexito.focus();
			}
			if (x == ""){
				swal("¡Img 1 sin seleccionar!", "Se deben subir todas las imagenes sin excepción.", "error");
				todoCorrecto=false;
			}

			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text1.value)==false){
				swal("¡Texto 1 Incorrecto!", "Caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionoticias.text1.focus();
			}
			if (y == ""){
				swal("¡Img 2 sin seleccionar!", "Se deben subir todas las imagenes sin excepción.", "error");
				todoCorrecto=false;
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.pieimg1.value)==false){
				swal("¡Pie imagen 1 Incorrecto!", "Nombre completo, caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionoticias.pieimg1.focus();
			}
			if (z == ""){
				swal("¡Img 3 sin seleccionar!", "Se deben subir todas las imagenes sin excepción.", "error");
				todoCorrecto=false;
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.pieimg2.value)==false){
				swal("¡Pie imagen 2 Incorrecto!", "Nombre completo, caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionoticias.pieimg2.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text2.value)==false){
				swal("¡Texto 2 Incorrecto!", "Nombre completo, caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionoticias.text2.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text3.value)==false){
				swal("¡Texto 3 Incorrecto!", "Nombre completo, caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionoticias.text3.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text4.value)==false){
				swal("¡Texto 4 Incorrecto!", "Nombre completo, caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionoticias.text4.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text5.value)==false){
				swal("¡Texto 5 Incorrecto!", "Nombre completo, caracteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formularionoticias.text5.focus();
			}

			if (todoCorrecto == true) {
				formulario.submit();
			}
		}
		</script>
<?php include "pie.inc"; ?>
