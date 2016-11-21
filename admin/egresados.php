<?php 
include "cabecera.inc"; 
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM alumno";
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
					<!-- Cuerpo de la pagina -->
					<div id="contenedor-derecho" class="col-xs-10">
						<div class="row">
							<h1 class="text-center">Egresados</h1>

							<table class="table table-hover">
							    <thead>
							      <tr>
							        <th>Matricula</th>
							        <th>Nombre</th>
							        <th>Carrera</th>
							        <th>Año</th>
							        <th>E-Mail</th>
							        <th>Acceso</th>
							       
							      </tr>
							    </thead>
							    <?php 
							    while($fila = mysqli_fetch_array($resultado)){
							    	echo"
							    <tbody>
							      <tr>
							        <td>".$fila['matricula']."</td>
							        <td>".$fila['nombre']."</td>
							        <td>".$fila['titulo']."</td>
							        <td>".$fila['anioTitulo']."</td>
							        <td>".$fila['correo']."</td> 
							        <td>".$fila['acceso']."</td>

							        <td><a href='detalle-egresado.php?id=".$fila['id_alumno']."'><img src='../img/user-28.png' width='20%'></a></td>
							      </tr>
							    </tbody>";
							    }
							    ?>
							  </table>
							  
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include "pie.inc"; ?>