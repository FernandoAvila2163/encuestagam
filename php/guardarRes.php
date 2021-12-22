<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>¡Guardando resultados!</title>
      <link rel="stylesheet" type="text/css" href="../css/estilos.css">
      <link rel="stylesheet" type="text/css" href="../css/hoja_divs.css">
      <!--LIBRERIAS-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <!--FAVICON-->
      <link rel="icon" type="image/x-icon" href="../imagenes/gam.ico">
</head>

<body onload="finalizar();">

      <!--DIV PARA EL FONDO-->
      <div class="area">
            <div class="progress">
                  <div id="barra" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>
            <!--FORMAS PARA LA ANIMACION DE FONDO-->
            <ul class="circles">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
            </ul>
            <script type="text/javascript">
                  $(document).ready(finalizar);

                  function finalizar(jQuery) {
                        Swal.fire({
                              icon: 'success',
                              title: 'Respuestas guardadas',
                              text: '¡Gracias!',
                              allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
                        }).then(function() {
                              window.location = "../index.php";
                        });
                        $('#barra').css('width', '100%');
                  }
            </script>
</body>

</html>

<?php

include ('../conexion/conexion.php'); 
date_default_timezone_set("America/Mexico_City");
$time = time();
$fecha = date("Y-m-d", $time);

/*SE INSERTA EL VALOR DE LA PREGUNTA NUMERO 1*/
$P1 = $_POST['radio'];
$PQ1 = $_POST['porq1'];
$P3 = "";
$P3P = $_POST['Nop1'];
$P4 = "";
$P4P = $_POST['Nop2'];
$P5 =  "";
$P5P = $_POST['nNo3'];
$P6 = $_POST['radioF'];
$PQ6 = $_POST['porq6'];
$stars = $_POST["rating"];

$insertsql = "INSERT INTO induccion (P1,PQ1,P3,P3P,P4,P4P,P5,P5P,P6,PQ6,escala,fecha) VALUES ('$P1','$PQ1','$P3','$P3P','$P4','$P4P','$P5','$P5P','$P6','$PQ6','$stars','$fecha')";

/*DATOS DE LA MATRIZ*/
$radio3 = $_POST["radio3"];
$radio4 = $_POST["radio4"];
$radio5 = $_POST["radio5"];
$radio6 = $_POST["radio6"];
$radio7 = $_POST["radio7"];
$radio8 = $_POST["radio8"];
$radio9 = $_POST["radio33"];
$radio10 = $_POST["radio44"];
$radio11 = $_POST["radio55"];
$radio12 = $_POST["radio66"];
$radio13 = 0;
$radio14 = 0;
$insert1 = "INSERT INTO matrizinduccion (m1,m2,m3,m4,m5,m6,m7,m8,m9,m10,m11,m12,fecha) VALUES ('$radio3','$radio4','$radio5','$radio6','$radio7','$radio8','$radio9','$radio10','$radio11','$radio12','$radio13','$radio14','$fecha')";


$conexion->query($insertsql);
$conexion->query($insert1);
?>


<!-- FUNCION PARA DESACTIVAR EL CLICK DERECHO -->
<script>
      window.oncontextmenu = function() {
            return false;
      }
      window.onload = function() {
            document.addEventListener("contextmenu", function(e) {
                  e.preventDefault();
            }, false);
            document.addEventListener("keydown", function(e) {
                  //document.onkeydown = function(e) {
                  // "I" key
                  if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                        disabledEvent(e);
                  }
                  // "J" key
                  if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                        disabledEvent(e);
                  }
                  // "S" key + macOS
                  if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                        disabledEvent(e);
                  }
                  // "U" key
                  if (e.ctrlKey && e.keyCode == 85) {
                        disabledEvent(e);
                  }
                  // "F12" key
                  if (event.keyCode == 123) {
                        disabledEvent(e);
                  }
            }, false);

            function disabledEvent(e) {
                  if (e.stopPropagation) {
                        e.stopPropagation();
                  } else if (window.event) {
                        window.event.cancelBubble = true;
                  }
                  e.preventDefault();
                  return false;
            }
      }
</script>