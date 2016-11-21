<!-- requerimientos de cada caso de exito:
	index:

	nombre: 36 caracteres.
	texto: 200 caracteres.
	img del index : 262 X 160 pixeles, formato png o jpg.
	img 1 de caso de exito : 576 X 256 pixeles, formato png o jpg
		Pie de imagen 1: 100 carácteres
	img 2 de caso de exito: 400 x 300 px png o jpg
		Pie de imagen 2: 50 carácteres

	Parrafos:	2 de 585 carácteres,
				1 de 350 carácteres y
				1 de 585 carácteres.
 -->
 <script src="//code.jquery.com/jquery.js"></script>
<?php 
include "cabecera.inc"; 
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
							<div class="opcion active">
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
							<h1 class="text-center">Nuevo Caso de Éxito</h1>
							<h4 class="text-center" style="color: red;">*NOTA: NINGUNDO DE LOS CAMPOS PUEDE ESTAR VACIO.</h4>
							<p class="text-center" style="color: red;">Verifique las extensiones de las imagenes ya que si no se cumplen, se tendran que llenar todos los campos de nuevo.</p>
							<br><br>
							<form name="formulariocasoexito" enctype="multipart/form-data" action="subircasoexito.php" method="POST">
							<div id="nombre-div" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Nombre, 36 carácteres maximo:</h4>
								</div>
								<div class="col-xs-5">
									<input name="nombrecasoexito" maxlength="37" type="text">
								</div>
							</div>

							<div class="row">
								<div class="col-xs-1"></div>	
								<div class="col-xs-6">
									<h4>Imagen personal, 262 X 160 pixeles:</h4>
								</div>
								<div class="col-xs-5">
									<input id="imagen1" name="uploadedfile1" type="file" />
								</div>	
							</div>
							<img src="" alt="">

							<div id="text-1" class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-6">
									<h4>Texto de introducción, 200 carácteres maximo:</h4>
								</div>
								<div class="col-xs-5">
									<textarea name="text1" maxlength="201" cols="48" rows="3"></textarea>
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
									<input name="pieimg1" maxlength="101" type="text">
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
									<input name="pieimg2" maxlength="51" type="text">
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
									<textarea name="text2" maxlength="586" cols="60" rows="8"></textarea>
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
									<textarea name="text3" maxlength="586" cols="60" rows="8"></textarea>
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
									<textarea name="text4" maxlength="351" cols="60" rows="8"></textarea>
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
									<textarea name="text5" maxlength="586" cols="60" rows="8"></textarea>
								</div>
							</div>
							<br><br>
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-5">
									<h4>Estado del caso de éxito</h4>
								</div>

								<div class="col-xs-3"> 
									<select name="estado">
										<option value="Inactivo">Inactivo</option>
										<option value="Activo1">Activo1</option>
										<option value="Activo2">Activo2</option>
										<option value="Activo3">Activo3</option>
										<option value="Activo4">Activo4</option>
										
									</select>	
								</div>
								<div class="col-xs-3" style="border: 1px solid red">
									<h4 class="text-center" style="color:red">Estrictamente solo 4 articulos pueden estar activos en el sitio.</h4>
								</div>
							</div>
							
							<br><br>
							<div class="row">
								<div class="col-xs-1"></div>
								<div class="col-xs-11">
									<input class="center-block" type="submit" value="Crear nuevo caso de éxito" />
									</form>
								</div>
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
				document.formulariocasoexito.addEventListener('submit', validarFormulario);
		}
		function validarFormulario(evObject) {
			evObject.preventDefault();
			var todoCorrecto = true;
			var formulario = document.formulariocasoexito;

			var x = document.formulariocasoexito.uploadedfile1.value;
			var y = document.formulariocasoexito.uploadedfile2.value;
			var z = document.formulariocasoexito.uploadedfile3.value;

			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.nombrecasoexito.value)==false){
				swal("¡Nombre Incorrecto!", "Nombre completo, carácteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formulariocasoexito.nombrecasoexito.focus();
			}
			if (x == ""){
				swal("¡Img 1 sin seleccionar!", "Se deben subir todas las imagenes sin excepción.", "error");
				todoCorrecto=false;
			}

			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text1.value)==false){
				swal("¡Texto de introducción Incorrecto!", "Carácteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formulariocasoexito.text1.focus();
			}
			if (y == ""){
				swal("¡Img 2 sin seleccionar!", "Se deben subir todas las imagenes sin excepción.", "error");
				todoCorrecto=false;
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.pieimg1.value)==false){
				swal("¡Pie imagen 1 Incorrecto!", "Nombre completo, carácteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formulariocasoexito.pieimg1.focus();
			}
			if (z == ""){
				swal("¡Img 3 sin seleccionar!", "Se deben subir todas las imagenes sin excepción.", "error");
				todoCorrecto=false;
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.pieimg2.value)==false){
				swal("¡Pie imagen 2 Incorrecto!", "Nombre completo, carácteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formulariocasoexito.pieimg2.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text2.value)==false){
				swal("¡Texto 2 Incorrecto!", "Nombre completo, carácteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formulariocasoexito.text2.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text3.value)==false){
				swal("¡Texto 3 Incorrecto!", "Nombre completo, carácteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formulariocasoexito.text3.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text4.value)==false){
				swal("¡Texto 4 Incorrecto!", "Nombre completo, carácteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formulariocasoexito.text4.focus();
			}
			if (/^\S[a-zA-Z0-9\sñáéíóúÑÁÉÍÓÚ,.""()]+$/.test(formulario.text5.value)==false){
				swal("¡Texto 5 Incorrecto!", "Nombre completo, carácteres especiales solo: coma, punto, comillas y parentesis.", "error");
				todoCorrecto=false;
				document.formulariocasoexito.text5.focus();
			}

			if (todoCorrecto == true) {
				formulario.submit();
			}
		}
		</script>
<?php include "pie.inc"; ?>

		