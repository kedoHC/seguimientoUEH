<?php
include "../config/config.inc";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT * FROM alumno";
$resultado = mysqli_query($conexion, $peticion);
?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Panel Admin | SUEH</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="sweetalert.js"></script>
    	<link rel="stylesheet" href="sweetalert.css">
		<link rel="stylesheet" href="admin.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<style>
		h1{
			margin-top: 50px;
		}
		#login-box{
			margin-top: 65px;
			margin-bottom: 160px;
			background-color: #eee;
			
		}
		input[type=submit]{
			margin-top: 20px;
			margin-bottom: 20px;
			border-radius: 0px;
		}
		label{
			font-size: 1.8rem;
		}
		input[type=text], input[type=password]{

		}
	</style>
	<body>
		<div id="cabecera" class="contenedor">
			<div class="container">
				<div class="row">
					<div class="col-xs-3">
						<img id="escudo" class="img-responsive" src="../img/escudoNegro.png" alt="escudo">
					</div>
					<div class="col-xs-9">
						<h1>Programa Seguimiento de Egresados</h1>
						<h2>Panel de Administración</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row text-center">
				<div class="col-xs-4"></div>
				<div id="login-box" class="col-xs-4">
					<h1>ADMINISTRADOR</h1>
					<br><br>
					<form action="admin-verificar.php" method="POST">
						<label for="usuario">Usuario: </label>
						<input type="text" name="usuario" id="usuario" autocomplete="off"><br><br>
						<label for="contra">Contraseña: </label>
						<input type="password" name="contra" id="contra"><br>
						<input class="btn btn-primary btn-lg" type="submit" value="Ingresar">
					</form>
				</div>
				<div class="col-xs-4"></div>
			</div>
		</div>
	</body>
</html>
<?php include "pie.inc"; ?>