<?php 
session_start();
include "../config/config.inc";

$user = $_POST['usuario'];
$contra = $_POST['contra'];

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT id_alumno, nombre, contra_alumno, usuario_alumno FROM alumno WHERE usuario_alumno = '$user' ";
$resultado = mysqli_query($conexion, $peticion);

if(mysqli_num_rows($resultado)){
	while ($fila = mysqli_fetch_array($resultado)){
		if (password_verify($contra, $fila["contra_alumno"])){
			$_SESSION["sesion"] = 1;
			$_SESSION["id_egresado"] = $fila["id_alumno"] ;
			$_SESSION["nombre_egresado"] = $fila["nombre"] ;
			echo "Ingresando...";
			echo '<meta http-equiv="Refresh" content="2;url=../index2.php">';
		}
		else{
			$_SESSION["sesion"] = 0;
			echo "Datos incorrectos, acceso denegado...";
			echo '<meta http-equiv="Refresh" content="2;url=../index.php">';
		} 
	}
}
else{
	$_SESSION["sesion"] = 0;
	echo "Datos incorrectos, acceso denegado...";
	echo '<meta http-equiv="Refresh" content="2;url=../index.php">';
}
?>
</body>
</body>