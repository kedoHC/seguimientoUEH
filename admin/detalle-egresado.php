<script src="//code.jquery.com/jquery.js"></script>
<?php 
include "cabecera.inc"; 
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$id_alumno = $_GET['id'];

$peticion = "SELECT * FROM alumno WHERE id_alumno=$id_alumno";
$resultado = mysqli_query($conexion, $peticion);
?>
<a href="admin.php">
							<div class="opcion">
								<h3 class="text-center">Inicio</h3>
							</div>
						</a>
						<a href="egresados.php">
							<div class="opcion active">
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
					<div id="contenedor-derecho" class="col-xs-10">
						<div class="row">
						<h1 class="text-center">Perfil del alumno</h1>
						<style>
							input{
								 background: #fff url(../img/overlay.png) repeat;
								border: none;
								padding: 10px;
								width: 700px;
								font-size: 2rem;
							}
							input:hover{
								background-color: #131313;
								color: #fff;
							}
							#nombre, #matricula{
								text-transform: uppercase;
							}
							
							#nombre, #matricula, #titulo, #anioTitulo, #correo{
								width: 600px;
							}
							#lugarNac, #fechaNac, #rfc, #sexo, #telefono, #facebook, #usuario_alumno, #contra_alumno{
								width: 200px;
							}
							#direccion{
								width:790px;
							}
							#icono-enviar{
								width: 65%;
								padding-top: 0px;
								border: none;
							}
							#icono-enviar:hover{
								background-color: #fff;
							}
							#secreto{
								display: none;
							}
						</style>
						<?php 
							while($fila = mysqli_fetch_array($resultado)){

								echo'
								<form name="formularioEgresado" action="editar-egresado.php?id='.$fila["id_alumno"].'" method="POST">
									<div class="col-xs-4">
										<img class="center-block" src="users.png" alt="foto" width="60%" />
									</div>
									<div class="col-xs-8">
										<input type="text" maxlength="60" id="nombre" name="nombre" value="'.$fila["nombre"].'" placeholder="Nombre de egresado">
										<input type="text" maxlength="11" id="matricula" name="matricula" value="'.$fila["matricula"].'" placeholder="Matricula">
										<input type="text" id="titulo" name="titulo" value="'.$fila["titulo"].'" placeholder="Titulo">
										<input type="text" id="anioTitulo" name="anioTitulo" value="'.$fila["anioTitulo"].'" placeholder="Año de titulación">
										<input type="text" id="correo" name="correo" value="'.$fila["correo"].'" placeholder="Email">
										<br><br>
									</div>
									<br>
									<div class="row">
										<div class="col-xs-1"></div>
										<div class="col-xs-11">
											<button class="btn btn-danger" id="mostrar-oculto" type="button">Ver mas...</button>
										</div>
									</div>
									<div id="secreto" class="row">
										<div class="col-xs-1"></div>
										<div class="col-xs-5">
											<label for="usuario_alumno">Usuaio:</label>
										  	<input type="text" name="usuario_alumno" id="usuario_alumno" value="'.$fila["usuario_alumno"].'">
										</div>

										<div class="col-xs-6">
											<label for="contra_alumno">Contraseña:</label>
										  	<input type="text" name="contra_alumno" id="contra_alumno" value="'.$fila["contra_alumno"].'">
										</div>
									</div>
									<br><br>

									<div class="row">
										<div class="col-xs-1"></div>
										<div class="col-xs-2">
											<a href="mensaje-egresado.php?id='.$fila['id_alumno'].'"><img src="../img/email-1.png" width="45%"></a>
										</div>
										<div class="col-xs-2">
											<a href="egresados.php"><img src="../img/user-23.png" width="50%"></a>
										</div>

										<div class="col-xs-2">
											<input id="icono-enviar" type="image" name="imageField" src="../img/user-32.png" />
										</div>

										<div class="col-xs-2">
											<a href="eliminar-egresado.php?id='.$fila['id_alumno'].'"><img src="../img/user-22.png" width="50%"></a>
										</div>
										<div class="col-xs-2">
											<a href="detalle-egresado.php?id='.$fila['id_alumno'].'"><img src="../img/user-36.png" width="50%"></a>
										</div>
										
									</div>
									</form>
									<br><br>
								';
							}
						 ?>
						</div>

					</div>
				</div>
			</div>
		</div>
		<script> 
			$(document).ready(function(){
				$('#mostrar-oculto').click(function(){
					 var valor = document.getElementById("mostrar-oculto").innerHTML;
					 if (valor == 'Ver mas...'){
					 	valor = 'Ver menos...';
					 }else if(valor == 'Ver menos...'){
					 	valor = 'Ver mas...';
					 }
					$('#secreto').toggle();
					$('#mostrar-oculto').text(valor);
				});
			});
			window.onload = function () {
				document.formularioEgresado.addEventListener('submit', validarFormulario);
			}
			function validarFormulario(evObject) {
				evObject.preventDefault();
				var todoCorrecto = true;
				var formulario = document.formularioEgresado;
				if (/^\S[a-zA-Z\sñáéíóú]{2,50}$/.test(formulario.nombre.value)==false){
					swal("¡Nombre Incorrecto!", "Nombre completo, sin números o carácteres especiales", "error");
					todoCorrecto=false;
					document.formularioEgresado.nombre.focus();
				}
				if (/^[a-zA-Z]{2}\d{4}[a-zA-Z]{2}\d{3}$/.test(formulario.matricula.value)==false ) {
					swal("¡Matricula incorrecta!", "Seguir formato EH1234SC123", "error");
					todoCorrecto=false;
					document.formularioEgresado.matricula.focus();
				}
				if (/^\S[a-zA-Z\sñáéíóú]{2,60}$/.test(formulario.titulo.value)==false){
					swal("¡Titulo Incorrecto!", "Bien escrito, sin números o carácteres especiales", "error");
					todoCorrecto=false;
					document.formularioEgresado.titulo.focus();
				}
				if (/^\d{4}$/.test(formulario.anioTitulo.value)==false){
					swal("¡Año de egreso Incorrecto!", "Ejemplo: 2016, sin carácteres especiales o letras", "error");
					todoCorrecto=false;
					document.formularioEgresado.anioTitulo.focus();
				}
				if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(formulario.correo.value)==false){
					swal("¡E-mail no valido!", "Ejemplo: segumiento_2016@ueh.com", "error");
					todoCorrecto=false;
					document.formularioEgresado.correo.focus();
				}
				if (todoCorrecto == true) {
					formulario.submit();
				}

			}
		</script>
<?php include "pie.inc"; ?>

<!-- Restricciones para los campos de texto:

Nombre:
	1.- No debe tener espacio en blanco al inicio del nombre
	2.- Aceptar acentos
	3.- Debe teber al menos 2 letras y maximo 50 caracteres (incluyendo espacios en blanco).
	4.- Solo se pueden ingresar letras, NO NUMERO NI CARACTERES ESPECIALES.(JS)


Lugar de nacimiento:
	1.- Sin espacion en blanco al principio
	2.- Seguir el fomrato: Ciudad, Estado.
	3.- Se ha dejado la posibilidad de ingresar estados y ciudades de maximo 35 caracteres.
	4.- Acepta ecentos
	5.- Sin caracteres especiales.(SOLO LA COMA(,)).
	6.- De momento solo ciudades y estados mexicanos.

 -->