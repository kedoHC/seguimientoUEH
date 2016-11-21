<?php 
session_start();
include "../config/config.inc";

$user = $_POST['usuario'];
$contra = $_POST['contra'];

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
mysqli_set_charset($conexion, "utf8");

$peticion = "SELECT user_admin, contra_admin FROM admin WHERE user_admin = '$user' ";
$resultado = mysqli_query($conexion, $peticion);

if(mysqli_num_rows($resultado)){
	while ($fila = mysqli_fetch_array($resultado)){
		if (password_verify($contra, $fila["contra_admin"])){
			$_SESSION["sesion-admin"] = 1;
			echo "Ingresando...";
			echo '<meta http-equiv="Refresh" content="2;url=admin.php">';
		}
		else{
			$_SESSION["sesion-admin"] = 0;
			echo "Datos incorrectos, acceso denegado...";
			echo '<meta http-equiv="Refresh" content="2;url=admin-log.php">';
		} 
	}
}
else{
	$_SESSION["sesion-admin"] = 0;
	echo "Datos incorrectos, acceso denegado...";
	echo '<meta http-equiv="Refresh" content="2;url=admin-log.php">';
}
?>
</body>
</body>