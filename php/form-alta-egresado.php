<?php include "../config/cabecera.inc" ?>
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
    </head>
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
    <div  class="container">
      <div class="row">
        <div class="col-xs-12">
          <img class="center-block img-responsive" id="titulo" src="../img/sde.png" alt="titulo" />
        </div>
      </div>
    </div>
</div>

<style>
	body{
		background: #fff url(../img/fondodark.jpg) repeat;
	}
	.portada{
		padding-top: 50px;
	}
	.formulario{
		margin-top: 150px;
	}
	.icono-atras{
		margin-top: 5px;
	}
	label{
		text-align: right;
		font-size: 2rem;
	}
	.formulario-container{
		background-color: #eee;
		border: 2px solid #131313;
		padding-bottom: 80px;
	}
	h1{
		color: #131313;
		text-align: center;
		margin-bottom: 50px;
	}
	#submit, #atras{
		border-radius: 0px;
	}
	#submit{
		height: 45px;
	}
	.form-control{
		border-radius: 0px;
	}
	#mensaje-rectora{
		margin-top: 50px;
		margin-bottom: 100px;
	}
</style>
<body>
<div class="formulario">
	<div class="container formulario-container">
		<h1>¡Registrate egresado!</h1>
		<div class="row">
			<form name ="formularioContacto" action="alta-egresados.php" method="POST" class="form-horizontal" autocomplete="off">
			   <div class="form-group">
			    <label for="nombre-egresado" class="col-sm-4 control-label">Nombre completo: </label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="nombre-egresado" name="nombre-egresado" required>
			      <p id="texto-ayuda-1" class="help-block">No olvides utilizar mayusculas y acentos.</p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="matricula-egresado" class="col-sm-4 control-label">Matricula: </label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="matricula" name="matricula-egresado" required>
			      <p id="texto-ayuda-2" class="help-block">Sigue el formato EH1202SC389.</p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="titulo-egresado" class="col-sm-4 control-label">Carrera: </label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="titulo-egresado" name="titulo-egresado" required>
			      <p id="texto-ayuda-3" class="help-block">Licenciatura que realizaste.</p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="anio-egreso" class="col-sm-4 control-label">Año de egreso: </label>
			    <div class="col-sm-6">
			      <input type="date" class="form-control" id="anio-egreso" name="anio-egreso" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="telefono-egresado" class="col-sm-4 control-label">Telefono: </label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="telefono-egresado" name="telefono-egresado" required>
			      <p id="texto-ayuda-5" class="help-block">Necesitamos tener un contacto fijo contigo.</p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="correo-egresado" class="col-sm-4 control-label">Email: </label>
			    <div class="col-sm-6">
			      <input type="email" class="form-control" id="correo-egresado" name="correo-egresado" required>
			      <p id="texto-ayuda-6" class="help-block">No lo olvides, es nuestro contacto contigo.</p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="fecha-nac-egresado" class="col-sm-4 control-label">Fecha de Nacimiento: </label>
			    <div class="col-sm-6">
			      <input type="date" class="form-control" id="fecha-nac-egresado" name="fecha-nac-egresado" required>
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="lugar-nac-egresado" class="col-sm-4 control-label">Lugar de Nacimiento: </label>
			    <div class="col-sm-6">
			      <input type="text" class="form-control" id="lugar-nac-egresado" name="lugar-nac-egresado" required>
			      <p id="texto-ayuda-8" class="help-block">Nunca hay que olvidar de donde somos..</p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="optionsRadios1" class="col-sm-4 control-label">Sexo: </label>
			    <div class="col-sm-6 sexo">
					<label class="radio-inline">
					  <input type="radio" name="sexo" id="inlineRadio1" value="H" required> Hombre
					</label>
					<label class="radio-inline">
					  <input type="radio" name="sexo" id="inlineRadio2" value="M" required> Mujer
					</label>
			    </div>
			  </div>
			  <div class="row ">
			  		<div class="col-xs-12 col-md-3"></div>
			  		<div class="col-xs-12 col-md-3"><input id="submit" class="btn btn-primary btn-lg btn-block" type="submit" value="¡Unirme!"></div>
			  	</form>
			  		<div class="col-xs-12 col-md-3"><a id="atras" class="btn btn-default btn-lg btn-block" href="../index.php" role="button">Atras</a></div>
			  		<div class="col-xs-12 col-md-3"></div>
			  </div>	
		</div>
	</div>
</div>
<div id="mensaje-rectora" class="hidden-xs">
    <div><img class="img-responsive center-block" src="../img/frase.png"></div>
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
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
<script>
	$("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-4, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8" ).css("display","none");
	$(document).ready(function(){				
	    $("#nombre-egresado").focus(function(){
	        $("#texto-ayuda-1").show();
	        $("#texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8").hide();
	    });
	    $("#matricula-egresado").focus(function(){
	        $("#texto-ayuda-2").show();	
	        $("#texto-ayuda-1, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6 #texto-ayuda-8").hide();
	    });
	    $("#titulo-egresado").focus(function(){
	        $("#texto-ayuda-3").show();
	        $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8").hide();
	    });
	    $("#anio-egreso").focus(function(){
	        $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8").hide();
	    });
	    $("#telefono-egresado").focus(function(){
	        $("#texto-ayuda-5").show();
	        $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-6, #texto-ayuda-8").hide();
	    });
	    $("#correo-egresado").focus(function(){
	        $("#texto-ayuda-6").show();
	        $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-8").hide();
	    });
	    $("#fecha-nac-egresado").focus(function(){
	        $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6, #texto-ayuda-8").hide();
	    });
	     $("#lugar-nac-egresado").focus(function(){
	        $("#texto-ayuda-8").show();
	        $("#texto-ayuda-1, #texto-ayuda-2, #texto-ayuda-3, #texto-ayuda-5, #texto-ayuda-6").hide();
	    });   
	});
	window.onload = function () {
		document.formularioContacto.addEventListener('submit', validarFormulario);
	}
	function validarFormulario(evObject) {
		evObject.preventDefault();
		var todoCorrecto = true;
		var formulario = document.formularioContacto;
		if (/^[a-zA-Z]{2}\d{4}[a-zA-Z]{2}\d{3}$/.test(formulario.matricula.value)==false ) {
			//alert ('Matricula incorrecta'); todoCorrecto=false;
			todoCorrecto=false;
			document.getElementById("texto-ayuda-2").innerHTML = "La matricula no cumple el formato ";
			$("#texto-ayuda-2").show();
			document.formularioContacto.matricula.focus();
		}
		if (todoCorrecto == true) {
			formulario.submit();
		}
	}
</script>
