<?php 

function conexion()
{
      $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "gamse627_encuestagam";
    $conexion = mysqli_connect($servidor, $usuario, $password, $bd) or die("error");
    $conexion->set_charset("utf8");
    return $conexion;
}

$conexion = conexion();
 ?>