<?php   
  include ('conexion/conexion.php');
  date_default_timezone_set("America/Mexico_City");
  
  


  $conexion = conexion();
	session_start();
	date_default_timezone_set('America/Mexico_City');
	$hoy = date("Y-m-d");
	$nomusuario = $_SESSION['nomusuario'];
  
    

  if (!isset($_SESSION["nomusuario"])) {
    
    ?>
    <script>
    window.location = 'login.php';
</script>

<?php
}



?>


<!DOCTYPE html>
<html>
<head><meta charset="gb18030">

  <title>Grafico</title>
<!--CSS-->
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/hoja_inicial.css">
<!--FAVICON-->
  <link rel="icon" type="image/x-icon" href="imagenes/gam.ico">
</head>

  <body onload="ini()" onscroll="parar();" onkeypress="parar()" onclick="parar()">

<!--DIV PARA EL FONDO--> 
  <div class="area">
            <ul class="circles"> <!--FORMAS PARA LA ANIMACION-->
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
        <!--BOTONES PARA LA ENCUESTA-->   
<div align="right">
  <input class="botonsalir" type="button" style="border-color: red; width: 100px; height: 30px; opacity: .6; " id="juntas" value="Salir"  onclick="enviar();">
</div>
        



<form id="formulario1" action="salir.php" method="POST" >
                <input style="display: none;" type="radio" name="nomusuario" value="<?php echo$nomusuario;  ?>" checked>
              <input style="display: none;" type="radio" name="fecha1" value="<?php echo $fecha1;  ?>" checked>
              <input style="display: none;" type="radio" name="fecha2" value="<?php echo $fecha2;  ?>" checked>
           
</form>





    
    <div id="botones" align="center" class="botones">
  <div class="box-1" > 
          <a style=text-decoration:none; onclick="juntas();">
          <div class="btn btn-one" id="leyenda1">
            <span><strong>Graficos Juntas</strong></span>
          </div>
          </a>
  <form id="form1" method="POST" action="graficos/graficosjuntas.php" style="display: none;">
  <label class="izq" id="etiqueta1">Desde</label>
  <input class="izq" type="date" name="dia" id="dia" value="<?php echo date('Y-m-d');?>" required="">
  <label class="izq" id="etiqueta2">Hasta</label>
  <input class="izq" type="date" name="dia2" id="dia2" value="<?php echo date('Y-m-d');?>" required="">
  <input class="botonGraficos" id="graficar" type="submit" name="" value="GRAFICAR">
  </form>
  </div>
      

        <!-- Hover #2 -->
        <div class="box-2">
          <a style=text-decoration:none; onclick="induccion();">
          <div class="btn btn-two" id="leyenda2">
            <span><strong>Graficos Inducción</strong></span>
          </div>
          </a>
  <form id="form2" method="POST" action="graficos/graficosinduccion.php" style="display: none;">
  <label class="centro" id="etiqueta3" >Desde</label>
  <input class="centro" type="date" name="dia3" id="dia3" value="<?php echo date('Y-m-d');?>"  required="">
  <label class="centro" id="etiqueta4" >Hasta</label>
  <input class="centro" type="date" name="dia4" id="dia4" value="<?php echo date('Y-m-d');?>"  required="">
  <input class="botonGraficos" id="graficarI" type="submit" name="" value="GRAFICAR" >
  </form>
        </div>
        
        <!-- Hover #3 -->
        <div class="box-3">
          <a style=text-decoration:none; onclick="platicas();">
          <div class="btn btn-three" id="leyenda3">
            <span><strong>Viernes de Entrenamiento</span>
          </div>
          </a>
  <form id="form3" method="POST" action="graficos/graficosplaticas.php" style="display: none;">
  <label id="etiqueta5">Desde</label>
  <input type="date" name="dia5" id="dia5" value="<?php echo date('Y-m-d');?>" required="">
  <label id="etiqueta6">Hasta</label>
  <input type="date" name="dia6" id="dia6" value="<?php echo date('Y-m-d');?>" required="">
  <input class="botonGraficos" id="graficarP" type="submit" name="" value="GRAFICAR">
  </form>
  </div>
  
  
 
  
    </div>
  
  </div>

<!--PIE DE PAGINA-->
    <footer align="center">
      <div class="container text-center">
        <span>Software GAM <sup>©</sup> Todos los Derechos Reservados.</span>
      </div>
    </footer>

    </div >

  </body>
 </html>


<script type="text/javascript">





  
  
  function juntas(){
    document.getElementById('form1').style.display = "block" 
    document.getElementById('form2').style.display = "none" 
    document.getElementById('form3').style.display = "none" 
    document.getElementById('leyenda1').style.display = "none"
    document.getElementById('leyenda2').style.display = "block"
    document.getElementById('leyenda3').style.display = "block"


  }


  function induccion(){
    document.getElementById('form1').style.display = "none" 
    document.getElementById('form2').style.display = "block" 
    document.getElementById('form3').style.display = "none" 
    document.getElementById('leyenda1').style.display = "block"
    document.getElementById('leyenda2').style.display = "none"
    document.getElementById('leyenda3').style.display = "block"

  } 
  
    function induccion2(){
    document.getElementById('form4').style.display = "block" 
    document.getElementById('leyenda2').style.display = "none"

  } 


  function platicas(){
    document.getElementById('form1').style.display = "none" 
    document.getElementById('form2').style.display = "none" 
    document.getElementById('form3').style.display = "block" 
    document.getElementById('leyenda1').style.display = "block"
    document.getElementById('leyenda2').style.display = "block"
    document.getElementById('leyenda3').style.display = "none"
  }



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
  inactividad = setTimeout('location="login.php"',600000); // 5 segundos
}



</script>


