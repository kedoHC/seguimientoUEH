<?php include "cabecera.inc"; ?>
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
            <li><a href="../index2.php">CASOS DE EXITO</a></li>
            <li class="active"><a id="menu-eventos" style="cursor:pointer">EVENTOS</a></li>
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