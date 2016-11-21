<?php
include "../config/cabecera.inc"; 
  include "../config/config.inc"; 

  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
  mysqli_set_charset($conexion, "utf8");

  $peticion = "SELECT * FROM casoexito WHERE estado = 'Activo1'";
  $resultado = mysqli_query($conexion, $peticion);

  $peticion2 = "SELECT * FROM casoexito WHERE estado = 'Activo2'";
  $resultado2 = mysqli_query($conexion, $peticion2);

  $peticion3 = "SELECT * FROM casoexito WHERE estado = 'Activo3'";
  $resultado3 = mysqli_query($conexion, $peticion3);

  $peticion4 = "SELECT * FROM casoexito WHERE estado = 'Activo4'";
  $resultado4 = mysqli_query($conexion, $peticion4);
?>