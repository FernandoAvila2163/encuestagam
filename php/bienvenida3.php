<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>¡Tú opinión nos interesa!</title>
    <!--HOJAS DE ESTILO-->
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/hoja_bienvenida1.css">

    <!--LIBRERIAS UTILIZADAS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--FAVICON-->
    <link rel="icon" type="image/x-icon" href="../imagenes/gam.ico">

</head>

<body>
    <!--DIV PARA EL FONDO-->
    <div class="area">
        <!--FORMAS PARA LA ANIMACION-->
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
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="bienvenida">
                            <label>¡Bienvenido!</label>
                        </div>

                        <p>
                           Para GAM es muy importante conocer tu opinión y la experiencia que tuviste en nuestro “Viernes de Entrenamiento”, con la finalidad de mejorar nuestros servicios para tu desarrollo laboral. 
                           <br><br>
                           <strong>¡QUEREMOS ESCUCHARTE!</strong>
                        </p>
                    </div>
                    <section class="botones">
                        <div id="separar">
                            <a style=text-decoration:none; href="../php/platicas.php">
                                <span class="boton3">INICIAR ENCUESTA</span>
                            </a>
                        </div>
                    </section>

                </div>
            </div>

        </div>


        <!--PIE DE PAGINA-->
        <footer>
            <div class="container text-center">
                <span>Software GAM <sup>©</sup> Todos los Derechos Reservados.</span>
            </div>
        </footer>


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