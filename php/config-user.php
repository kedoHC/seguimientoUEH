<?php 
include "../config/config-caso.inc"; 
/*  include "../config/config.inc";*/
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  mysqli_set_charset($conexion, "utf8");

  $peticion = "SELECT * FROM alumno WHERE id_alumno = '".$_GET["id"]."'";
  $resultado = mysqli_query($conexion, $peticion);
?>
<style>
  #novedad{
    margin-top: 100px;
    margin-bottom: 100px;
  }
  input[type="text"]{
    width: 500px;
    border: 0px;
    margin-top: 5px;
    margin-bottom: 10px;
    font-size: 2.5rem;

  }
  input[type="text"]:hover{
    background-color: #131313;
    color: #fff;

  }
  label{
   margin-top: 10px; 
   font-size: 2.5rem; 
  }
  input[type="submit"]{
    margin-top: 35px;
    border-radius: 0px;
  }
  #cambiar-pass{
    margin-bottom: 100px;
  }
</style>
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
            <li><a id="menu-casos-exito" style="cursor:pointer">CASOS DE EXITO</a></li>
            <li><a id="menu-eventos" style="cursor:pointer">EVENTOS</a></li>
            <li><a id="menu-noticias" style="cursor:pointer">NOTICIAS</a></li>
            <li class="active"><a href="../index2.php" id="menu-login" style="cursor:pointer">NOVEDADES</a></li>
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
<style type="text/css">
 
</style>
<div id="novedad">
  <div class="container">
  <h1>Tu perfil</h1>
    
    <?php 
      while ($fila = mysqli_fetch_array($resultado)){
        echo '
        <div class="col-xs-3">
    <form name="formularioEgresado" action="actualizar-usuario.php?id='.$fila["id_alumno"].'" method="POST">
      <label for="nombre">Egresado: </label><br>

      <label for="titulo1">Titulo: </label><br>
      <label for="anio">Año: </label><br>
      <label for="matricula">Matricula: </label><br>
      <label for="correo">Email: </label><br>
      <label for="usuario">Usuario: </label><br>
      <input class="btn btn-primary" type="submit" value="Actualizar Mis Datos">
      </div>    
      <div class="col-xs-9">
          <input id="nombre" type="text" name="nombre" value="'.$fila["nombre"].'" placeholder="Nombre completo" ><br>
          <input id="titulo1" type="text" name="titulo" value="'.$fila["titulo"].'" placeholder="Ultimo titulo obtenido" ><br>
          <input id="anio" type="text" name="anioTitulo" value="'.$fila["anioTitulo"].'" placeholder="Año de egreso" ><br>
          <input id="matricula" type="text" name="matricula" value="'.$fila["matricula"].'" placeholder="Ejemplo: EH1202SC389" ><br>
          <input id="correo" type="text" name="correo" value="'.$fila["correo"].'" placeholder="Email" ><br>
          <input id="usuario" type="text" name="usuario_alumno" value="'.$fila["usuario_alumno"].'" placeholder="Usuario" >
      </div>
      </form>
      ';
    
    ?>
  </div>
</div>
<div id="cambiar-pass" class="container">
  <div class="row">
    <div class="col-xs-12">
    <?php 
    echo'
    <h2>Cambiar contraseña: </h2><br>
       <form name="formulariopass" action="cambiar-pass.php?id='.$fila["id_alumno"].'"" method="POST">
        <input name="nuevapass" type="text" placeholder="Nueva contraseña"><br>
        <input name="confirmpass" type="text" placeholder="Confirmar contraseña"><br>
        <input class="btn btn-primary" type="submit" value="Cambiar contraseña">
      </form>

      ';
    }
       ?> 
    </div>
  </div>
</div>
<script>
window.onload = function() {
        document.formulariopass.addEventListener('submit', validarFormulariopass);
      }
      funtion validarFormulariopass(evObject){
        evObject.preventDefault();
        var todoCorrectopass = true;
        var formulariopass = document.formulariopass;
        if (/^\S[a-zA-Z0-9\s]{2,10}$/.test(formulariopass.nuevapass.value)==false){
          swal("¡Contraseña invalida!", "Contraseña con 10 caracteres maximo de la A-Z y 0-9.", "error");
          todoCorrectopass=false;
          document.formularioEgresado.nuevapass.focus();
        }
        if (/^\S[a-zA-Z0-9\s]{2,10}$/.test(formulariopass.confirmpass.value)==false){
          swal("¡Contraseña invalida!", "Contraseña con 10 caracteres maximo de la A-Z y 0-9.", "error");
          todoCorrectopass=false;
          document.formularioEgresado.nuevapass.focus();
        }
        if(formulariopass.nuevapass.value == formulariopass.confirmpass.value){
          todoCorrectopass == true;
          formulariopass.submit();
        }
      }
        

window.onload = function() {
        document.formularioEgresado.addEventListener('submit', validarFormulario);
      }
      function validarFormulario(evObject) {
        evObject.preventDefault();
        var todoCorrecto = true;
        var formulario = document.formularioEgresado;
        if (/^\S[a-zA-Z\sñáéíóú]{2,50}$/.test(formulario.nombre.value)==false){
          swal("¡Nombre Incorrecto!", "Nombre completo, sin números o carácteres especiales", "error");
          todoCorrecto=false;
          document.formularioEgresado.nombre.focus();
        }
        if (/^[a-zA-Z]{2}\d{4}[a-zA-Z]{2}\d{3}$/.test(formulario.matricula.value)==false ) {
          swal("¡Matricula incorrecta!", "Seguir formato EH1234SC123", "error");
          todoCorrecto=false;
          document.formularioEgresado.matricula.focus();
        }
        if (/^\S[a-zA-Z\sñáéíóú]{2,60}$/.test(formulario.titulo.value)==false){
          swal("¡Titulo Incorrecto!", "Bien escrito, sin números o carácteres especiales", "error");
          todoCorrecto=false;
          document.formularioEgresado.titulo.focus();
        }
        if (/^\d{4}$/.test(formulario.anioTitulo.value)==false){
          swal("¡Año de egreso Incorrecto!", "Ejemplo: 2016, sin carácteres especiales o letras", "error");
          todoCorrecto=false;
          document.formularioEgresado.anioTitulo.focus();
        }
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(formulario.correo.value)==false){
          swal("¡E-mail no valido!", "Ejemplo: segumiento_2016@ueh.com", "error");
          todoCorrecto=false;
          document.formularioEgresado.correo.focus();
        }
        if (todoCorrecto == true) {
          formulario.submit();
        }

      }
    </script>
<?php include "../config/pie.inc"; ?>
