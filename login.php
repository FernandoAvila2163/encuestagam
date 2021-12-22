<?php
  include ('conexion/conexion.php');
$conexion = conexion();
session_start();


if (isset($_POST['enviar'])) {

//declaramos como variables a los campos de texto del formulario.
$nombre=$_POST["u"];
$password=$_POST["p"];
$_SESSION['nomusuario'] = $nombre;
//Consulta del usuario y el password
$consulta="SELECT nombreUsuario,pass FROM usuario 
WHERE nombreUsuario ='$nombre' and pass ='$password'";
if($query= $conexion->query($consulta)){
$row=$query->fetch_array(); 
$nr =$query->num_rows; 


 //Si no existe lo va a enviar al login otra vez.
 if($nr <= 0) { 
  echo'<script type="text/javascript">
  alert("Datos incorrectos");
  window.location.href="login.php";
  </script>';
}  else {
  date_default_timezone_set("America/Mexico_City");
  $fecha = date("H:i");
  setcookie("tiempo", $fecha);
  echo'<script type="text/javascript">
  
  window.location.href="graficos.php";
  </script>';
}
}





}



?>






<!DOCTYPE html>
<html>
<head>
<title>Entrar!!!</title> 
<link rel="icon" type="image/x-icon" href="imagenes/gam.ico"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">

</head>
<body style="background-color: #AED6F1 ">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="imgcontainer">
    <img src="imagenes/gam.ico" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label for="uname"><b>Usuario:</b></label><br>
    <input type="text" placeholder="Nombre de Usuario" name="u" required><br>

    <label for="psw"><b>Contraseña:</b></label><br>
    <input type="password" placeholder="Contraseña" name="p" required><br><br>
    <button name="enviar" type="submit"><b>Entrar</b></button>
  </div>
    <footer align="center">
      <div class="container text-center" align="center">
        <span>Software GAM <sup>©</sup> Todos los Derechos Reservados.</span>
      </div>
    </footer>
</form>

</body>
</html>