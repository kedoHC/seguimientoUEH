<?php
  include "../config/config-caso.inc";
?>
  <body>
  <div class="portada">
   <img id="fondo-portada" class="img-responsive hidden-lg" src="../img/header2.png" alt="fondo-portada">
   <img id="fondo-portada" class="img-responsive visible-lg" src="../img/header3.png" alt="fondo-portada">

    <div class="container">
      <div class="row">
        <div class="col-xs-1">
          <a href="#" id="mobile-menu-button" class="visible-xs">
            <span class="glyphicon glyphicon-th-list"></span> 
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
         <div class="col-xs-12">
          <img class="center-block img-responsive" id="escudo" src="../img/escudoNegro.png" alt="escudo">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <img class="center-block img-responsive" id="titulo" src="../img/sde.png" alt="titulo" />
        </div>
      </div>
    </div>
    <br class="visible-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-md-8 col-md-push-2 col-md-pull-2 col-sm-8 col-sm-push-2 col-sm-pull-2">
          <ul id="main-menu" class="nav nav-pills hidden-xs">
            <li><a href="../index2.php">INICIO</a></li>
            <li class="active"><a id="menu-casos-exito" style="cursor:pointer">CASOS DE EXITO</a></li>
            <li><a id="menu-eventos" style="cursor:pointer">EVENTOS</a></li>
            <li><a id="menu-noticias" style="cursor:pointer">NOTICIAS</a></li>
            <li><a href="../index2.php" id="menu-login" style="cursor:pointer">NOVEDADES</a></li>
          </ul>
        </div>
      </div>
    </div>
  <div class="visible-xs">
    <ul id="mobile-main-menu">
      <li><a href="../index2.php">INICIO</a></li>
      <li><a id="mobile-menu-casos-exito" >CASOS DE EXITO</a></li>
      <li><a id="mobile-menu-eventos" >EVENTOS</a></li>
      <li><a id="mobile-menu-noticias" >NOTICIAS</a></li>
      <li><a href="../index2.php" >NOVEDADES</a></li>
    </ul>
  </div>
</div>
<div id="caso-exito" class="container">
  <div class="row">
    <div class="col-xs-12 col-md-9">
    <?php 
      while ($fila = mysqli_fetch_array($resultado4)){

      $Base64Img=$fila["img2"];
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("../img/temp/fotolider4-2.png", $Base64Img);

      $Base64Img=$fila["img3"];
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("../img/temp/fotolider4-3.png", $Base64Img);
      echo'
      <h1>'.$fila["nombre_caso"].'</h1>
      <h3 class="text-justify"> '.$fila["texto1"].' .</h3>
      <img class="img-responsive center-block" src="../img/temp/fotolider4-2.png" alt="linus torvalds">
      <p id="pie-foto-1" class="text-center">'.$fila["imgpie1"].'</p>
      <p  class="text-justify">'.$fila["texto2"].'</p>
      <p  class="text-justify">'.$fila["texto3"].'</p>
      <div id="img-texto" class="row">
        <div class="col-xs-12 col-md-6">
          <img class="img-responsive center-block" src="../img/temp/fotolider4-3.png" alt="linus torvalds">
          <p id="pie-foto-2" class="text-center">'.$fila["imgpie2"].'</p>
        </div>
        <div class="col-xs-12 col-md-6">
          <p class="text-justify">'.$fila["texto4"].'</p>
        </div>
      </div>
      <p class="text-justify">'.$fila["texto5"].'</p>
      ';
    }
    ?>
    </div>
    <div id="side-bar" class="col-md-3 hidden-xs hidden-sm">
        <?php include "side-bar.inc"; ?>
    </div>
  </div>
</div>
<hr>
<div id="lideres">
  <div class="container">
    <div class="row">
    <h1 class="text-center">Casos de Éxito</h1>
      <div id="lider" class="col-xs-12 col-sm-6 col-md-4">
      <a href="caso-exito-1.php">
        <img class="img-responsive img-thumbnail center-block" src="../img/temp/fotolider1.png" alt="lider euro">
        <?php
        while ($fila = mysqli_fetch_array($resultado)){
        echo'
        <p class="text-center">'.$fila["nombre_caso"].'</p>
        <p class="text-justify">'.$fila["texto1"].'</p>
         ';
        }
        ?>
      </a>
        <a href="caso-exito-1.php"><button class="center-block btn btn-default btn-lg hidden-xs" type="button">Leer mas</button></a>
         <a href="caso-exito-1.php"><button class="center-block btn btn-default btn-block hidden-md hidden-sm hidden-lg" type="button">Leer mas</button></a>
      </div>
      <div id="lider" class="col-xs-12 col-sm-6 col-md-4">
      <a href="caso-exito-2.php">
        <img class="img-responsive img-thumbnail center-block" src="../img/temp/fotolider2.png" alt="lider euro">
        <?php
        while ($fila2 = mysqli_fetch_array($resultado2)){
        echo'
        <p class="text-center">'.$fila2["nombre_caso"].'</p>
        <p class="text-justify">'.$fila2["texto1"].'</p>
         ';
        }
        ?>
        </a>
        <a href="caso-exito-2.php"><button class="center-block btn btn-default btn-lg hidden-xs" type="button">Leer mas</button></a>
         <a href="caso-exito-2.php"><button class="center-block btn btn-default btn-block hidden-md hidden-sm hidden-lg" type="button">Leer mas</button></a>
      </div>
      <div id="lider" class="col-xs-12 col-sm-6 col-md-4">
      <a href="caso-exito-3.php">
        <img class="img-responsive img-thumbnail center-block" src="../img/temp/fotolider3.png" alt="lider euro">
        <?php
        while ($fila3 = mysqli_fetch_array($resultado3)){
        echo'
        <p class="text-center">'.$fila3["nombre_caso"].'</p>
        <p class="text-justify">'.$fila3["texto1"].'</p>
         ';
        }
        ?>
        </a>
        <a href="caso-exito-3.php"><button class="center-block btn btn-default btn-lg hidden-xs" type="button">Leer mas</button></a>
         <a href="caso-exito-3.php"><button class="center-block btn btn-default btn-block hidden-md hidden-sm hidden-lg" type="button">Leer mas</button></a>
      </div>
    </div>
  </div>
</div>
<?php include "../config/pie.inc"; ?>