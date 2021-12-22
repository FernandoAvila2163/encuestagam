
  <?php
  include ('conexion/conexion.php');
  date_default_timezone_set("America/Mexico_City");

  $conexion = conexion();
  session_start();
  $nomusuario = $_SESSION['nomusuario'];
$fecha1 = $_COOKIE["tiempo"];



  $fecha2=date("H:i");
  $tiempo = abs(strtotime($fecha2) - strtotime($fecha1));
  $tiempoTotal = ( $tiempo / 60 ." Minutos");
  $hoy = date("Y-m-d");

    $ti = "insert into tiemposesion(Consultor, HoraInicio, HoraFin, tiempoTotal, fecha)
    values ('$nomusuario','$fecha1','$fecha2', '$tiempoTotal', '$hoy')";
      $inserT = mysqli_query($conexion,$ti);
      session_destroy();


      header('location: login.php');
?>