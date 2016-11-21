<?php
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  mysqli_set_charset($conexion, "utf8");

$peticion5 = "SELECT titulo, texto1 FROM eventos WHERE estado = 'Activo1'";
  $resultado5 = mysqli_query($conexion, $peticion5);

  $peticion6 = "SELECT titulo, texto1 FROM eventos WHERE estado = 'Activo2'";
  $resultado6 = mysqli_query($conexion, $peticion6);

  $peticion7 = "SELECT titulo, texto1 FROM eventos WHERE estado = 'Activo3'";
  $resultado7 = mysqli_query($conexion, $peticion7);

 

  while($fila5 = mysqli_fetch_array($resultado5)){
    $titulo1 = $fila5["titulo"];
    $texto1 = $fila5["texto1"];
  }
while($fila6 = mysqli_fetch_array($resultado6)){
  $titulo2 = $fila6["titulo"];
  $texto2 = $fila6["texto1"];
}
while($fila7 = mysqli_fetch_array($resultado7)){
  $titulo3 = $fila7["titulo"];
  $texto3 = $fila7["texto1"];
}

?>
<a href="evento-1.php">
<h2><?php echo $titulo1; ?></h2>
<p class="text-justify"><?php echo $texto1; ?></p>
</a>
<a href="evento-1.php"><button class="btn btn-default btn-lg" type="button">Leer Mas</button></a>
<hr>
<a href="evento-1.php">
<h2><?php echo $titulo2; ?></h2>
<p class="text-justify"><?php echo $texto2; ?></p>
</a>
<a href="evento-2.php"><button class="btn btn-default btn-lg" type="button">Leer Mas</button></a>
<hr>
<a href="evento-1.php">
<h2><?php echo $titulo3; ?></h2>
<p class="text-justify"><?php echo $texto3; ?></p>
</a>
<a href="evento-3.php"><button class="btn btn-default btn-lg" type="button">Leer Mas</button></a>