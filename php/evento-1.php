<?php include "../config/cabecera-evento.inc"; 
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM eventos WHERE estado='Activo1'";
$resultado = mysqli_query($conexion, $peticion);
$peticion2 = "SELECT titulo, texto1 FROM eventos WHERE estado='Activo2'";
$resultado2 = mysqli_query($conexion, $peticion2);
$peticion3 = "SELECT titulo, texto1 FROM eventos WHERE estado='Activo3'";
$resultado3 = mysqli_query($conexion, $peticion3);
$peticion4 = "SELECT titulo, texto1 FROM eventos WHERE estado='Activo4'";
$resultado4 = mysqli_query($conexion, $peticion4);
?>
<div id="evento" class="container">
	<div class="row">
		<?php
		while ($fila = mysqli_fetch_array($resultado)){ 

		$Base64Img=$fila['img2'];
		list(, $Base64Img) = explode(';', $Base64Img);
		list(, $Base64Img) = explode(',', $Base64Img);
		$Base64Img = base64_decode($Base64Img);
		file_put_contents('../img/temp/evento1-2.png', $Base64Img);

		$Base64Img=$fila['img3'];
		list(, $Base64Img) = explode(';', $Base64Img);
		list(, $Base64Img) = explode(',', $Base64Img);
		$Base64Img = base64_decode($Base64Img);
		file_put_contents('../img/temp/evento1-3.png', $Base64Img);			

		$Base64Img=$fila['img1'];
		list(, $Base64Img) = explode(';', $Base64Img);
		list(, $Base64Img) = explode(',', $Base64Img);
		$Base64Img = base64_decode($Base64Img);
		file_put_contents('../img/temp/evento1-1.png', $Base64Img);	
		echo'
		<div class="col-xs-12">
			<h1>'.$fila["titulo"].'</h1>
			<img class="img-responsive center-block" src="../img/temp/evento1-2.png" alt="congreso 2016">
			<p class="text-center" id="pie-img" >'.$fila["pieimg1"].'</p>
			<p class="text-justify">'.$fila["texto1"].'</p>
			<p id="texto-resaltado" class="text-justify">'.$fila["texto2"].'</p>
			<div class="row">
				<div class="col-xs-12 col-md-5">
					<img class="img-responsive center-block" src="../img/temp/evento1-3.png" alt="congreso euro">
					<p class="text-center" id="pie-img" >'.$fila["pieimg2"].'</p>
				</div>
				<div class="col-xs-12 col-md-7">
					<p class="text-justify">'.$fila["texto3"].'</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<p class="text-justify">'.$fila["texto4"].'</p>
				</div>
				<div class="col-xs-12 col-md-6">
					<p class="text-justify">'.$fila["texto5"].'</p>
				</div>
			</div>
			<div id="informacion" class="row">
				<h1 class="text-center">Información</h1>
				<div class="col-xs-12 col-md-6">
					<img id="mapa" class="img-responsive" src="../img/mapa.png" alt="googlemap">
				</div>
				<div id="info-detalle" class="col-xs-12 col-md-6">
					<h3>Lugar: <span>'.$fila["lugar"].'</span></h3>
					<h3>Dirección: <span>'.$fila["direccion"].'</span></h3>
					<h3>Fecha y Hora: <span>'.$fila["fecha"].'</span><span> a las '.$fila["hora"].' hrs.</span></h3>
					<h3>Ciudad: <span>'.$fila["ciudad"].'</span></h3>
					<h3>Telefono: <span>'.$fila["telefono"].'</span>
					<h3>Duración: <span>'.$fila["duracion"].' dia(s).</span></h3>
				</div>
			</div>
		</div>
	</div>
</div>
<hr>
<div id="mas-eventos">
	<div class="container">
		<div class="row">
		<h1>Eventos UEH</h1>
			<div class="evento col-xs-12 col-sm-6 col-md-4">
				<a href="evento-2.php">
					';
					while ($fila2 = mysqli_fetch_array($resultado2)){
					echo'
					<img class="img-responsive center-block" src="../img/temp/evento2-1.png" alt="imagen-evento">
					<p class="text-center titulo-evento">'.$fila2["titulo"].'</p>
					<p class="text-justify">'.$fila2["texto1"].'</p>
					</a>
				<a href="evento-2.php"><button class="btn btn-default btn-lg btn-block" type="button">Leer Mas</button></a>
					';
					}
					echo'
			</div>
			<div class="evento col-xs-12 col-sm-6 col-md-4">
				<a href="evento-3.php">
					';
					while ($fila3 = mysqli_fetch_array($resultado3)){
					echo'
					<img class="img-responsive center-block" src="../img/temp/evento3-1.png" alt="imagen-evento">
					<p class="text-center titulo-evento">'.$fila3["titulo"].'</p>
					<p class="text-justify">'.$fila3["texto1"].'</p>
					</a>
					<a href="evento-3.php"><button class="btn btn-default btn-lg btn-block" type="button">Leer Mas</button></a>
					';
					}
					echo'
			</div>
			<div class="evento col-xs-12 col-sm-6 col-md-4">
				<a href="evento-4.php">
					';
					while ($fila4 = mysqli_fetch_array($resultado4)){
					echo'
					<img class="img-responsive center-block" src="../img/temp/evento4-1.png" alt="imagen-evento">
					<p class="text-center titulo-evento">'.$fila4["titulo"].'</p>
					<p class="text-justify">'.$fila4["texto1"].'</p>
					</a>
					<a href="evento-4.php"><button class="btn btn-default btn-lg btn-block" type="button">Leer Mas</button></a>
					';
					}
					echo'
			</div>
			';
			}
			 ?>
		</div>
	</div>
</div>
<?php include "../config/pie.inc" ?>