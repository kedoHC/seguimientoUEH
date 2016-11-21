<!--
REQUERIMIENTOS DE EVENTOS: 
titulo, 45, solo letras, punto, coma y gato. acentos
texto1, 250, solo letras, punto, coma y gato. acentos
img1 1200x386 tipo text imagen principal
img2 400x300 tipo text imagen secundaria 
img3 368x189 tipo text imagen de introduccion
pieimg1 100 solo letras punto, coma y gato acentos.
pieimg2 50 solo letras punto, coma y gato acentos.
texto2 800 solo letras punto, coma y gato acentos.
texto3 500 solo letras punto, coma y gato acentos.
texto4 500 solo letras punto, coma y gato acentos.
texto5 500 solo letras punto, coma y gato acentos.
lugar  50 solo letras punto, coma y gato acentos. Museo Interactivo de Xalapa MIX
direccion 60 solo letras punto, coma y gato acentos.
fecha formato dd/mm/aaa
hora formato 24 horas
ciudad 50 solo letras punto, coma y gato acentos. xalapa veracruz
telefono 13 digitos.
duracion 1, solo numeros del 1 al 9.
 -->
<?php 
include "cabecera.inc"; 
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM eventos";
$resultado = mysqli_query($conexion, $peticion);
?>
<style>
	#nuevo-evento{
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
							<div class="opcion active">
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
							<div class="col-xs-6">
								<h1 class="text-right">Eventos</h1>
								
							</div>
							<div class="col-xs-6">
								<a href="nuevo-evento.php"><button id="nuevo-evento" class="center-block" type="button">Nuevo Evento</button></a>
								
							</div>		
								<table class="table table-hover">
								    <thead>
								      <tr>
								        <th>Titulo evento</th>
								        <th>Lugar</th>
								        <th>Fecha</th>
								        <th>Hora</th>
								        <th>Telefono</th>
								        <th>Ciudad</th>
								        <th>Estado</th>
								      </tr>
								    </thead>
								    <?php 
								    
								    while($fila = mysqli_fetch_array($resultado)){
								    	
								    	echo"
								    <tbody>
								      <tr>
								        <td>".$fila['titulo']."</td>
								        <td>".$fila['lugar']."</td>
								        <td>".$fila['fecha']."</td>
								        <td>".$fila['hora']."</td>
								        <td>".$fila['telefono']."</td>
								        <td>".$fila['ciudad']."</td>
								        <td>".$fila['estado']."</td>
								        <td><a href='detalle-evento.php?id=".$fila['id_evento']."'><img class='center-block' src='../img/user-28.png' width='10%'></a></td>
								      </tr>
								    </tbody>";
								    }
								    ?>
								  </table>
						</div>
					</div><!-- fin del contenedor derecho -->
				</div>
			</div>
		</div>
<?php include "pie.inc"; ?>