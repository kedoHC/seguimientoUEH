<?php
session_start();
if(!isset($_SESSION["sesion-admin"])){
  echo ("Es necesario iniciar session, redireccionando...");
  print "<META HTTP-EQUIV='Refresh' CONTENT='2; URL=http://localhost/seguimiento/admin/admin-log.php'>";
  exit;
}
?>
<?php 
include "cabecera.inc";
include "../config/config.inc"; 

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM alumno";
$resultado = mysqli_query($conexion, $peticion);
$usuarios_cantidad = mysqli_num_rows($resultado);

$peticion1 = "SELECT * FROM aplicantes";
$resultado1 = mysqli_query($conexion, $peticion1);
$aplicantes_cantidad = mysqli_num_rows($resultado1);


?>
						<a href="admin.php">
							<div class="opcion active">
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
					<!-- Cuerpo de la pagina -->
					<div id="contenedor-derecho" class="col-xs-10">
						<div class="row">
							<h1 class="text-center">Datos generales del sistema</h1>


							<div id="cuadro-datos-1" class="cuadro-datos col-xs-3">
								<img class="center-block" src="../img/user-20.png" alt="usuario-alta" width="80%">
								<p class="datos text-center"><?php echo $aplicantes_cantidad ?> egresado(s) han solicitado entrar al sistema.</p>
								<a id="btn-cuadro-1" href="aplicantes.php"><button class=" btn btn-primary btn-block">Ver peticiones</button></a>
							</div>


							<div id="cuadro-datos-2" class="cuadro-datos col-xs-3">
								<img class="center-block" src="../img/user-23.png" alt="usuario-alta" width="80%">
								<p class="datos text-center"><?php echo $usuarios_cantidad ?> egresados registrados en el sistema.</p>
								<a id="btn-cuadro-2" href="egresados.php"><button class=" btn btn-success btn-block">Ver listado</button></a>
								
							</div>
							<div id="cuadro-datos-3" class="cuadro-datos col-xs-3">
								<img class="center-block" src="../img/user-22.png" alt="usuario-alta" width="80%">
								<p class="datos text-center">2 egresado(s) han solicitado salir del sistema.</p>
								<a id="btn-cuadro-3" href=""><button class=" btn btn-danger btn-block">Consultar</button></a>
								
							</div>
							<div id="cuadro-datos-4" class="cuadro-datos col-xs-3">
								<img class="center-block" src="../img/user-39.png" alt="usuario-alta" width="80%">
								<p class="datos text-center">15 egresados por confrimar por correo electronico.</p>
								<a id="btn-cuadro-4" href=""><button class=" btn btn-warning btn-block">Ver</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "pie.inc"; ?>