<?php
  include ('../conexion/conexion.php'); 
  $fecha = $_POST['dia3'];
  $fecha2 = $_POST['dia4'];
  if (!isset($_POST['dia3'])) {
    header('Location: graficos.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/hoja_graficos.css">
  <link rel="icon" type="image/x-icon" href="../imagenes/gam.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- 	aqui van las librerias necesarias para los graficos-->
  	 <script src="https://code.highcharts.com/highcharts.js"></script>
  	 <script src="https://code.highcharts.com/modules/exporting.js"></script>
  	 <script src="https://code.highcharts.com/modules/export-data.js"></script>
  	 <script src="https://code.highcharts.com/modules/accessibility.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	 <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
   <script src="https://code.highcharts.com/modules/variable-pie.js"></script>

 
	<title>Graficos Inducción</title>
</head>
<body onload="ini()" onscroll="parar();" onkeypress="parar()" onclick="parar()" style="background: linear-gradient(to bottom, rgba(166, 218, 231, 0.49), white);">
<form id="formulario1" action="../salir.php" method="POST" >
                <input style="display: none;" type="radio" name="nomusuario" value="<?php echo$nomusuario;  ?>" checked>
              <input style="display: none;" type="radio" name="fecha1" value="<?php echo $fecha1;  ?>" checked>
              <input style="display: none;" type="radio" name="fecha2" value="<?php echo $fecha2;  ?>" checked>
           
</form>

<!--   Validacion de resultados-->
<?php
     $registro="SELECT COUNT(P1) FROM induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
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
<label style="align-content: center;" >Respuestas del <?php echo "$fecha al $fecha2" ; ?></label>

<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 1-->
 <div class="padre" id="uno" style="overflow: hidden;" >
 <strong><h2> ¿La información previa que se te brindo acerca de este día de inducción fue clara y oportuna (fecha, horarios, tema, liga, expositor)?</h2></strong> 

<!--  GRAFICO DE PASTEL l
 --> 
<div >
    <table border="1" id=""  style="background-color: #EAFAF1;  float:left; margin-left: 170px;" >
        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS
    -->                 Respuestas: <?php
     $numero="SELECT COUNT(P1) FROM induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
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
        $sql="SELECT * from induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
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
      <div id="containerP1" style="width: 60%; height: auto;"></div>
     </div>
     <br>
     <br>
    </div>




<!-- Matriz-->

<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 2-->

  <div style=" margin: 5px; margin-right: 5px;" class="padre" id="dos">
    
     <strong><h2>Considerando que 1 es la mínima y 5 la máxima en puntuación, ayúdanos a evaluar el curso de hoy en los siguientes puntos:</h2></strong> 
     <div  style="width: 50%; float: left;" >
              <table   id="tabla" class="" style="background-color: #EAFAF1;" >
                  <tr>
                     <th scope="row" class="info"> </th>
                     <th class="numeracion"> 1 </th>
                     <th class="numeracion"> 2 </th>
                     <th class="numeracion"> 3 </th>
                     <th class="numeracion"> 4 </th>
                     <th class="numeracion"> 5 </th>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>1. </strong>•   La información proporcionada fue clara  </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m1) from matrizinduccion WHERE m1 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m1)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m1) from matrizinduccion WHERE m1 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m1)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m1) from matrizinduccion WHERE m1 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m1)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m1) from matrizinduccion WHERE m1 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m1)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m1) from matrizinduccion WHERE m1 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m1)'];

                            }
                             ?>
                                
                     </td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>2. </strong>•   Se resolvieron todas tus dudas en esta sesión </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m2) from matrizinduccion WHERE m2 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m2)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m2) from matrizinduccion WHERE m2 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m2)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m2) from matrizinduccion WHERE m2 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m2)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m2) from matrizinduccion WHERE m2 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m2)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m2) from matrizinduccion WHERE m2 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m2)'];

                            }
                             ?>
                                
                     </td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>3. </strong>•   La dinámica del curso, le permitió participar activamente. </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m3) from matrizinduccion WHERE m3 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m3)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m3) from matrizinduccion WHERE m3 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m3)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m3) from matrizinduccion WHERE m3 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m3)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m3) from matrizinduccion WHERE m3 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m3)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m3) from matrizinduccion WHERE m3 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m3)'];

                            }
                             ?>
                                
                     </td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>4. </strong>•    Consideras que el tiempo destinado a cada sesión del curso fue suficiente.</td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m4) from matrizinduccion WHERE m4 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m4)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m4) from matrizinduccion WHERE m4 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m4)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m4) from matrizinduccion WHERE m4 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m4)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m4) from matrizinduccion WHERE m4 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m4)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m4) from matrizinduccion WHERE m4 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m4)'];

                            }
                             ?>
                                
                     </td>
                  </tr>

                   <tr class="celdas">
                     <td class="fondo1"><strong>5. </strong>•   Se respetaron las fechas y tiempos asignados al curso. </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m5) from matrizinduccion WHERE m5 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m5)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m5) from matrizinduccion WHERE m5 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m5)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m5) from matrizinduccion WHERE m5 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m5)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m5) from matrizinduccion WHERE m5 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m5)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m5) from matrizinduccion WHERE m5 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m5)'];

                            }
                             ?>
                                
                     </td>
                  </tr>

                   <tr class="celdas">
                     <td class="fondo1"><strong>6. </strong>•   Considera que el objetivo del curso se cumplió. </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m6) from matrizinduccion WHERE m6 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m6)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m6) from matrizinduccion WHERE m6 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m6)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m6) from matrizinduccion WHERE m6 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m6)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m6) from matrizinduccion WHERE m6 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m6)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m6) from matrizinduccion WHERE m6 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m6)'];

                            }
                             ?>
                                
                     </td>
                  </tr>
            </table>
</div>
<!-- GRAFICO NUMERO 1


 -->   

  <div  style="width: 600PX; margin-left: 100px;" id="Imatriz"></div>
<br>

    </div>


 <!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 3-->

   <div class="padre" id="dos" >
     <strong><h2>Considerando que 1 es la mínima y 5 la máxima en puntuación, ayúdanos a evaluar a nuestro instructor en los siguientes puntos: </h2></strong> 

    <div  style="width: 50%; float: left;" >

              <table  id="tabla" class="table table-striped" style="background-color: #EAFAF1;">
                  <tr>
                     <th scope="row" class="info"> </th>
                     <th class="numeracion"> 1 </th>
                     <th class="numeracion"> 2 </th>
                     <th class="numeracion"> 3 </th>
                     <th class="numeracion"> 4 </th>
                     <th class="numeracion"> 5 </th>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>1. </strong>El instructor demostró domino en los temas desarrollados. </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m7) from matrizinduccion WHERE m7 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m7)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m7) from matrizinduccion WHERE m7 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m7)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m7) from matrizinduccion WHERE m7 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m7)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m7) from matrizinduccion WHERE m7 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m7)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m7) from matrizinduccion WHERE m7 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m7)'];

                            }
                             ?>
                                
                     </td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>2. </strong>El instructor proyecto una imagen agradable y de confianza.</td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m8) from matrizinduccion WHERE m8 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m8)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m8) from matrizinduccion WHERE m8 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m8)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m8) from matrizinduccion WHERE m8 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m8)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m8) from matrizinduccion WHERE m8 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m8)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m8) from matrizinduccion WHERE m8 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m8)'];

                            }
                             ?>
                                
                     </td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>3. </strong>  El instructor despertó y mantuvo tu interés </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m9) from matrizinduccion WHERE m9 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m9)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m9) from matrizinduccion WHERE m9 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m9)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m9) from matrizinduccion WHERE m9 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m9)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m9) from matrizinduccion WHERE m9 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m9)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m9) from matrizinduccion WHERE m9 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m9)'];

                            }
                             ?>
                                
                     </td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>4. </strong> El instructor utilizo un lenguaje apropiado y entendible para ti .</td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m10) from matrizinduccion WHERE m10 = '1' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m10)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m10) from matrizinduccion WHERE m10 = '2' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m10)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m10) from matrizinduccion WHERE m10 = '3' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m10)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m10) from matrizinduccion WHERE m10 = '4' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m10)'];

                            }
                             ?>
                                
                     </td>
                     <td>       
                          <?php 
                            $sql="SELECT COUNT(m10) from matrizinduccion WHERE m10 = '5' AND fecha BETWEEN '$fecha' AND '$fecha2'";
                            $result=mysqli_query($conexion,$sql);

                            while($mostrar=mysqli_fetch_array($result)){
                               echo $mostrar['COUNT(m10)'];

                            }
                             ?>
                                
                     </td>
                  </tr>
            </table>
        </div>
     <div  style="width: 600PX; margin: 5px;" id="Imatriz2"></div>
    </div> 

<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 4-->

 

  <div class="padre" id="5" >
    <span>
        <h2>¿Qué información necesitas para continuar con esta carrera como agente de seguros?</h2>
    </span>
      <table border="1" id="" align="center" style="background-color: #EAFAF1;">
        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS -->
                 Respuestas: <?php
     $numero="SELECT COUNT(P4P) FROM induccion where P4P != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P4P)'];}
     ?>         
                </H3> 
            </td>       
        </tr>
    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS -->        
        <?php 
        $sql="SELECT P4P from induccion where P4P != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
         ?>
            <td><?php echo $mostrar['P4P'] ?></td>
        </tr>
    <?php 
    }
     ?>
     </table>
    </div>




<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 5-->

    <div class="padre" id="cinco" >
    <span>
   <h2> Si pudiéramos mejorar partes de este curso. ¿Qué cambiarias?
   </h2>
    </span>
   <span>
      <table border="1" id="" align="center" style="background-color: #EAFAF1;">
        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS -->
                 Respuestas: <?php
     $numero="SELECT COUNT(P5P) FROM induccion where P5P != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P5P)'];}
     ?>         
                </H3> 
            </td>       
        </tr>
    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS -->        
        <?php 
        $sql="SELECT P5P from induccion where P5P != '' AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
         ?>
            <td><?php echo $mostrar['P5P'] ?></td>
        </tr>
    <?php 
    }
     ?>
     </table>
   </span>
    </div>






<!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 7-->


    <!-- ESTE DIV MUESTRA LOS RESULTADOS DE LA PREGUNTA 1-->
 <div class="padre" id="uno" >
 <strong><h2> ¿La información previa que se te brindo acerca de este día de inducción fue clara y oportuna (fecha, horarios, tema, liga, expositor)?</h2></strong> 
    <table border="1" id="" align="center" style="background-color: #EAFAF1;  float:left; margin-left: 170px;">
        <tr>
            <td>
                <H3>
    <!--     CONSULTA QUE MUSTRA LA CANTIDAD DE RESPUESTAS
    -->                 Respuestas: <?php
     $numero="SELECT COUNT(P6) FROM induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P6)'];}
     ?>         
                </H3> 
            </td>       
            <td><h3>¿Por qué?</h3></td>
        </tr>


    <!-- CONSULTA QUE MUESTRA LAS RESPUESTAS-->
            <?php 
        $sql="SELECT * from induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2'";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            $numero = $mostrar['P6'];
         ?>
            <td><?php if ($numero == 1) {
                echo "Si";
            } else {
                echo "No";
            }?></td>

            <td>
                <?php echo $mostrar['PQ6'];?>
            </td>
        </tr>
    <?php 
    }
     ?>
     </table>
           <div id="containerP6" style="width: 60%; height: auto;"></div>

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
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Si',
            y: <?php
     $numero="SELECT COUNT(P1) FROM induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P1 = '1'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P1)'];}
     ?>   ,
            sliced: true,
            selected: true
        }, {
            name: 'No',
            y: <?php
     $numero="SELECT COUNT(P1) FROM induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P1 = '2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P1)'];}
     ?>
        }]
    }]
});



/* ============================
    GRAFICO pregunta 1
============================= */

Highcharts.chart('containerP6', {
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
     $numero="SELECT COUNT(P6) FROM induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P1 = '1'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P6)'];}
     ?>   ,
            sliced: true,
            selected: true
        }, {
            name: 'No',
            y: <?php
     $numero="SELECT COUNT(P6) FROM induccion WHERE fecha BETWEEN '$fecha' AND '$fecha2' AND P1 = '2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(P6)'];}
     ?>
        }]
    }]
});


/* ==========================
        GRAFICO MATRIZ
============================= */

Highcharts.chart('Imatriz', {
    chart: {
          backgroundColor: 'transparent ',
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
            'Pregunta:1',
            'Pregunta:2',
            'Pregunta:3',
            'Pregunta:4',
            'Pregunta:5',
            'Pregunta:6'
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
     colors: ['#F1948A ', '#F8C471 ', '#F7DC6F ', '#82E0AA ', '#85C1E9 '],
    series: [{
        name: 'En total desacuerdo',
        data: [<?php

   $prueba="SELECT COUNT(m1) FROM matrizinduccion where m1 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m1)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m2) FROM matrizinduccion where m2 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m2)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m3) FROM matrizinduccion where m3 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m3)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m4) FROM matrizinduccion where m4 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m4)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m5) FROM matrizinduccion where m5 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m5)']; }
    ?>,<?php

   $prueba="SELECT COUNT(m6) FROM matrizinduccion where m6 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m6)']; }
 
    ?>]
    }, {
        name: 'En desacuerdo',
        data: [<?php

   $prueba="SELECT COUNT(m1) FROM matrizinduccion where m1 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m1)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m2) FROM matrizinduccion where m2 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m2)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m3) FROM matrizinduccion where m3 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m3)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m4) FROM matrizinduccion where m4 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m4)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m5) FROM matrizinduccion where m5 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m5)']; }
    ?>,<?php

   $prueba="SELECT COUNT(m6) FROM matrizinduccion where m6 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m6)']; }
    ?>]
    }, {
        name: 'Neutral',
        data: [<?php

   $prueba="SELECT COUNT(m1) FROM matrizinduccion where m1 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m1)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m2) FROM matrizinduccion where m2 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m2)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m3) FROM matrizinduccion where m3 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m3)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m4) FROM matrizinduccion where m4 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m4)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m5) FROM matrizinduccion where m5 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m5)']; }
    ?>,<?php

   $prueba="SELECT COUNT(m6) FROM matrizinduccion where m6 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m6)']; }
    ?>]
    }, {
        name: 'De acuero',
        data: [<?php

   $prueba="SELECT COUNT(m1) FROM matrizinduccion where m1 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m1)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m2) FROM matrizinduccion where m2 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m2)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m3) FROM matrizinduccion where m3 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m3)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m4) FROM matrizinduccion where m4 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m4)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m5) FROM matrizinduccion where m5 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m5)']; }
    ?>,<?php

   $prueba="SELECT COUNT(m6) FROM matrizinduccion where m6 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m6)']; }
    ?>]
    }, {
        name: 'En total acuerdo',
        data: [<?php

   $prueba="SELECT COUNT(m1) FROM matrizinduccion where m1 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m1)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m2) FROM matrizinduccion where m2 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m2)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m3) FROM matrizinduccion where m3 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m3)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m4) FROM matrizinduccion where m4 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m4)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m5) FROM matrizinduccion where m5 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m5)']; }
    ?>,<?php

   $prueba="SELECT COUNT(m6) FROM matrizinduccion where m6 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m6)']; }
    ?>]
    }]
});




/* ============================
        grafico P3 INDUCCION
============================= */
/* ==========================
        GRAFICO MATRIZ
============================= */

Highcharts.chart('Imatriz2', {
    chart: {
          backgroundColor: 'transparent ',
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
            'Pregunta:1',
            'Pregunta:2',
            'Pregunta:3',
            'Pregunta:4'
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
        colors: ['#F1948A ', '#F8C471 ', '#F7DC6F ', '#82E0AA ', '#85C1E9 '],
    series: [{
        name: 'En total desacuerdo',
        data: [<?php

   $prueba="SELECT COUNT(m7) FROM matrizinduccion where m7 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m7)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m8) FROM matrizinduccion where m8 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m8)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m9) FROM matrizinduccion where m9 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m9)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m10) FROM matrizinduccion where m10 = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m10)']; }
    ?>]
    }, {
        name: 'En desacuerdo',
        data: [<?php

   $prueba="SELECT COUNT(m7) FROM matrizinduccion where m7 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m7)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m8) FROM matrizinduccion where m8 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m8)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m9) FROM matrizinduccion where m9 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m9)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m10) FROM matrizinduccion where m10 = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m10)']; }
    ?>]
    }, {
        name: 'Neutral',
        data: [<?php

   $prueba="SELECT COUNT(m7) FROM matrizinduccion where m7 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m7)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m8) FROM matrizinduccion where m8 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m8)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m9) FROM matrizinduccion where m9 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m9)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m10) FROM matrizinduccion where m10 = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m10)']; }
    ?>]
    }, {
        name: 'De acuero',
        data: [<?php

   $prueba="SELECT COUNT(m7) FROM matrizinduccion where m7 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m7)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m8) FROM matrizinduccion where m8 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m8)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m9) FROM matrizinduccion where m9 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m9)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m10) FROM matrizinduccion where m10 = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m10)']; }
    ?>]
    }, {
        name: 'En total acuerdo',
        data: [<?php

   $prueba="SELECT COUNT(m7) FROM matrizinduccion where m7 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m7)']; }
    ?>,/*separador*/ <?php

   $prueba="SELECT COUNT(m8) FROM matrizinduccion where m8 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m8)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m9) FROM matrizinduccion where m9 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m9)']; }
    ?>,/*separador*/  <?php

   $prueba="SELECT COUNT(m10) FROM matrizinduccion where m10 = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
        $resPrueba=mysqli_query($conexion,$prueba);
    while($data=mysqli_fetch_array($resPrueba)){
    echo $data['COUNT(m10)']; }
    ?>]
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
     $numero="SELECT COUNT(escala) FROM induccion where escala = 0 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    }, {
        name: 'Puntaje 1',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 1 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    }, {
        name: 'Puntaje 2',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 2 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    }, {
        name: 'Puntaje 3',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 3 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    },{
        name: 'Puntaje 4',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 4 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    },{
        name: 'Puntaje 5',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 5 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    },{
        name: 'Puntaje 6',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 6 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    },{
        name: 'Puntaje 7',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 7 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    },{
        name: 'Puntaje 8',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 8 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    },{
        name: 'Puntaje 9',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 9 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
     ?> ]

    },{
        name: 'Puntaje 10',
        data: [<?php
     $numero="SELECT COUNT(escala) FROM induccion where escala = 10 AND fecha BETWEEN '$fecha' AND '$fecha2'";
     $nombres=mysqli_query($conexion,$numero);
     while($mos=mysqli_fetch_array($nombres)){
     echo $mos['COUNT(escala)'];}
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