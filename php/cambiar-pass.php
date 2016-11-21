<script src="//code.jquery.com/jquery.js"></script>
<script src="../js/sweetalert.js"></script>
<link rel="stylesheet" href="../css/sweetalert.css">

<?php include "../config/cabecera.inc" ?>
<?php include "../config/config-caso.inc" ?>
<body>
  <div class="portada">
   <img id="fondo-portada" class="img-responsive" src="../img/header3.png" alt="fondo-portada">
    <div class="container">
      <div class="row">
        <div class="col-xs-11 col-md-12">
          <img class="center-block img-responsive" id="escudo" src="../img/escudoNegro.png" alt="escudo">
        </div>
        <div class="col-xs-1">
          <a href="#" id="mobile-menu-button" class="btn btn-link visible-xs">
            <span class="glyphicon glyphicon-th-list"></span> 
          </a>
        </div>
      </div>
    </div>
    <div class="col-xs-12">
      <img class="center-block" class="img-responsive" id="titulo" src="../img/sde.png" alt="titulo" />
    </div>
    <div class="container">
    <div class="row">
      <div class="col-xs-8 col-md-push-2 col-md-pull-2">
        <ul id="main-menu" class="nav nav-pills hidden-xs">
          <li><a href="../index.php">INICIO</a></li>
          <li><a id="menu-casos-exito" style="cursor:pointer">CASOS DE EXITO</a></li>
          <li class="active"><a id="menu-eventos" style="cursor:pointer">EVENTOS</a></li>
          <li><a id="menu-noticias" style="cursor:pointer">NOTICIAS</a></li>
          <li><a href="../index.php" id="menu-login" style="cursor:pointer">INICIAR SESION</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="visible-xs">
    <ul id="mobile-main-menu">
      <li><a href="#">INICIO</a></li>
      <li><a href="#">CASOS DE EXITO</a></li>
      <li><a href="#">EVENTOS</a></li>
      <li><a href="#">NOTICIAS</a></li>
      <li><a href="#">INICIAR SESION</a></li>
    </ul>
  </div>
</div>
<?php 
$id = $_GET['id'];
$nueva_pass = $_POST['nuevapass'];
$confirm_pass = $_POST['confirmpass'];

if ($nueva_pass == NULL || strlen($nueva_pass) == 0 || $confirm_pass == NULL || strlen($confirm_pass) == 0) {
  ?> <script type="text/javascript">
          var id = "<?php echo $id ?>";
          swal({
            title: "¡Error!",
            text: "Ambos campos son requeridos",
            type: "error",
            allowEscapeKey: false,
            allowOutsideClick: false
           },
          function (confirmado) {
            if(confirmado){
              window.location.href = "config-user.php?id="+id+"";
          }
          });
        </script>
    <?php
    exit;
}
if ($nueva_pass === $confirm_pass){
  ?> <script type="text/javascript">
          var id = "<?php echo $id ?>";
          swal({
            title: "¡Contraseña actualizada!",
            text: "Se ha actualizado satisfactoriamente la contraseña.",
            type: "success",
            allowEscapeKey: false,
            allowOutsideClick: false
           },
          function (confirmado) {
            if(confirmado){
              window.location.href = "config-user.php?id="+id+"";
          }
          });
        </script>
    <?php
}
else{
  ?> <script type="text/javascript">
          var id = "<?php echo $id ?>";
          swal({
            title: "¡Error!",
            text: "Las constraseñas no coinciden. Vuelve a intentarlo. Gracias!.",
            type: "error",
            allowEscapeKey: false,
            allowOutsideClick: false
           },
          function (confirmado) {
            if(confirmado){
              window.location.href = "config-user.php?id="+id+"";
          }
          });
        </script>
    <?php

}


?>