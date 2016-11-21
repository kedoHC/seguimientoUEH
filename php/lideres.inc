<?php

$peticion4 = "SELECT nombre_caso, texto1, estado FROM casoexito WHERE estado = 'Activo1' || estado = 'Activo2' ||estado = 'Activo3' || estado = 'Activo4' ";
$resultado4 = mysqli_query($conexion, $peticion4);

while($fila4 = mysqli_fetch_array($resultado4)){
  if($fila4["estado"] == 'Activo1'){

    $nombre_caso1 = $fila4["nombre_caso"];
    $texto1 = $fila4["texto1"];
  }
  if($fila4["estado"] == 'Activo2'){

    $nombre_caso2 = $fila4["nombre_caso"];
    $texto2 = $fila4["texto1"];
  }
  if($fila4["estado"] == 'Activo3'){

    $nombre_caso3 = $fila4["nombre_caso"];
    $texto3 = $fila4["texto1"];
  }
  if($fila4["estado"] == 'Activo4'){

    $nombre_caso4 = $fila4["nombre_caso"];
    $texto4 = $fila4["texto1"];
  }
}
 ?>
<div id="lideres-noticia">
  <div class="lideres-noticia container">
    <div class="row">
      <h1 class="text-center">Casos de Éxito</h1>
      <div class="col-xs-12 col-md-3 col-sm-6 seccion-lider">
      <a href="caso-exito-1.php">
        <img class="img-responsive img-thumbnail center-block" src="../img/temp/fotolider1.png" alt="lider euro">
        <p class="text-center"><?php echo $nombre_caso1 ?></p>
        <p class="text-justify"><?php echo $texto1 ?></p>
      </a>
        <a href="caso-exito-1.php"><button class="center-block btn btn-default btn-lg hidden-xs" type="button">Leer mas</button></a>
        <a href="caso-exito-1.php"><button class="center-block btn btn-default btn-block visible-xs" type="button">Leer mas</button></a>
      </div>

      <div class="col-xs-12 col-md-3 col-sm-6 seccion-lider">
      <a href="caso-exito-2.php">
        <img class="img-responsive img-thumbnail center-block" src="../img/temp/fotolider2.png" alt="lider euro">
        <p class="text-center"><?php echo $nombre_caso2 ?></p>
        <p class="text-justify"><?php echo $texto2 ?></p>
      </a>
        <a href="caso-exito-2.php"><button class="center-block btn btn-default btn-lg hidden-xs" type="button">Leer mas</button></a>
        <a href="caso-exito-2.php"><button class="center-block btn btn-default btn-block visible-xs" type="button">Leer mas</button></a>
      </div>

      <div class="col-xs-12 col-md-3 col-sm-6 seccion-lider">
      <a href="caso-exito-3.php">
        <img class="img-responsive img-thumbnail center-block" src="../img/temp/fotolider3.png" alt="lider euro">
        <p class="text-center"><?php echo $nombre_caso3 ?></p>
        <p class="text-justify"><?php echo $texto3 ?></p>
        </a>
        <a href="caso-exito-3.php"><button class="center-block btn btn-default btn-lg hidden-xs" type="button">Leer mas</button></a>
        <a href="caso-exito-3.php"><button class="center-block btn btn-default btn-block visible-xs" type="button">Leer mas</button></a>
      </div>

      <div class="col-xs-12 col-md-3 col-sm-6 seccion-lider">
      <a href="caso-exito-4.php">
        <img class="img-responsive img-thumbnail center-block" src="../img/temp/fotolider4.png" alt="lider euro">
        <p class="text-center"><?php echo $nombre_caso4 ?></p>
        <p class="text-justify"><?php echo $texto4 ?></p>
        </a>
        <a href="caso-exito-4.php"><button class="center-block btn btn-default btn-lg hidden-xs" type="button">Leer mas</button></a>
        <a href="caso-exito-4.php"><button class="center-block btn btn-default btn-block visible-xs" type="button">Leer mas</button></a>
      </div>
    </div>
  </div>
</div>
