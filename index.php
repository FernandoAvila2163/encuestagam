<!DOCTYPE html>
<html>

<head>
	<title>Encuestas GAM</title>
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/hoja_inicial.css">
	<!--FAVICON-->
	<link rel="icon" type="image/x-icon" href="imagenes/gam.ico">
</head>

<body>

	<!--DIV PARA EL FONDO-->
	<div class="area">
		<ul class="circles">
			<!--FORMAS PARA LA ANIMACION-->
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
		<div id="botones" class="botones">

			<div class="box-1">
				<a style=text-decoration:none; href="php/bienvenida1.php">
					<div class="btn btn-one">
						<span><strong>Junta Semanal</strong></span>
					</div>
				</a>
			</div>

			<!-- Hover #2 -->
			<div class="box-2">
				<a style=text-decoration:none; href="php/bienvenida2.php">
					<div class="btn btn-two">
						<span><strong>Inducción</strong></span>
					</div>
				</a>
			</div>

			<!-- Hover #3 -->
			<div class="box-3">
				<a style=text-decoration:none; href="php/bienvenida3.php">
					<div class="btn btn-three">
						<span><strong>Viernes de Entrenamiento</strong></span>
					</div>
				</a>
			</div>
		</div>

		<!--PIE DE PAGINA-->
		<footer align="center">
			<div class="container text-center" align="center">
				<span>Software GAM <sup>©</sup> Todos los Derechos Reservados.</span>
			</div>
		</footer>

	</div>

</body>

</html>


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

       /*     function disabledEvent(e) {
                  if (e.stopPropagation) {
                        e.stopPropagation();
                  } else if (window.event) {
                        window.event.cancelBubble = true;
                  }
                  e.preventDefault();
                  return false;
            }
      }*/
</script>