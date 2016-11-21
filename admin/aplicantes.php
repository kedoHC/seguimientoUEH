<?php
include "cabecera.inc";
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM aplicantes";
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
							<h1 class="text-center">Aplicantes</h1>

							<table class="table table-hover">
							    <thead>
							      <tr>
							        <th>Nombre</th>
							        <th>Matricula</th>
							        <th>Carrera</th>
							        <th>Email</th>
							        <th>Año egreso</th>
							        
							      </tr>
							    </thead>
							    <?php 
							    while($fila = mysqli_fetch_array($resultado)){
							    	echo"
							    	<form action='subir-aplicante.php?id=".$fila['id_aplicante']."' method='POST'>
							    <tbody>
							      <tr>
							        <td><input type='text' name='nombre' value='".$fila['nombre_aplica']."'></td>
							        <td><input type='text' name='matricula' value='".$fila['matricula_aplica']."'></td>
							        <td><input type='text' name='carrera' value='".$fila['carrera_aplica']."'></td>
							        <td><input type='text' name='email' value='".$fila['email_aplica']."'></td>
							        <td><input type='text' name='anio' value='".$fila['anio_aplica']."'></td>
							        <td><input class='btn btn-primary' type='submit' value='Subir'</td>
							        </form>
							        <td><a href='borrar-aplicante.php?id=".$fila['id_aplicante']."'><button class='btn btn-danger'>Borrar</button></a></td>
							      </tr>
							    </tbody>
							    
							    ";
							    }
							    ?>
							  </table>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include "pie.inc"; ?>
