<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Universidad Euro Hispanoamericana</title>
        <link href='img/favicon.ico' rel='shortcut icon' type='image/x-icon' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!--  <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link href="../css/main.css" rel="stylesheet">
        <!-- sweet alert formulario de registro -->
        <link rel="stylesheet" href="../css/sweetalert.css">
        
        <!-- This is what you need -->
        <script src="../js/sweetalert.js"></script>
        
    </head>
    <style type="text/css">
      .sweet-alert{
        background-color: #eee;
        top: 35%;
      }
      .btn-lg{
        margin-top: 30px;
        font-size: 14px;
        border-radius: 0px;
        box-shadow: 0 0 0 0;
        border: 0px;
        width: 200px;
      }
      input#name, input#matricula, input#carrera, input#email, input#anio{
        display: block;
        background-color: #fff;
        width: 96%;
      }
    </style>
    <body>
<div class="portada">
   <img id="fondo-portada" class="img-responsive" src="../img/header2.png" alt="fondo-portada">
    <div class="container">
      <div class="row">
        <div class="col-xs-1">
          <a href="#" id="mobile-menu-button" class="visible-xs">
            <span class="glyphicon glyphicon-th-list"></span>
          </a>
        </div><br class="visible-xs"><br class="visible-xs">
        <div class="col-xs-10">
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
            <li><a href="index.php">INICIO</a></li>
            <li><a id="menu-casos-exito" style="cursor:pointer">CASOS DE EXITO</a></li>
            <li><a id="menu-eventos" style="cursor:pointer">EVENTOS</a></li>
            <li><a id="menu-noticias" style="cursor:pointer">NOTICIAS</a></li>
            <li class="active"><a href="index.php" id="menu-login" style="cursor:pointer">INICIAR SESION</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>
<body>
<?php 
include "../config/config.inc";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$nombre = $_GET["name"];
$matricula = $_GET["matricula"];
$carrera = $_GET["carrera"];
$email = $_GET["email"];
$anio = $_GET["anio"];


if($nombre != "" && $email != ""){
	$peticion = "INSERT INTO aplicantes VALUES (
		NULL,
		'".$nombre."',
		'".$matricula."',
		'".$carrera."',
		'".$email."',
		'".$anio."'
	)";
$resultado = mysqli_query($conexion, $peticion);
}
if($resultado){
	?>
	<script type="text/javascript">
		swal({
			  title: "¡Registro Exitoso!",
			  text: "Estaremos en contacto muy pronto",
			  type: "success",
			  allowEscapeKey: false,
			  allowOutsideClick: false
			 },
			function (confirmado) {
				if(confirmado){
					window.location.href = '../index.php';
			}
			});
	</script>
	<?php
}
else{
	?>
	<script type="text/javascript">
		swal({
		  title: "Nombre e Email son campos requeridos",
		  text: "Vuelve a intentarlo porfavor.",
		  type: "error",
		  allowEscapeKey: false,
		  allowOutsideClick: false
		 },
		function (confirmado) {
			if(confirmado){
				window.location.href = '../index.php';
		}
		});
	</script>
	<?php
}
?>
</body>
</html>