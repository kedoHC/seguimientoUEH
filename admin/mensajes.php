<?php
include "cabecera.inc";
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM novedades";
$resultado = mysqli_query($conexion, $peticion);
?>
<style>
	#nuevo-caso{
		border:none;
		color: #fff;
		background-color: #131313;
		padding: 15px;
		font-size: 2rem;
	}
</style>
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
					<div id="contenedor-derecho" class="col-xs-10">
						<div class="row">
							<div class="col-xs-7">
								<h1 class="text-right">Mensajes</h1>
								
							</div>
							<div class="col-xs-5">
								<a href="nuevo-mensaje.php"><button id="nuevo-caso" class="center-block" type="button">Nuevo Mensaje Gral</button></a>
								
							</div>		
								<table class="table table-hover">
								    <thead>
								      <tr>
								        <th>Novedad</th>
								        <th>Texto</th>
								 		<th>Dedicado</th>	
								        <th>Caducidad</th>
								        <th>Detalles</th>
								      </tr>
								    </thead>
								    <?php 
								    
								    while($fila = mysqli_fetch_array($resultado)){
								    	
								    	echo"
								    <tbody>
								      <tr>
								        <td>".$fila['novedad']."</td>
								        <td>".$fila['texto']."</td>
								       	<td>".$fila['dedicado']."</td>
								        <td>".$fila['duracion']."</td>

								        <td><a href='detalle-mensaje.php?id=".$fila['id_novedades']."'><img class='center-block' src='../img/mail-5.png' width='40%'></a></td>
								      </tr>
								    </tbody>";
								    }
								    ?>
								  </table>
						</div>
					</div><!-- contenedor derecho -->
				</div>
			</div>
		</div>
<?php include "pie.inc"; ?>
