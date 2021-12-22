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

<body onload="ini()" onkeypress="parar()" onclick="parar()" >
<form id="formulario1" action="../salir.php" method="POST" >
                <input style="display: none;" type="radio" name="nomusuario" value="<?php echo$nomusuario;  ?>" checked>
              <input style="display: none;" type="radio" name="fecha1" value="<?php echo $fecha1;  ?>" checked>
              <input style="display: none;" type="radio" name="fecha2" value="<?php echo $fecha2;  ?>" checked>
           
</form>

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
$fecha = date("Y-m-d");

/*SE INSERTAN LAS RESPUESTAS A LA BASE DE DATOS */

$P1 = $_POST['radio1'];
$PQ1 = $_POST['texto1'];



$P4 = $_POST['texto2'];
$P5 = $_POST['texto3'];
$escala = $_POST['rating'];
$insertsql = "INSERT INTO platicas (P1,PQ1,P4,P5,escala,fecha) VALUES ('$P1','$PQ1', '$P4','$P5','$escala','$fecha')";


/*DATOS DE LA MATRIZ*/
$radio3 = $_POST["radio33"];
$radio4 = $_POST["radio44"];
$radio5 = $_POST["radio55"];
$radio6 = $_POST["radio66"];
$radio7 = $_POST["radio77"];
$radio8 = $_POST["radio88"];

$radio9 = $_POST["radioP1"];
$radio10 = $_POST["radioP2"];
$radio11 = $_POST["radioP3"];
$radio12 = $_POST["radioP4"];
$insert1 = "INSERT INTO matrizplaticas (m1,m2,m3,m4,m5,m6,m21,m22,m23,m24,fecha) VALUES ('$radio3','$radio4','$radio5','$radio6','$radio7','$radio8','$radio9','$radio10','$radio11','$radio12','$fecha')";


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




      /* CODIGO PARA LA inactividad */

var inactividad;
  function ini() {
  inactividad = setTimeout(enviar,10000); // 5 segundos

  }


  function enviar() {
    document.forms['formulario1'].submit();
  


}


function parar() {
  clearTimeout(inactividad);
  inactividad = setTimeout(enviar,10000); // 5 segundos
}

</script>