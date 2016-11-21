<?php
 include "config/config.inc";
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  mysqli_set_charset($conexion, "utf8");

/*peticiones para mostrar casos de exito*/

  $peticion4 = "SELECT nombre_caso, img1, texto1, estado FROM casoexito WHERE estado = 'Activo1' || estado = 'Activo2' ||estado = 'Activo3' || estado = 'Activo4' ";
  $resultado4 = mysqli_query($conexion, $peticion4);

  while($fila4 = mysqli_fetch_array($resultado4)){
    if($fila4["estado"] == 'Activo1'){
      $img1 = $fila4["img1"];
      $nombre_caso1 = $fila4["nombre_caso"];
      $texto1 = $fila4["texto1"];
    }
    if($fila4["estado"] == 'Activo2'){
      $img2 = $fila4["img1"];
      $nombre_caso2 = $fila4["nombre_caso"];
      $texto2 = $fila4["texto1"];
    }
    if($fila4["estado"] == 'Activo3'){
      $img3 = $fila4["img1"];
      $nombre_caso3 = $fila4["nombre_caso"];
      $texto3 = $fila4["texto1"];
    }
    if($fila4["estado"] == 'Activo4'){
      $img4 = $fila4["img1"];
      $nombre_caso4 = $fila4["nombre_caso"];
      $texto4 = $fila4["texto1"];
    }
  }
      $Base64Img=$img1;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotolider1.png", $Base64Img);
      $Base64Img=$img2;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotolider2.png", $Base64Img);
      $Base64Img=$img3;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotolider3.png", $Base64Img);
      $Base64Img=$img4;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotolider4.png", $Base64Img);

/*peticiones para mostrar eventos*/

$peticion9 = "SELECT titulo, estado FROM eventos WHERE estado = 'Activo1' || estado = 'Activo2' || estado = 'Activo3' || estado = 'Activo4' ";
  $resultado9 = mysqli_query($conexion, $peticion9);
while($fila9 = mysqli_fetch_array($resultado9)){
  if($fila9["estado"] == 'Activo1'){
    $titulo1 = $fila9["titulo"];
  }
  if($fila9["estado"] == 'Activo2'){
    $titulo2 = $fila9["titulo"];
  }
  if($fila9["estado"] == 'Activo3'){
    $titulo3 = $fila9["titulo"];
  }
  if($fila9["estado"] == 'Activo4'){
    $titulo4 = $fila9["titulo"];
  }
}
/*Peticiones para mostrar noticias*/
$peticion5 = "SELECT noticia, img1, fecha, estado FROM noticias WHERE estado = 'Activo1' || estado = 'Activo2' || estado = 'Activo3' || estado = 'Activo4' || estado = 'Activo5' || estado = 'Activo6' ";
  $resultado5 = mysqli_query($conexion, $peticion5);

  while($fila5 = mysqli_fetch_array($resultado5)){
    if($fila5["estado"] == 'Activo1'){
      $img1n = $fila5["img1"];
      $noticia1 = $fila5["noticia"];
      $fecha1 = $fila5["fecha"];
    }
    if($fila5["estado"] == 'Activo2'){
      $img2n = $fila5["img1"];
      $noticia2 = $fila5["noticia"];
      $fecha2 = $fila5["fecha"];
    }
    if($fila5["estado"] == 'Activo3'){
      $img3n = $fila5["img1"];
      $noticia3 = $fila5["noticia"];
      $fecha3 = $fila5["fecha"];
    }
    if($fila5["estado"] == 'Activo4'){
      $img4n = $fila5["img1"];
      $noticia4 = $fila5["noticia"];
      $fecha4 = $fila5["fecha"];
    }
    if($fila5["estado"] == 'Activo5'){
      $img5n = $fila5["img1"];
      $noticia5 = $fila5["noticia"];
      $fecha5 = $fila5["fecha"];
    }
    if($fila5["estado"] == 'Activo6'){
      $img6n = $fila5["img1"];
      $noticia6 = $fila5["noticia"];
      $fecha6 = $fila5["fecha"];
    }
  }
      $Base64Img=$img1n;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotonoticia1.png", $Base64Img);
      $Base64Img=$img2n;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotonoticia2.png", $Base64Img);
      $Base64Img=$img3n;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotonoticia3.png", $Base64Img);
      $Base64Img=$img4n;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotonoticia4.png", $Base64Img);
      $Base64Img=$img5n;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotonoticia5.png", $Base64Img);
      $Base64Img=$img6n;
      list(, $Base64Img) = explode(";", $Base64Img);
      list(, $Base64Img) = explode(",", $Base64Img);
      $Base64Img = base64_decode($Base64Img);
      file_put_contents("img/temp/fotonoticia6.png", $Base64Img);
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Universidad Euro Hispanoamericana</title>
        <link href='img/favicon.ico' rel='shortcut icon' type='image/x-icon' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!--  <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link href="css/main.css" rel="stylesheet">
        <!-- sweet alert formulario de registro -->
        <link rel="stylesheet" href="css/sweetalert.css">
        <link rel="stylesheet" href="css/swal-forms.css">
        <!-- This is what you need -->
        <script src="js/sweetalert.js"></script>
        <script src="js/swal-forms.js"></script>
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
   <img id="fondo-portada" class="img-responsive" src="img/header2.png" alt="fondo-portada">
    <div class="container">
      <div class="row">
        <div class="col-xs-1">
          <a href="#" id="mobile-menu-button" class="visible-xs">
            <span class="glyphicon glyphicon-th-list"></span>
          </a>
        </div><br class="visible-xs"><br class="visible-xs">
        <div class="col-xs-10">
          <img class="center-block img-responsive" id="escudo" src="img/escudoNegro.png" alt="escudo">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <img class="center-block img-responsive" id="titulo" src="img/sde.png" alt="titulo" />
        </div>
      </div>
    </div>
    <br class="visible-xs">
    <div class="container">
      <div class="row">
        <div class="col-xs-8 col-md-8 col-md-push-2 col-md-pull-2 col-sm-8 col-sm-push-2 col-sm-pull-2">
          <ul id="main-menu" class="nav nav-pills hidden-xs">
            <li class="active"><a href="index.php">INICIO</a></li>
            <li><a id="menu-casos-exito" style="cursor:pointer">CASOS DE EXITO</a></li>
            <li><a id="menu-eventos" style="cursor:pointer">EVENTOS</a></li>
            <li><a id="menu-noticias" style="cursor:pointer">NOTICIAS</a></li>
            <li><a id="menu-login" style="cursor:pointer">INICIAR SESION</a></li>
          </ul>
        </div>
      </div>
    </div>
  <div class="visible-xs">
    <ul id="mobile-main-menu">
      <li><a href="index.php">INICIO</a></li>
      <li><a id="mobile-menu-casos-exito" >CASOS DE EXITO</a></li>
      <li><a id="mobile-menu-eventos" >EVENTOS</a></li>
      <li><a id="mobile-menu-noticias" >NOTICIAS</a></li>
      <li><a id="mobile-menu-login" >INICIAR SESION</a></li>
    </ul>
  </div>
</div>
<div id="mensaje-rectora" class="hidden-xs">
    <div><img class="img-responsive center-block" src="img/frase.png"></div>
</div>
<div id="mensaje-rectora-movil" class="visible-xs">
    <div><img class="img-responsive center-block" src="img/frase2.png"></div>
</div>
<div id="contenedor-1" class="parallax-container">
    <div class="parallax"><img src="img/parallax5.png"></div>
</div>
<div id="casos-exito" class="container">
<p id="titulo-casos-exito">Casos de Éxito</p><br>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3">
      <section>
            <a class="casos-exito"><img class="center-block img-responsive" src="img/temp/fotolider1.png" alt="" /></a><br>
            <p class="text-justify"><b><?php echo $nombre_caso1; ?>.</b> <?php echo $texto1; ?></p>
            <a class="casos-exito btn btn-default hidden-xs">Leer mas</a>
            <a class="casos-exito btn btn-default btn-block visible-xs">Leer mas</a>
      </section>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">

      <section>
        <a class="casos-exito"><img class="center-block img-responsive" src="img/temp/fotolider2.png" alt="" /></a><br>
        <p class="text-justify"><b><?php echo $nombre_caso2; ?>.</b> <?php echo $texto2; ?></p>
        <a class="casos-exito btn btn-default hidden-xs ">Leer mas</a>
        <a class="casos-exito btn btn-default btn-block visible-xs">Leer mas</a>
      </section>

    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">

      <section>
        <a class="casos-exito"><img class="center-block img-responsive" src="img/temp/fotolider3.png" alt="" /></a><br>
        <p class="text-justify"><b><?php echo $nombre_caso3; ?>.</b> <?php echo $texto3; ?></p>
        <a class="casos-exito btn btn-default hidden-xs ">Leer mas</a>
        <a class="casos-exito btn btn-default btn-block visible-xs">Leer mas</a>
      </section>

    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">

      <section>
        <a class="casos-exito"><img class="center-block img-responsive" src="img/temp/fotolider4.png" alt="" /></a><br>
        <p class="text-justify"><b><?php echo $nombre_caso4; ?>.</b> <?php echo $texto4; ?></p>
        <a class="casos-exito btn btn-default hidden-xs ">Leer mas</a>
        <a class="casos-exito btn btn-default btn-block visible-xs">Leer mas</a>
      </section>

    </div>
  </div>
</div>
<div id="login">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
          <p class="login-titulo">Inicia Sesión o <a style="cursor:pointer" onclick="complex()">¡Regístrate!</a></p>
          <form action="php/log-verificar.php" method="POST">
              <p><b>Usuario</b></p><input type="text" name="usuario">
              <p><b>Contraseña</b></p><input type="password" name="contra"><br><br>
              <input style="cursor:pointer;" class="btn btn-default ingresar" type="submit" value="Ingresar">
          </form>
          <br>
          <p><b><a class="olvidepass"style="cursor:pointer" onclick="complex2()">Olvidé mi contraseña</a></b></p>
      </div>
    </div>
  </div>
</div>
<div id="contenedor-2" class="parallax-container">
  <div class="parallax"><img src="img/parallax6.jpg"></div>
</div>
<div id="noticias-eventos">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="row">
          <h1>Noticias</h1>
          <a class="casos-exito" style="cursor: pointer">
            <div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded" src="img/temp/fotonoticia1.png" width="78" height="78" alt="">
             </div>
            <div class="col-md-4 col-sm-4"><p><?php echo $noticia1; ?></p>
            <p class="posted"><?php echo $fecha1; ?></p>
            </div>
          </a>
          <br class="visible-xs hidden-md ">
          <a class="casos-exito" style="cursor: pointer">
            <div class="col-xs-5 col-sm-2 col-md-2">
            <img class="img-rounded" src="img/temp/fotonoticia2.png" width="78" height="78" alt="">
             </div>
            <div class="col-md-4 col-sm-4"><p><?php echo $noticia2; ?></p>
            <p class="posted"><?php echo $fecha2; ?></p>
            </div>
          </a>
        </div>
        <br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs">
        <div class="row">
          <a class="casos-exito" style="cursor: pointer">
            <div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded" src="img/temp/fotonoticia3.png" width="78" height="78" alt="">
             </div>
            <div class="col-md-4 col-sm-4"><p><?php echo $noticia3; ?></p>
            <p class="posted"><?php echo $fecha3; ?></p>
            </div>
          </a>
          <a class="casos-exito" style="cursor: pointer">
            <div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded" src="img/temp/fotonoticia4.png" width="78" height="78" alt="">
             </div>
            <div class="col-md-4 col-sm-4"><p><?php echo $noticia4; ?></p>
            <p class="posted"><?php echo $fecha4; ?></p>
            </div>
          </a>
        </div><br class="hidden-xs">
        <br class="hidden-xs"><br class="hidden-xs">
        <div class="row">
          <a class="casos-exito" style="cursor: pointer">
            <div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded" src="img/temp/fotonoticia5.png" width="78" height="78" alt="">
             </div>
            <div class="col-md-4 col-sm-4"><p><?php echo $noticia5; ?></p>
            <p class="posted"><?php echo $fecha5; ?></p>
            </div>
          </a>
          <a class="casos-exito" style="cursor: pointer">
            <div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded" src="img/temp/fotonoticia6.png" width="78" height="78" alt="">
             </div>
            <div class="col-md-4 col-sm-4"><p><?php echo $noticia6; ?></p>
            <p class="posted"><?php echo $fecha6; ?></p>
            </div>
          </a>
        </div>
      </div>
      <div id="eventos" class="col-xs-12 col-md-6">
        <h1>Eventos</h1>
        <a class="casos-exito" style="cursor: pointer"><?php echo $titulo1; ?></a><br><br>
        <a class="casos-exito" style="cursor: pointer"><?php echo $titulo2; ?></a><br><br>
        <a class="casos-exito" style="cursor: pointer"><?php echo $titulo3; ?></a><br><br>
        <a class="casos-exito" style="cursor: pointer"><?php echo $titulo4; ?></a><br><br>
        <a class="casos-exito" style="cursor: pointer">Conferencia LSCA. Jesus Duran Programación Semántica</a><br><br>
        <a class="casos-exito" style="cursor: pointer">Congreso UEH 12.</a><br><br>
        <a class="casos-exito" style="cursor: pointer">Cena de egresados 2010</a><br><br>
        <a class="casos-exito" style="cursor: pointer">Conferencia de prensa Curso Teorico y Practico sobre el derecho de Amparo</a><br><br>
        <a class="casos-exito" style="cursor: pointer">Conferencia Dr. Emiliano Zapata Derecho laboral</a><br><br>
        <a class="casos-exito" style="cursor: pointer">Conferencia LSCA. Jesus Duran Programación Semántica</a>
        <div id="redes" class="row">
          <div class="col-xs-12">
            <a href="#"><img src="img/fb1.png" alt="facebook"></a>
            <a href="#"><img src="img/gp1.png" alt=""></a>
            <a href="#"><img src="img/inst1.png" alt=""></a>
            <a href="#"><img src="img/twi1.png" alt=""></a>
            <a href="#"><img src="img/yt1.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="pie">
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <p class="text-center">Copyright© 2008. Todos los derechos reservados. Universidad Euro Hispanoamericana.</p>
    </div>
  </div>
</div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="js/plugins.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
<!--
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script> -->
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

<script>
function complex() {
  swal.withForm({
    title: '¡Unete a la Comunidad Euro!',
    text: '¡Mantengamos el contacto!',
    imageUrl: 'img/escudoNegro.png',
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: '¡Unirme!',
    closeOnConfirm: true,
    allowEscapeKey: false,
    allowOutsideClick: false,
    formFields: [
      {id: 'name', type: 'text',  placeholder: 'Nombre completo (Requerido)' },
      {id: 'matricula', type: 'text', placeholder: 'Matricula' },
      {id: 'carrera', type: 'text', placeholder: 'Carrera' },
      {id: 'email', type: 'text', placeholder: 'Email (Requerido)' },
      {id: 'anio', type: 'text', placeholder: 'Año de egreso' } 
    ]
  }, function (isConfirm) {
      if(isConfirm){
        var nombre = this.swalForm.name;
        var matricula = this.swalForm.matricula;
        var carrera = this.swalForm.carrera;
        var email = this.swalForm.email;
        var anio = this.swalForm.anio;
        window.location = "php/subir-registro.php?name="+nombre+"&matricula="+matricula+"&carrera="+carrera+"&email="+email+"&anio="+anio+"";
    }
  })
}
</script>
<script>
function complex2() {
  swal.withForm({
    title: '¡Olvide mi contraseña!',
    text: 'Recuperar contraseña',
    imageUrl: 'img/escudoNegro.png',
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: '¡Recuperar!',
    closeOnConfirm: true,
    allowEscapeKey: false,
    allowOutsideClick: false,
    formFields: [
      {id: 'name', type: 'text',  placeholder: 'Nombre completo (Requerido)' },
      {id: 'email', type: 'text', placeholder: 'Email (Requerido)' }
    ]
  }, function (isConfirm) {
      if(isConfirm){
        var nombre = this.swalForm.name;
        var matricula = this.swalForm.matricula;
        var carrera = this.swalForm.carrera;
        var email = this.swalForm.email;
        var anio = this.swalForm.anio;
        window.location = "php/subir-registro.php?name="+nombre+"&matricula="+matricula+"&carrera="+carrera+"&email="+email+"&anio="+anio+"";
    }
  })
}
</script>
<script>
  function toggleMobileMenu(){
    var $mobileMenu = $('#mobile-main-menu');
    $mobileMenu.slideToggle('fast');
  }
  $(document).ready(function() {
     $('#mobile-menu-button').on('click', toggleMobileMenu);

    $("#menu-casos-exito").click(function() {
      $('html,body').animate({scrollTop: $("#casos-exito").offset().top}, 1000);
    });
    $("#menu-noticias").click(function() {
      $('html,body').animate({scrollTop: $("#noticias-eventos").offset().top}, 1000);
    });
     $("#menu-eventos").click(function() {
      $('html,body').animate({scrollTop: $("#eventos").offset().top}, 1000);
    });
     $("#menu-login").click(function() {
      $('html,body').animate({scrollTop: $("#login").offset().top}, 1000);
    });
     $(".casos-exito").click(function() {
      $('html,body').animate({scrollTop: $("#login").offset().top}, 1000);
    });

     //*****Scroll dispositivos mobiles******

     $("#mobile-menu-casos-exito").click(function() {
      $('html,body').animate({scrollTop: $("#casos-exito").offset().top}, 2000);
    });
    $("#mobile-menu-noticias").click(function() {
      $('html,body').animate({scrollTop: $("#noticias-eventos").offset().top}, 2000);
    });
     $("#mobile-menu-eventos").click(function() {
      $('html,body').animate({scrollTop: $("#eventos").offset().top}, 2000);
    });
     $("#mobile-menu-login").click(function() {
      $('html,body').animate({scrollTop: $("#login").offset().top},2000);
    });
  });
</script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
