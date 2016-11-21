<?php
 $peticion5 = "SELECT titulo FROM eventos WHERE estado = 'Activo1'";
  $resultado5 = mysqli_query($conexion, $peticion5);

  $peticion6 = "SELECT titulo FROM eventos WHERE estado = 'Activo2'";
  $resultado6 = mysqli_query($conexion, $peticion6);

  $peticion7 = "SELECT titulo FROM eventos WHERE estado = 'Activo3'";
  $resultado7 = mysqli_query($conexion, $peticion7);

  $peticion8 = "SELECT titulo FROM eventos WHERE estado = 'Activo4'";
  $resultado8 = mysqli_query($conexion, $peticion8);

  while($fila5 = mysqli_fetch_array($resultado5)){
    $titulo1 = $fila5["titulo"];
  }
while($fila6 = mysqli_fetch_array($resultado6)){
  $titulo2 = $fila6["titulo"];
}
while($fila7 = mysqli_fetch_array($resultado7)){
  $titulo3 = $fila7["titulo"];
}
while($fila8 = mysqli_fetch_array($resultado8)){
  $titulo4 = $fila8["titulo"];
}
/*peticiones para noticias*/

$peticion6 = "SELECT noticia, fecha, estado FROM noticias WHERE estado = 'Activo1' || estado = 'Activo2' || estado = 'Activo3' || estado = 'Activo4' || estado = 'Activo5' || estado = 'Activo6' ";
  $resultado6 = mysqli_query($conexion, $peticion6);

  while($fila6 = mysqli_fetch_array($resultado6)){
    if($fila6["estado"] == 'Activo1'){
      $noticia1 = $fila6["noticia"];
      $fecha1 = $fila6["fecha"];
    }
    if($fila6["estado"] == 'Activo2'){
      $noticia2 = $fila6["noticia"];
      $fecha2 = $fila6["fecha"];
    }
    if($fila6["estado"] == 'Activo3'){
      $noticia3 = $fila6["noticia"];
      $fecha3 = $fila6["fecha"];
    }
    if($fila6["estado"] == 'Activo4'){
      $noticia4 = $fila6["noticia"];
      $fecha4 = $fila6["fecha"];
    }
    if($fila6["estado"] == 'Activo5'){
      $noticia5 = $fila6["noticia"];
      $fecha5 = $fila6["fecha"];
    }
    if($fila6["estado"] == 'Activo6'){
      $noticia6 = $fila6["noticia"];
      $fecha6 = $fila6["fecha"];
    }
  }
?>
<div id="noticias-eventos">
  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="row">
          <h1 id="titulo-noticias">Noticias</h1>
          <a href="noticia-1.php"> <div class="col-xs-5 col-sm-2 col-md-2"><img class="center-block img-rounded" src="../img/temp/fotonoticia1.png" width="78" height="78" alt="">
           </div>
          <div class="col-md-4 col-sm-4"><p><?php echo $noticia1; ?></p>
          <p><?php echo $fecha1; ?></p>
          </div>
          </a>
          <br class="visible-xs hidden-md">
          <a href="noticia-2.php"><div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded center-block" src="../img/temp/fotonoticia2.png" width="78" height="78" alt="">
           </div>
          <div class="col-md-4 col-sm-4"><p><?php echo $noticia2; ?></p>
          <p><?php echo $fecha2; ?></p>
          </div>
          </a>
        </div>
        <br class="visible-xs hidden-md">
        <br class="hidden-xs"><br class="hidden-xs"<br class="hidden-xs">
        <div class="row">
          <a href="noticia-3.php"><div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded center-block" src="../img/temp/fotonoticia3.png" width="78" height="78" alt="">
           </div>
          <div class="col-md-4 col-sm-4"><p><?php echo $noticia3; ?></p>
          <p><?php echo $fecha3; ?></p>
          </div>
          </a>
          <br class="visible-xs hidden-md">
          <a href="noticia-4.php"><div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded center-block" src="../img/temp/fotonoticia4.png" width="78" height="78" alt="">
           </div>
          <div class="col-md-4 col-sm-4"><p><?php echo $noticia4; ?></p>
          <p><?php echo $fecha4; ?></p>
          </div>
          </a>
        </div>
        <br class="visible-xs hidden-md">
        <br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs">
        <div class="row">
          <a href="noticia-5.php"><div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded center-block" src="../img/temp/fotonoticia5.png" width="78" height="78" alt="">
           </div>
          <div class="col-md-4 col-sm-4"><p><?php echo $noticia5; ?></p>
          <p><?php echo $fecha5; ?></p>
          </div>
          </a>
          <br class="visible-xs hidden-md">
          <a href="noticia-6.php"><div class="col-xs-5 col-sm-2 col-md-2"><img class="img-rounded center-block" src="../img/temp/fotonoticia6.png" width="78" height="78" alt="">
           </div>
          <div class="col-md-4 col-sm-4"><p><?php echo $noticia6; ?></p>
          <p><?php echo $fecha6; ?></p>
          </div>
          </a>
        </div>
      </div>
      <div id="eventos" class="col-xs-12 col-md-6">
        <h1>Eventos</h1>
        <a href="evento-1.php"><?php echo $titulo1; ?></a><br><br>
        <a href="evento-2.php"><?php echo $titulo2; ?></a><br><br>
        <a href="evento-3.php"><?php echo $titulo3; ?></a><br><br>
        <a href="evento-4.php"><?php echo $titulo4; ?></a><br><br>
        <a href="evento-5.php">Conferencia LSCA. Jesus Duran Programación Semántica</a><br><br>
        <a href="evento-6.php">Congreso UEH 12.</a><br><br>
        <a href="evento-7.php">Cena de egresados 2010</a><br><br>
        <a href="evento-8.php">Conferencia de prensa Curso Teorico y Practico sobre el derecho de Amparo</a><br><br>
        <a href="evento-9.php">Conferencia Dr. Emiliano Zapata Derecho laboral</a><br><br>
        <a href="evento-10.php">Conferencia LSCA. Jesus Duran Programación Semántica</a>
        <div id="redes" class="row">
          <div class="col-xs-12">
            <a href="#"><img src="../img/fb1.png" alt="facebook"></a>
            <a href="#"><img src="../img/gp1.png" alt=""></a>
            <a href="#"><img src="../img/inst1.png" alt=""></a>
            <a href="#"><img src="../img/twi1.png" alt=""></a>
            <a href="#"><img src="../img/yt1.png" alt=""></a>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
    function toggleMobileMenu()
    {
      var $mobileMenu = $('#mobile-main-menu');
      $mobileMenu.slideToggle('fast');
    }
    $(document).ready(function() {
       $('#mobile-menu-button').on('click', toggleMobileMenu);

      $("#menu-casos-exito").click(function() {
        $('html,body').animate({scrollTop: $("#lideres").offset().top}, 1000);
      });
       $("#menu-eventos, #menu-noticias").click(function() {
        $('html,body').animate({scrollTop: $("#noticias-eventos").offset().top}, 1000);
      });

        //*****Scroll dispositivos mobiles******

     $("#mobile-menu-casos-exito").click(function() {
      $('html,body').animate({scrollTop: $("#lideres-noticia").offset().top}, 2000);
    });
    $("#mobile-menu-noticias").click(function() {
      $('html,body').animate({scrollTop: $("#noticias-eventos").offset().top}, 2000);
    });
     $("#mobile-menu-eventos").click(function() {
      $('html,body').animate({scrollTop: $("#eventos").offset().top}, 2000);
    });


    });
  </script>
  </body>
</html>
