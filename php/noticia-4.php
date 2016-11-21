<?php
include "../config/cabecera-noticia.inc";
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM noticias WHERE estado = 'Activo4' ";
$resultado = mysqli_query($conexion, $peticion);
?>
<div id="caso-exito" class="container">
  <div class="row">
    <div id="side-bar" class="col-xs-3 visible-md visible-lg">
      <?php include "side-bar.inc"; ?>
    </div>
    <div class="col-xs-12 col-md-9">
    <?php while($fila = mysqli_fetch_array($resultado)){
      $Base64Img=$fila["img2"];
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("../img/temp/fotonoticia4-1.png", $Base64Img);
      $Base64Img=$fila["img3"];
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("../img/temp/fotonoticia4-2.png", $Base64Img);
      echo '
      <h1>'.$fila["noticia"].'</h1>
      <h3 class="text-justify">'.$fila["texto1"].'</h3>
      <img class="img-responsive center-block" src="../img/temp/fotonoticia4-1.png" alt="imagen principal">
      <p id="pie-foto-1" class="text-center">'.$fila["imgpie1"].'</p>
      <p  class="text-justify">'.$fila["texto2"].'</p>
      <p  class="text-justify">'.$fila["texto3"].'</p>
      <div id="img-texto" class="row">
        <div class="col-xs-12 col-md-6">
          <img class="center-block img-responsive" src="../img/temp/fotonoticia4-2.png" alt="imagen secundaria">
          <p id="pie-foto-2" class="text-center">'.$fila["imgpie2"].'</p>
        </div>
        <div class="col-xs-12 col-md-6">
          <p class="text-justify">'.$fila["texto4"].'</p>
        </div>
        <div class="col-xs-12">
          <p class="text-justify">'.$fila["texto5"].'</p>
          </div>
          ';
          }
          ?>
      </div>
    </div>
  </div>
</div>
<hr>
<?php include "lideres.inc"; ?>
<?php include "../config/pie-noticia.inc";  ?>
