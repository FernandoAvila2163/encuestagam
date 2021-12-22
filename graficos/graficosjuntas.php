<?php   
  include ('../conexion/conexion.php'); 
  
  $fecha = $_POST['dia'];
  $fecha2 = $_POST['dia2'];
    if (!isset($_POST['dia'])) {
    header('Location: graficos.php');
  }
?>


<!DOCTYPE html>
<html>
<head>

	<title>Graficos Juntas</title>
<!-- 	se mandan a llamar los graficos-->	
<link rel="stylesheet" type="text/css" href="../css/hoja_graficos.css">
<link rel="icon" type="image/x-icon" href="../imagenes/gam.ico">
<!-- 	aqui van las librerias necesarias para los graficos-->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
  <!-- barras  -->
  </head>

  <body onload="ini()" onscroll="parar();" onkeypress="parar()" onclick="parar()" style="background: linear-gradient(to bottom, rgba(166, 218, 231, 0.49), white);">
<form id="formulario1" action="../salir.php" method="POST" >
                <input style="display: none;" type="radio" name="nomusuario" value="<?php echo$nomusuario;  ?>" checked>
              <input style="display: none;" type="radio" name="fecha1" value="<?php echo $fecha1;  ?>" checked>
              <input style="display: none;" type="radio" name="fecha2" value="<?php echo $fecha2;  ?>" checked>
           
</form>
<!--   Validacion de resultados-->
<?php
     $registro="SELECT COUNT(P1) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
     $resultado=mysqli_query($conexion,$registro);
     while($mos=mysqli_fetch_array($resultado)){
     if ($mos['COUNT(P1)'] == 0) {
 echo'<script type="text/javascript">
    alert("NO HAY RESULTADOS ENTRE LAS FECHAS SELECCIONADAS");
    window.history.back();
    </script>';
    exit;
}}
     ?>
<input class="botonGraficos" type="button" name="" id="juntas" value="Regresar"  onclick=" window.history.back();">
<label>Respuestas del </label><?php echo "$fecha al $fecha2" ; ?>




<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 1-->
 <div class="padre" id="uno" style="overflow: hidden;">
 <strong><h2> ¿La información previa que se te brindo acerca de este día de inducción fue clara y oportuna (fecha, horarios, tema, liga, expositor)?</h2></strong> 

<div >
    <table border="1" id="" style="background-color: #EAFAF1; float: left; margin-left: 150px;" >

        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS
    -->                 Respuestas <?php
     $numero="SELECT COUNT(P1) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P1)'];}
     ?>         
                </H3> 
            </td>       
            <td><h3>¿Por qué?</h3></td>
        </tr>


    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS-->
            <?php 
        $sql="SELECT * from juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            $numero = $mostrar['P1'];
         ?>
            <td><?php if ($numero == 1) {
                echo "Si";
            } else {
                echo "No";
            }?></td>

            <td>
                <?php echo $mostrar['PQ1'];?>
            </td>
        </tr>
    <?php 
    }
     ?>
     </table>
      <!--  GRAFICO DE PASTEL l
 -->  <div id="containerP1" style=" width: 60%; height: auto;"></div>
     </div>
     <br>
     <br>
    </div>





<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 2-->

 <div class="padre" id="uno" style="overflow: hidden;" >
 <strong><h2> ¿Consideras que la información y/o herramientas de esta reunión ayudan a mejorar y/o aumentar tus ventas?</h2></strong> 
      <table border="1" id="" style="background-color: #EAFAF1; float: left; margin-left: 150px;" >

        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS
    -->                 Respuestas <?php
     $numero="SELECT COUNT(P2) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P2)'];}
     ?>         
                </H3> 
            </td>       
            <td><h3>¿Por qué?</h3></td>
        </tr>


    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS-->
            <?php 
        $sql="SELECT * from juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            $numero = $mostrar['P2'];
         ?>
            <td><?php if ($numero == 1) {
                echo "Si";
            } else {
                echo "No";
            }?></td>

            <td>
                <?php echo $mostrar['PQ2'];?>
            </td>
        </tr>
    <?php 
    }
     ?>
     </table>
      <!--  GRAFICO DE PASTEL l
 -->  <div id="containerP2" style=" width: 60%; height: auto;"></div>
     </div>
     <br>
     <br>
    </div>



<!-- PREGUNTA 3-->

     <div class="padre" id="cinco" >
    <span>
   <h2> ¿Observas algo que se pueda mejorar en las reuniones de nuestras juntas semanales? Por favor, déjanos saber tu opinión: </h2>
    </span>
    <table border="1" id="" align="center" style="background-color: #EAFAF1;" >
        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS --> 
                Respuestas <?php
     $numero="SELECT COUNT(P3) FROM juntas where P3 != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P3)'];}
     ?>         
                </H3> 
            </td>       
        </tr>
    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS --> 
       <?php 
        $sql="SELECT P3 from juntas where P3 != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
         ?>
            <td><?php echo $mostrar['P3'] ?></td>
        </tr>
    <?php 
    }
     ?>
     </table>
    </div>


<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 4-->

 <div class="padre" id="uno" style="overflow: hidden;" >
 <strong><h2>En general, ¿Cómo evalúas las juntas semanales que te brinda GAM?</h2></strong> 
    <table border="1" id="" align="center"  style="background-color: #EAFAF1; float: left; margin-left: 150px;" >
        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS
    -->                 Respuestas <?php
     $numero="SELECT COUNT(P4) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P4)'];}
     ?>         
                </H3> 
            </td>       
            <td><h3>¿Por qué?</h3></td>
        </tr>


    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS-->
            <?php 
        $sql="SELECT * from juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            $numero = $mostrar['P4'];
         ?>
            <td><?php if ($numero == 1) {
                echo "MUY BIEN";
            } else if ($numero == 2) {
                echo "REGULAR";
            }  else if ($numero == 3){

                 echo "MALO";
            }?></td>

            <td>
                <?php echo $mostrar['PQ4'];?>
            </td>
        </tr>
    <?php 
    }
     ?>
     </table>
     <div id="containerP4" style=" width: 60%; height: auto;"></div>
    </div>
    </div>




<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 5-->

   <div class="padre" id="cinco" >
    <span>
   <h2> ¿Qué temas te gustaría que abordáramos en nuestras reuniones próximas, que te ayuden a mejorar tus ventas, crecer personalmente e ir formando tu propia empresa? </h2>
    </span>
    <table border="1" id="" align="center"  style="background-color: #EAFAF1;" >
        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS --> 
                Respuestas <?php
     $numero="SELECT COUNT(P5) FROM juntas where P5 != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P5)'];}
     ?>         
                </H3> 
            </td>       
        </tr>
    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS --> 
       <?php 
        $sql="SELECT P5 from juntas where P5 != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
         ?>
            <td><?php echo $mostrar['P5'] ?></td>
        </tr>
    <?php 
    }
     ?>
     </table>
    </div>




<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 6-->

       <div class="padre" id="cinco" >
    <span>
   <h2> Tu opinión es muy importante, si tienes algún comentario favor de agregarlo </h2>
    </span>
    <table border="1" id="" align="center" style="background-color: #EAFAF1;" >
        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS --> 
                Respuestas <?php
     $numero="SELECT COUNT(P6) FROM juntas where P6 != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P6)'];}
     ?>         
                </H3> 
            </td>       
        </tr>
    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS --> 
       <?php 
        $sql="SELECT P6 from juntas where P6 != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
         ?>
            <td><?php echo $mostrar['P6'] ?></td>
        </tr>
    <?php 
    }
     ?>
     </table>
    </div>



 
<!--  EN ESTE DIV MUESTRA LOS RESULTADOS DE LAS ESTRELLAS -->
  <div class="padre" id="ocho" >
  <span>
 <h2>En general, ¿Cómo evalúas las juntas semanales que brindamos en GAM?</h2> 
  </span>
  
  
    <div id="estrellas"></div>


  </div>

</body>
</html>







<!-- inician las funciones de javascript -->
  <script type="text/javascript">
 



/* ============================
    GRAFICO pregunta 1
============================= */

Highcharts.chart('containerP1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
         backgroundColor: 'transparent '

    },
    title: {
        text: 'Respuestas positivas/negativas'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} Respuestas'
            }
        }
    },
        colors: ['#82E0AA ','#F1948A '],
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Si',
            y: <?php
     $numero="SELECT COUNT(P1) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P1 = '1'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P1)'];}
     ?>   ,
            sliced: true,
            selected: true
        }, {
            name: 'No',
            y: <?php
     $numero="SELECT COUNT(P1) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P1 = '2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P1)'];}
     ?>
        }]
    }]
});





/* ============================
    GRAFICO pregunta 2
============================= */

Highcharts.chart('containerP2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
         backgroundColor: 'transparent '

    },
    title: {
        text: 'Respuestas positivas/negativas'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} Respuestas'
            }
        }
    },
        colors: ['#82E0AA ','#F1948A '],
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Si',
            y: <?php
     $numero="SELECT COUNT(P2) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P2 = '1'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P2)'];}
     ?>   ,
            sliced: true,
            selected: true
        }, {
            name: 'No',
            y: <?php
     $numero="SELECT COUNT(P2) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P2 = '2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P2)'];}
     ?>
        }]
    }]
});



/* ============================
    GRAFICO pregunta 4
============================= */

Highcharts.chart('containerP4', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
         backgroundColor: 'transparent '

    },
    title: {
        text: 'Respuestas positivas/negativas'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} Respuestas'
            }
        }
    },
        colors: ['#82E0AA ','#F7DC6F ','#F1948A '],
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Muy bien',
            y: <?php
     $numero="SELECT COUNT(P4) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P4 = '1'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P4)'];}
     ?>   ,
            sliced: true,
            selected: true
        }, {
            name: 'Regular',
            y: <?php
     $numero="SELECT COUNT(P4) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P4 = '2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P4)'];}
     ?>
        }, {
            name: 'Malo',
            y: <?php
     $numero="SELECT COUNT(P4) FROM juntas WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P4 = '3'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P4)'];}
     ?>
        }]
    }]
});



/* ============================
    GRAFICO DE LAS ESTRELLAS
============================= */


Highcharts.chart('estrellas', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Respuestas',
            'En total desacuerdo',
            'En desacuerdo',
            'Neutral',
            'De acuerdo',
            'Totalmente de acuerdo'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    colors: ['#C0392B','#EC7063 ', ' #F1948A ', '#F8C471 ', '#F9E79F ', '#F7DC6F ','#D5F5E3 ', ' #ABEBC6 ', '#82E0AA ', '#AED6F1 ', '#5DADE2 '],
    series: [{
        name: 'Puntaje 0',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 0 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    }, {
        name: 'Puntaje 1',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    }, {
        name: 'Puntaje 2',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    }, {
        name: 'Puntaje 3',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    },{
        name: 'Puntaje 4',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    },{
        name: 'Puntaje 5',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    },{
        name: 'Puntaje 6',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 6 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    },{
        name: 'Puntaje 7',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 7 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    },{
        name: 'Puntaje 8',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 8 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    },{
        name: 'Puntaje 9',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 9 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    },{
        name: 'Puntaje 10',
        data: [<?php
     $numero="SELECT COUNT(P9) FROM juntas where P9 = 10 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P9)'];}
     ?> ]

    }]
    });




/* CODIGO PARA LA inactividad */

var inactividad;
  function ini() {
  inactividad = setTimeout(enviar,600000); // 5 segundos

  }


  function enviar() {
    document.forms['formulario1'].submit();
  


}


function parar() {
  clearTimeout(inactividad);
  inactividad = setTimeout(enviar,600000); // 5 segundos
}

</script>

