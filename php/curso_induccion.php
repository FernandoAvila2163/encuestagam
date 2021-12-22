<?php
include ('..\conexion\conexion.php'); 
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Curso de inducción</title>

   <!--HOJAS DE ESTILO-->
   <link rel="stylesheet" type="text/css" href="../css/estilos.css">
   <link rel="stylesheet" type="text/css" href="../css/hoja_divs.css">

   <!--FAVICON-->
   <link rel="icon" type="image/x-icon" href="../imagenes/gam.ico">

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

</head>

<body>
   <!--DIV PARA EL FONDO-->
   <div class="area">
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
      <!--BARRA DE PROGRESO-->
      <div class="progress">
         <div id="barra" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
      </div>    

      <div class="container h-100">
         <div class="row align-items-center h-100">
            <div class="col-lg-12">

<!-- PRIMER PREGUNTA -->
   <div class="row">
      <div class="mx-auto">
         <div id="hijo1" class="hijos">
            <form id="formulario" action="guardarRes.php" method="POST">
            <p>¿La información previa que se te brindo acerca de este día de inducción fue clara y oportuna (fecha, horarios, tema, liga, expositor)?</p>
            <div class="container">
               <div class="row">
                  <div class="custom-radio-button">
                     <div class="custom02">
                        <input type="radio" name="radio" value="1" id="radio-c1">
                        <label for="radio-c1">Si</label>
                     </div>
                     <div class="custom02">
                        <input type="radio" name="radio" value="2" id="radio-c2">
                        <label for="radio-c2">No</label>
                     </div>

                  <div>
                     <p>¿Por qué?</p>
       
                  <textarea style="width: 1500px; background-color: #2c3e50; color: white;" id="porq1"  rows="4" class="form-control" name='porq1' onkeyup="mayus(this);" placeholder="Ingresa tu comentario aquí..."></textarea>
               </div>
       

                  </div>
               </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="float-left">
                           <section class="botones">
                              <div id="separar">
                                 <a style=text-decoration:none; href="../php/bienvenida2.php">
                                    <span class="boton3"> < </span> 
                                 </a> 
                              </div> 
                           </section> 
                        </span> 
                        <span class="float-right">
                           <section class="botones">
                              <div id="separar">
                                 <a onclick="hijo2();">
                                    <span class="boton3"> > </span>
                                 </a>
                              </div>
                           </section>
                        </span>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>

<!-- SEGUNDA PREGUNTA -->
   <div class="row">
      <div class="mx-auto">
         <div style="display: none;" id="hijo2" class="hijo2">
            <p>Considerando que 1 es la mínima y 5 la máxima en puntuación, ayúdanos a evaluar el curso de hoy en los siguientes puntos:</p>
            <table id="tabla1" class="table table-striped">
                  <tr>
                     <th scope="row" class="info"></th>
                     <th class="numeracion"> 1 </th>
                     <th class="numeracion"> 2 </th>
                     <th class="numeracion"> 3 </th>
                     <th class="numeracion"> 4 </th>
                     <th class="numeracion"> 5 </th>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>1. </strong>La información proporcionada fue clara.</td>
                     <td><input type="radio" name="radio3" value="1"></td>
                     <td><input type="radio" name="radio3" value="2"></td>
                     <td><input type="radio" name="radio3" value="3"></td>
                     <td><input type="radio" name="radio3" value="4"></td>
                     <td><input type="radio" name="radio3" value="5"></td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>2. </strong>Se resolvieron todas tus dudas en esta sesión .</td>
                     <td><input type="radio" name="radio4" value="1"></td>
                     <td><input type="radio" name="radio4" value="2"></td>
                     <td><input type="radio" name="radio4" value="3"></td>
                     <td><input type="radio" name="radio4" value="4"></td>
                     <td><input type="radio" name="radio4" value="5"></td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>3. </strong>La dinámica del curso, le permitió participar activamente.</td>
                     <td><input type="radio" name="radio5" value="1"></td>
                     <td><input type="radio" name="radio5" value="2"></td>
                     <td><input type="radio" name="radio5" value="3"></td>
                     <td><input type="radio" name="radio5" value="4"></td>
                     <td><input type="radio" name="radio5" value="5"></td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>4. </strong>Consideras que el tiempo destinado a cada sesión del curso fue suficiente. </td>
                     <td><input type="radio" name="radio6" value="1"></td>
                     <td><input type="radio" name="radio6" value="2"></td>
                     <td><input type="radio" name="radio6" value="3"></td>
                     <td><input type="radio" name="radio6" value="4"></td>
                     <td><input type="radio" name="radio6" value="5"></td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>5. </strong>Se respetaron las fechas y tiempos asignados al curso.</td>
                     <td><input type="radio" name="radio7" value="1"></td>
                     <td><input type="radio" name="radio7" value="2"></td>
                     <td><input type="radio" name="radio7" value="3"></td>
                     <td><input type="radio" name="radio7" value="4"></td>
                     <td><input type="radio" name="radio7" value="5"></td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>6. </strong>Considera que el objetivo del curso se cumplió.</td>
                     <td><input type="radio" name="radio8" value="1"></td>
                     <td><input type="radio" name="radio8" value="2"></td>
                     <td><input type="radio" name="radio8" value="3"></td>
                     <td><input type="radio" name="radio8" value="4"></td>
                     <td><input type="radio" name="radio8" value="5" ></td>
                  </tr>        
            </table>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <span class="float-left">
                        <section class="botones">
                           <div id="separar">
                              <a onclick="hijo1();">
                                 <span class="boton3"> < </span> 
                              </a> 
                           </div> 
                        </section> 
                     </span> 
                     <span class="float-right">
                        <section class="botones">
                           <div id="separar">
                              <a onclick="hijo3();">
                                 <span class="boton3"> > </span>
                               </a>
                           </div>
                        </section>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<!-- TERCER PREGUNTA -->
   <div class="row">
      <div class="mx-auto">
         <div style="display: none;" id="hijo3" class="hijos">
         <div class="row justify">
            <div class="col-lg" style="border: 0px; background-color:transparent;">
               <p>Considerando que 1 es la mínima y 5 la máxima en puntuación, ayúdanos a evaluar a nuestro instructor en los siguientes puntos:</p>
            <table id="tabla1" class="table table-striped">
                  <tr>
                     <th scope="row" class="info"> <p></p> </th>
                     <th class="numeracion"> 1 </th>
                     <th class="numeracion"> 2 </th>
                     <th class="numeracion"> 3 </th>
                     <th class="numeracion"> 4 </th>
                     <th class="numeracion"> 5 </th>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>1. </strong>El instructor demostró domino en los temas desarrollados. </td>
                     <td><input type="radio" name="radio33" value="1"></td>
                     <td><input type="radio" name="radio33" value="2"></td>
                     <td><input type="radio" name="radio33" value="3"></td>
                     <td><input type="radio" name="radio33" value="4"></td>
                     <td><input type="radio" name="radio33" value="5"></td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>2. </strong>El instructor proyecto una imagen agradable y de confianza. </td>
                     <td><input type="radio" name="radio44" value="1"></td>
                     <td><input type="radio" name="radio44" value="2"></td>
                     <td><input type="radio" name="radio44" value="3"></td>
                     <td><input type="radio" name="radio44" value="4"></td>
                     <td><input type="radio" name="radio44" value="5"></td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>3. </strong>El instructor despertó y mantuvo tu interés .</td>
                     <td><input type="radio" name="radio55" value="1"></td>
                     <td><input type="radio" name="radio55" value="2"></td>
                     <td><input type="radio" name="radio55" value="3"></td>
                     <td><input type="radio" name="radio55" value="4"></td>
                     <td><input type="radio" name="radio55" value="5"></td>
                  </tr>
                  <tr class="celdas">
                     <td class="fondo1"><strong>4. </strong>El instructor utilizo un lenguaje apropiado y entendible para ti. </td>
                     <td><input type="radio" name="radio66" value="1"></td>
                     <td><input type="radio" name="radio66" value="2"></td>
                     <td><input type="radio" name="radio66" value="3"></td>
                     <td><input type="radio" name="radio66" value="4"></td>
                     <td><input type="radio" name="radio66" value="5"></td>
                  </tr>        
            </table>
            </div>
         </div>
         <div id="nSi" style="display:none;">
         </div>
         <div id="nNo" style="display: none;">
            <p>¿Por qué?</p>
            <div class="row justify-content-center">
               <div class="col-lg" style="border: 0px; background-color:transparent;">
                  <textarea id="texto1" rows="4" class="form-control" name='Nop1' onkeyup="mayus(this);" placeholder="Ingresa tu comentario aquí..."></textarea>
               </div>
            </div>
         </div>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <span class="float-left">
                        <section class=botones>
                           <div id="separar">
                              <a onclick="hijo2();">
                                 <span class="boton3"> < </span> 
                              </a> 
                           </div> 
                        </section> 
                     </span> 
                     <span class="float-right">
                        <section class=botones>
                           <div id="separar">
                              <a onclick="hijo4();">
                                 <span class="boton3"> > </span>
                              </a>
                           </div>
                        </section>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<!-- CUARTA PREGUNTA -->
   <div class="row">
      <div class="mx-auto">
         <div style="display: none;" id="hijo4" class="hijos">
         <p>¿Qué información necesitas para continuar con esta carrera como agente de seguros?</p>
         
            <div class="row">
               <div class="col-lg" style="border: 0px; background-color:transparent;">
                  <textarea style="width: 1400px;" id="texto2" rows="4" class="form-control" name='Nop2' onkeyup="mayus(this);" placeholder="Ingresa tu comentario aquí..."></textarea>
               </div>
            </div>
        
            <div class="container">
               <div class="row">
                  <div class="col">
                     <span class="float-left">
                        <section class=botones>
                           <div id="separar">
                              <a onclick="hijo3();">
                                 <span class="boton3"> < </span> 
                              </a> 
                           </div> 
                        </section> 
                     </span> 
                     <span class="float-right">
                        <section class=botones>
                           <div id="separar">
                              <a onclick="hijo5();">
                                 <span class="boton3"> > </span>
                              </a>
                           </div>
                        </section>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<!-- QUINTA PREGUNTA -->
   <div class="row">
      <div class="mx-auto">
         <div  style="display: none;" id="hijo5" class="hijos">
            <p>Si pudiéramos mejorar partes de este curso. ¿Qué cambiarias? </p>
            <div class="container">
               <div class="row">
                  <div class="custom-radio-button">

            <div id="content">
              
               <div class="row justify-content-center">
                    <div class="col-lg" style="border: 0px; background-color:transparent;">
                        <textarea style="width: 1500px;"  id="texto3" rows="4" class="form-control" name='nNo3' onkeyup="mayus(this);" placeholder="Ingresa tu comentario aquí..."></textarea>
                    </div>
               </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <span class="float-left">
                           <section class="botones">
                              <div id="separar">
                                 <a onclick="hijo4();">
                                    <span class="boton3"> < </span> 
                                 </a> 
                              </div> 
                           </section> 
                        </span> 
                        <span class="float-right">
                           <section class="botones">
                              <div id="separar">
                                 <a onclick="hijo6();">
                                    <span class="boton3"> > </span>
                                 </a>
                              </div>
                           </section>
                        </span>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- SEXTA PREGUNTA -->
   <div class="row">
      <div class="mx-auto">
         <div style="display: none;" id="hijo6" class="hijos">
            <p>¿Le recomendarías esta carrera a tus amistades, conocidos y familiares?</p>
              <div class="container">
               <div class="row">
                  <div class="custom-radio-button">
                     <div class="custom02">
                        <input type="radio" name="radioF" value="1" id="radio-c11">
                        <label for="radio-c11">Si</label>
                     </div>
                     <div class="custom02">
                        <input type="radio" name="radioF" value="2" id="radio-c21">
                        <label for="radio-c21">No</label>
                     </div>

                  <div>
                     <p>¿Por qué?</p>
       
                  <textarea style="width: 1500px; background-color: #2c3e50; color: white;" id="porq6"  rows="4" class="form-control" name='porq6' onkeyup="mayus(this);" placeholder="Ingresa tu comentario aquí..."></textarea>
               </div>
       

                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <span class="float-left">
                        <section class="botones">
                           <div id="separar">
                              <a onclick="hijo5();">
                                 <span class="boton3"> < </span> 
                              </a> 
                           </div> 
                        </section> 
                     </span> 
                     <span class="float-right">
                        <section class="botones">
                           <div id="separar">
                              <a onclick="hijo7();">
                                 <span class="boton3"> > </span>
                              </a>
                           </div>
                        </section>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<!-- SEPTIMA PREGUNTA -->
   <div class="row">
      <div class="mx-auto">
         <div style="display: none;" id="hijo7" class="hijos">
            <p>En general, ¿Cómo evalúas nuestro curso de inducción como APS?</p>
            <div class="feedback">
                    <div class="rating" style="left:0">
                        <input type="radio" name="rating" value="10" id="rating-10">
                        <label for="rating-10"></label>
                        <input type="radio" name="rating" value="9" id="rating-9">
                        <label for="rating-9"></label>
                        <input type="radio" name="rating" value="8" id="rating-8">
                        <label for="rating-8"></label>
                        <input type="radio" name="rating" value="7" id="rating-7">
                        <label for="rating-7"></label>
                        <input type="radio" name="rating" value="6" id="rating-6">
                        <label for="rating-6"></label>
                        <input type="radio" name="rating" value="5" id="rating-5">
                        <label for="rating-5"></label>
                        <input type="radio" name="rating" value="4" id="rating-4">
                        <label for="rating-4"></label>
                        <input type="radio" name="rating" value="3" id="rating-3">
                        <label for="rating-3"></label>
                        <input type="radio" name="rating" value="2" id="rating-2">
                        <label for="rating-2"></label>
                        <input type="radio" name="rating" value="1" id="rating-1">
                        <label for="rating-1"></label>
                        <input type="radio" name="rating" value="0" id="rating-0">
                        <label for="rating-0"></label>
                        <div class="emoji-wrapper">
                            <div class="emoji">
                                <!--CODIGO PARA EL ICONO NUMERO 00-ESTE ICONO ES PARA CUANDO NO SE HA SELECCIONADO NADA AUN-->
                                <svg class="rating-00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                    <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534" />
                                    <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff" />
                                    <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347" />
                                    <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63" />
                                    <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff" />
                                    <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347" />
                                    <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63" />
                                    <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347" />
                                </svg>
                                <!--CODIGO PARA EL VALOR 0 EN EL RATING-->
                                <svg class="rating-0 shake-opacity" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px" class="hovered-paths">
                                    <g>
                                        <circle style="fill:#CACAC7" cx="256" cy="256" r="256" data-original="#FFD93B" class="" data-old_color="#FFD93B" />
                                        <path style="fill:#D2D2D2" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28  c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72  C474.8,103.68,512,175.52,512,256z" data-original="#F4C534" class="hovered-path active-path" data-old_color="#F4C534" />
                                        <g>
                                            <path style="fill:#F02A2A" d="M303.104,396.704c0,26.08-21.12,47.04-47.04,47.04c-26.08,0-47.04-20.96-47.04-47.04   c0-25.92,20.96-47.04,47.04-47.04C281.984,349.664,303.104,370.784,303.104,396.704z" data-original="#3E4347" class="" data-old_color="#3E4347" />
                                            <path style="fill:#F02A2A" d="M203.744,218.56l-21.6,21.6l21.6,21.6c6.88,6.88,6.88,18.4,0,25.28l-0.16,0.16   c-6.88,6.88-18.4,6.88-25.28,0l-21.6-21.6l-21.6,21.6c-6.88,6.88-18.4,6.88-25.28,0l-0.16-0.16c-6.88-6.88-6.88-18.4,0-25.28   l21.6-21.6l-21.6-21.6c-6.88-6.88-6.88-18.4,0-25.44c7.008-6.992,19.072-6.656,25.44,0l21.6,21.6l21.6-21.6   c6.88-6.88,18.4-6.88,25.28,0h0.16C210.624,200.16,210.624,211.68,203.744,218.56z" data-original="#3E4347" class="" data-old_color="#3E4347" />
                                            <path style="fill:#F02A2A" d="M402.336,287.04v0.16c-7.04,6.88-18.56,6.88-25.44,0l-21.6-21.6l-21.44,21.6   c-7.04,6.88-18.56,6.88-25.44,0v-0.16c-7.04-6.88-7.04-18.4,0-25.28l21.44-21.6l-21.44-21.6c-7.04-6.88-7.04-18.4,0-25.44   c7.072-7.072,18.816-6.608,25.44,0l21.44,21.6l21.6-21.6c6.88-6.88,18.4-6.88,25.44,0c6.864,7.2,6.8,18.64,0,25.44l-21.6,21.6   l21.6,21.6C409.216,268.64,409.216,280.16,402.336,287.04z" data-original="#3E4347" class="" data-old_color="#3E4347" />
                                        </g>
                                    </g>
                                </svg>
                                <!--EMOJI 1-->
                                <svg class="rating-1 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <circle style="fill:#3E4347;" cx="256" cy="382.144" r="63.856" />
                                    <path style="fill:#E24B4B;" d="M256,446c16.848,0,32.128-6.576,43.536-17.232c-0.256-6.912-2.08-13.424-5.168-19.104
                                    c-6.016-10.96-19.232-15.808-30.848-11.392c-6.768,2.48-14.4,3.984-23.008,3.984c-0.112,0-0.112,0-0.224,0
                                    c-12.896-0.112-25.04,7.952-27.296,20.64c-0.336,1.904-0.496,3.872-0.576,5.856C223.856,439.424,239.136,446,256,446z" />
                                    <path style="fill:#FFFFFF;" d="M309.056,346.64C297.6,329.552,278.112,318.288,256,318.288s-41.6,11.248-53.056,28.336
                                    C213.2,356,233.104,357.12,256,357.12S298.8,356,309.056,346.64z" />
                                    <g style="opacity:0.2;">
                                        <ellipse transform="matrix(-0.9317 -0.3632 0.3632 -0.9317 387.3987 892.644)" style="fill:#FFFFFF;" cx="277.618" cy="409.902" rx="8.816" ry="5.04" />
                                    </g>
                                    <g>
                                        <path style="fill:#E9B02C;" d="M280.064,159.152c-2.256-5.44,0.352-11.68,5.792-13.92l78.016-32.16
                                        c5.44-2.272,11.68,0.352,13.92,5.792c2.256,5.44-0.352,11.68-5.792,13.92l-78.016,32.16
                                        C288.528,167.2,282.288,164.576,280.064,159.152z" />
                                        <path style="fill:#E9B02C;" d="M218.016,164.944L140,132.784c-5.44-2.24-8.048-8.48-5.792-13.92c2.24-5.44,8.48-8.064,13.92-5.792
                                        l78.016,32.16c5.44,2.24,8.048,8.48,5.792,13.92C229.712,164.576,223.472,167.2,218.016,164.944z" />
                                    </g>
                                    <ellipse style="fill:#FFFFFF;" cx="177.6" cy="232.608" rx="58" ry="58.048" />
                                    <circle style="fill:#3E4347;" cx="177.6" cy="232.608" r="32" />
                                    <ellipse transform="matrix(-0.6912 -0.7227 0.7227 -0.6912 163.8109 510.0115)" style="fill:#5A5F63;" cx="190.875" cy="220.006" rx="7.392" ry="5.456" />
                                    <ellipse style="fill:#FFFFFF;" cx="334.432" cy="232.608" rx="58" ry="58.048" />
                                    <circle style="fill:#3E4347;" cx="334.416" cy="232.608" r="32" />
                                    <ellipse transform="matrix(-0.6912 -0.7227 0.7227 -0.6912 428.994 623.274)" style="fill:#5A5F63;" cx="347.667" cy="219.978" rx="7.392" ry="5.456" />
                                    <g></g>
                                </svg>
                                <!--EMOJI 2-->
                                <svg class="rating-2 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <path style="fill:#3E4347;" d="M328.416,428.016c-17.12-21.28-43.2-34.88-72.48-34.88s-55.36,13.6-72.48,34.72
                                    c-4.64,5.76-13.44,1.6-12-5.76c7.52-36.8,40.64-68.96,84.48-68.96c44.16,0,77.44,32.64,84.64,69.76
                                    C341.856,429.792,332.896,433.472,328.416,428.016z" />
                                    <path style="fill:#F4C534;" d="M269.216,222.32c5.28,62.784,52.048,113.84,104.752,113.84c52.368,0,90.864-51.056,85.584-113.84
                                    c-1.984-24.944-10.736-47.904-23.632-66.752c-4.128-6.112-12.224-7.936-18.512-4.128c-16.192,10.08-36.176,16.192-60.128,16.192
                                    c-22.8,0-42.128-5.616-57.824-14.864c-6.768-3.968-15.36-1.488-18.832,5.456C271.68,176.384,267.392,198.528,269.216,222.32z" />
                                    <path style="fill:#FFFFFF;" d="M356.96,189.456c25.792,0,46.976-7.088,63.76-18.608c10,14.592,17.072,32.048,18.672,51.504
                                    c4.096,49.6-26.096,89.728-67.488,89.728c-41.568,0-78.368-40.128-82.464-89.728c-1.488-18.032,2-34.368,8.512-48.336
                                    C313.952,183.68,333.6,189.456,356.96,189.456z" />
                                    <path style="fill:#3E4347;" d="M396.208,246.144c0,21.392-17.184,38.576-38.752,38.576c-21.392,0-38.576-17.184-38.576-38.592
                                    c0-21.568,17.184-38.752,38.576-38.752C379.008,207.392,396.208,224.576,396.208,246.144z" />
                                    <path style="fill:#FFFFFF;" d="M380.416,241.104c-3.2,3.2-9.92,1.744-14.88-3.216c-4.816-4.816-6.272-11.52-3.056-14.736
                                    c3.36-3.36,10.064-1.904,14.88,2.912C382.304,231.04,383.76,237.76,380.416,241.104z" />
                                    <path style="fill:#F4C534;" d="M242.784,222.32c-5.28,62.784-52.048,113.84-104.752,113.84c-52.368,0-90.864-51.056-85.584-113.84
                                    c1.984-24.944,10.736-47.904,23.632-66.752c4.144-6.112,12.24-7.92,18.512-4.128c16.192,10.08,36.176,16.192,60.128,16.192
                                    c22.8,0,42.128-5.616,57.824-14.864c6.768-3.968,15.36-1.488,18.832,5.456C240.32,176.384,244.608,198.528,242.784,222.32z" />
                                    <path style="fill:#FFFFFF;" d="M155.04,189.456c-25.792,0-46.976-7.088-63.76-18.608c-10,14.592-17.072,32.048-18.672,51.504
                                    c-4.096,49.6,26.096,89.728,67.488,89.728c41.568,0,78.368-40.128,82.464-89.728c1.488-18.032-2-34.368-8.512-48.336
                                    C198.048,183.68,178.4,189.456,155.04,189.456z" />
                                    <path style="fill:#3E4347;" d="M115.792,246.144c0,21.392,17.184,38.576,38.752,38.576c21.392,0,38.576-17.184,38.576-38.592
                                    c0-21.568-17.184-38.752-38.576-38.752C132.992,207.392,115.792,224.576,115.792,246.144z" />
                                    <path style="fill:#FFFFFF;" d="M131.584,241.104c3.2,3.2,9.92,1.744,14.88-3.216c4.816-4.816,6.272-11.52,3.056-14.736
                                    c-3.36-3.36-10.064-1.904-14.88,2.912C129.696,231.04,128.24,237.76,131.584,241.104z" />
                                    <g>
                                    </g>
                                </svg>
                                <!--EMOJI 3-->
                                <svg class="rating-3 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <path style="fill:#3E4347;" d="M343.408,430.672c-14.608,6.256-46.016-20.592-92.32-40.656c-52.32-22.192-92.4-5.792-101.472-16.096
                                    c-11.408-7.088,28.304-41.072,115.84-39.28C367.056,339.648,360.832,426.384,343.408,430.672z" />
                                    <path style="fill:#FFFFFF;" d="M241.856,222.624c0,39.584-35.552,75.952-79.392,81.232c-43.856,5.28-79.392-22.528-79.392-62.112
                                    s35.552-75.952,79.392-81.232S241.856,183.04,241.856,222.624z" />
                                    <ellipse style="fill:#3E4347;" cx="175.729" cy="222.766" rx="37.36" ry="37.36" />
                                    <path style="fill:#5A5F63;" d="M198.64,214.624c-2.832,2.832-8.48,1.696-12.56-2.384c-3.952-3.968-5.088-9.616-2.256-12.448
                                    c2.72-2.72,8.368-1.584,12.336,2.384C200.224,206.256,201.36,211.92,198.64,214.624z" />
                                    <path style="fill:#FFFFFF;" d="M270.144,222.624c0,39.584,35.552,75.952,79.392,81.232c43.856,5.28,79.392-22.528,79.392-62.112
                                    s-35.552-75.952-79.392-81.232S270.144,183.04,270.144,222.624z" />
                                    <ellipse style="fill:#3E4347;" cx="336.307" cy="222.747" rx="37.36" ry="37.36" />
                                    <path style="fill:#5A5F63;" d="M313.36,214.624c2.832,2.832,8.48,1.696,12.56-2.384c3.968-3.968,5.088-9.616,2.272-12.448
                                    c-2.72-2.72-8.368-1.584-12.336,2.384C311.776,206.256,310.64,211.92,313.36,214.624z" />
                                    <g>
                                        <path style="fill:#F4C534;" d="M98.656,155.376c16-7.984,44.704-21.808,63.472-35.92c26.336-18.032,38.608-34.8,54.608-48.208
                                    c-1.76,25.664-19.584,53.872-40.752,67.808C151.52,157.008,116.72,162.08,98.656,155.376z" />
                                        <path style="fill:#F4C534;" d="M401.216,120.24c-12.432,14.992-45.2,27.824-75.136,24.496
                                    c-29.12-1.696-55.568-18.128-69.184-38.352c16,2.816,40.512,12.08,71.392,14.464C352.24,123.76,385.216,121.216,401.216,120.24z" />
                                    </g>
                                </svg>
                                <!--EMOJI 4-->
                                <svg class="rating-4 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <path style="fill:#FFD93B;" d="M380.128,402.976c-14.08,23.184-29.84,25.216-50.24,12c-7.76-4.704-23.376-12.48-41.168-17.584
                                    c-26.96-8.416-59.44-6.336-88.096,8.96c-18.512,9.952-35.168,17.264-44.656,18.224c-25.008,1.712-47.456-20.544-51.84-43.36
                                    c-4.752-22.256,10.128-60.288,43.648-71.488c12.048-3.84,35.36-3.68,57.632,4.224c34.384,11.584,67.92,19.984,100.528,26.576
                                    c21.088,4.336,40.736,10.192,51.2,13.328C385.952,361.872,394.208,380.32,380.128,402.976z" />
                                    <path style="fill:#3E4347;" d="M380.128,402.976c-14.08,23.184-29.84,25.216-50.24,12c-7.76-4.704-23.376-12.48-41.168-17.584
                                    c-26.96-8.416-59.44-6.336-88.096,8.96c-18.512,9.952-35.168,17.264-44.656,18.224c-25.008,1.712-47.456-20.544-51.84-43.36
                                    c-4.752-22.256,10.128-60.288,43.648-71.488c12.048-3.84,35.36-3.68,57.632,4.224c34.384,11.584,67.92,19.984,100.528,26.576
                                    c21.088,4.336,40.736,10.192,51.2,13.328C385.952,361.872,394.208,380.32,380.128,402.976z" />
                                    <path style="fill:#FFFFFF;" d="M317.6,378c18.688,1.632,36.464,5.12,55.904,6.368c0.784-9.376-4.736-17.792-20.112-22.912
                                    c-8.064-2.64-25.616-7.84-47.184-11.552c-17.12-2.832-34.544-5.936-52.24-9.44c-17.68-3.504-35.52-7.728-53.456-12.944
                                    c-22.56-6.784-43.632-5.808-52.608-3.056c-18.096,5.184-27.072,20.912-29.888,34.096c20.176,0.368,40.272,5.152,59.584,9.504
                                    c-19.328,4.4-38.88,9.104-59.024,14.352c4.208,14.704,16.256,30.352,35.456,27.888c7.68-1.008,23.52-7.184,43.616-16.96
                                    c15.792-7.488,32.72-11.44,49.232-11.76c16.512-0.336,32.544,2.48,46.96,7.824c18.64,6.64,32.816,14.208,39.168,17.728
                                    c15.824,9.072,26.368,4.56,34.08-6.144C351.2,391.952,334.608,384.368,317.6,378z" />
                                    <circle style="fill:#F4C534;" cx="158.512" cy="183.008" r="86.048" />
                                    <path style="fill:#FFFFFF;" d="M234.688,183.008c-2.288,41.344-38.256,74.848-80.32,74.848s-74.304-33.504-72.016-74.848
                                    c2.288-41.328,38.256-74.848,80.32-74.848S236.976,141.68,234.688,183.008z" />
                                    <ellipse style="fill:#3E4347;" cx="180.148" cy="183.469" rx="42.784" ry="42.784" />
                                    <path style="fill:#5A5F63;" d="M205.712,174.08c-3.28,3.28-9.664,2.416-14.16-2.08c-4.32-4.48-5.344-10.704-2.064-14.144
                                    c3.456-3.28,9.664-2.24,14.16,2.064C208.128,164.416,208.992,170.8,205.712,174.08z" />
                                    <circle style="fill:#F4C534;" cx="352.8" cy="183.008" r="86.048" />
                                    <path style="fill:#FFFFFF;" d="M276.56,183.008c2.288,41.344,38.256,74.848,80.32,74.848s74.304-33.504,72.016-74.848
                                    s-38.256-74.848-80.32-74.848C306.496,108.16,274.256,141.68,276.56,183.008z" />
                                    <ellipse style="fill:#3E4347;" cx="331.084" cy="183.461" rx="42.784" ry="42.784" />
                                    <path style="fill:#5A5F63;" d="M356.672,174.08c-3.28,3.28-9.664,2.416-14.144-2.08c-4.32-4.48-5.344-10.704-2.064-14.144
                                    c3.456-3.28,9.664-2.24,14.144,2.064C359.088,164.416,359.952,170.8,356.672,174.08z" />
                                    <path style="fill:#FFD93B;" d="M60.48,264.352c60.928,26.064,120.096,27.84,177.168,0c-65.936-35.968-143.056-14.704-177.168-1.856
                                    C60.48,262.496,60.48,264.352,60.48,264.352z" />
                                    <path style="fill:#F4C534;" d="M233.808,262.128c-16-2.864-37.888-10.256-79.76-9.76c-29.04-0.08-58.096,3.888-81.04,5.744
                                    c16.032-10.768,48.544-21.664,80.992-21.728C183.408,236.96,210.96,243.472,233.808,262.128z" />
                                    <g></g>
                                </svg>
                                <!--EMOJI 5-->
                                <svg class="rating-5 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <g fill="#ffd93b">
                                        <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                        <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                        c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                        C474.8,103.68,512,175.52,512,256z" />
                                        <path style="fill:#3E4347;" d="M445.504,196.112c-2.416,12.624-4.816,25.248-7.232,37.872c-21.6-31.568-65.216-53.328-112.832-50.72
                                        c-9.872,0.64-19.168,2.4-28.032,4.912c-3.936-19.2-8.144-38.368-12.592-57.52c5.488,11.824,10.8,23.712,15.936,35.616
                                        c-1.568-12.768-3.216-25.52-4.944-38.272c5.824-1.168,12.08-1.872,18.304-2.224c30.144-1.936,59.456,5.168,82.672,18.336
                                        c-0.24,11.28-0.496,22.56-0.816,33.824c1.968-10.272,3.952-20.544,5.952-30.816c6.096,3.824,11.664,7.856,16.672,12.432
                                        c-0.912,10-1.84,20.016-2.784,30.032c2.32-8.704,4.672-17.392,7.024-26.08C432.768,173.088,440.464,184.24,445.504,196.112z" />
                                        <path style="fill:#F4C534;" d="M403.184,266.736c-5.04,28.896-35.44,47.664-68.096,44.368
                                        c-32.656-3.424-58.464-28.064-57.504-57.344c0.944-29.184,31.632-51.904,68.384-48.096
                                        C382.72,209.424,408.224,237.936,403.184,266.736z" />
                                        <path style="fill:#FFFFFF;" d="M397.44,265.808c-1.632,24.736-27.264,40.544-57.2,37.376c-29.936-3.264-55.344-24.416-56.848-49.136
                                        c-1.52-24.608,23.968-43.744,57.056-40.464C373.536,216.784,399.072,241.152,397.44,265.808z" />
                                        <path style="fill:#3E4347;" d="M358.416,262.72c-1.76,13.968-16.384,23.712-32.704,22.224c-16.16-1.552-28.752-13.728-27.952-27.776
                                        c0.816-14.16,15.504-24.816,32.608-23.248C347.664,235.504,360.176,248.64,358.416,262.72z" />
                                        <path style="fill:#5A5F63;" d="M316.816,253.888c-1.76,3.616-5.712,5.424-8.88,4.224c-3.056-1.152-4.032-5.008-2.08-8.528
                                        c1.728-3.664,5.856-5.44,8.944-4.24C317.888,246.56,318.816,250.4,316.816,253.888z" />
                                        <path style="fill:#3E4347;" d="M66.496,196.112c2.416,12.624,4.816,25.248,7.232,37.872c21.6-31.568,65.216-53.328,112.848-50.72
                                        c9.856,0.64,19.168,2.4,28.032,4.912c3.936-19.2,8.144-38.368,12.592-57.52c-5.488,11.824-10.8,23.712-15.936,35.616
                                        c1.552-12.768,3.2-25.52,4.912-38.272c-5.824-1.168-12.08-1.872-18.304-2.224c-30.144-1.952-59.456,5.152-82.672,18.336
                                        c0.224,11.28,0.496,22.56,0.8,33.824c-1.968-10.272-3.952-20.544-5.952-30.816c-6.08,3.808-11.648,7.84-16.672,12.416
                                        c0.912,10,1.84,20.016,2.784,30.032c-2.32-8.704-4.672-17.392-7.024-26.08C79.232,173.088,71.536,184.24,66.496,196.112z" />
                                        <path style="fill:#F4C534;" d="M108.8,266.736c5.04,28.896,35.44,47.664,68.096,44.368c32.656-3.424,58.464-28.064,57.504-57.344
                                        c-0.944-29.184-31.632-51.904-68.384-48.096C129.28,209.424,103.76,237.936,108.8,266.736z" />
                                        <path style="fill:#FFFFFF;" d="M114.56,265.808c1.632,24.736,27.264,40.544,57.2,37.376c29.936-3.264,55.328-24.416,56.848-49.136
                                        c1.52-24.64-23.984-43.728-57.056-40.464C138.464,216.784,112.928,241.152,114.56,265.808z" />
                                        <path style="fill:#3E4347;" d="M153.584,262.72c1.76,13.968,16.384,23.712,32.704,22.224c16.16-1.552,28.752-13.728,27.936-27.776
                                        c-0.816-14.16-15.504-24.816-32.608-23.248C164.352,235.504,151.808,248.64,153.584,262.72z" />
                                        <path style="fill:#5A5F63;" d="M195.184,253.888c1.76,3.616,5.712,5.424,8.88,4.224c3.056-1.152,4.032-5.008,2.08-8.528
                                        c-1.728-3.664-5.856-5.44-8.944-4.24C194.112,246.56,193.184,250.4,195.184,253.888z" />
                                        <g>
                                        <path style="fill:#3E4347;" d="M233.168,405.152c0.48-0.064,16.432,2.368,25.44,2.336c13.36,0.08,19.456-2.304,25.44-2.336
                                        c-3.968,8-14.496,14.288-25.44,14.32C247.392,419.408,236.816,412.752,233.168,405.152z" />
                                        <path style="fill:#3E4347;" d="M348.992,381.392c1.264,3.408-187.2,4.16-185.968,0.512
                                        C163.44,371.84,347.28,371.632,348.992,381.392z" />
                                        </g>
                                </svg>
                                <!--EMOJI 6-->
                                <svg class="rating-6 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#3E4347;" d="M416.992,337.968c-26.432,62.896-88.544,107.088-161.008,107.088
                                    c-72.48,0-134.432-44.192-160.864-107.088c-5.408-12.672,4.176-26.576,18.08-25.808c95.024,6.032,190.224,6.032,285.552,0
                                    C412.656,311.392,422.24,325.296,416.992,337.968z" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <ellipse style="fill:#FFFFFF;" cx="150.464" cy="185.52" rx="92.96" ry="93.04" />
                                    <path style="fill:#3E4347;" d="M217.024,179.632c0,26.08-21.12,47.2-47.2,47.04c-25.92,0-47.04-20.96-47.04-47.04
                                    c0-25.92,21.12-47.04,47.2-47.04C195.904,132.608,217.024,153.712,217.024,179.632z" />
                                    <g>
                                    <path style="fill:#FFFFFF;" d="M197.024,170.672c-3.2,3.36-9.92,1.76-14.88-3.36c-4.96-4.96-6.56-11.52-3.36-14.88
                                    c3.36-3.2,9.92-1.6,14.88,3.36C198.784,160.752,200.384,167.472,197.024,170.672z" />
                                    <ellipse style="fill:#FFFFFF;" cx="361.536" cy="185.52" rx="92.96" ry="93.04" />
                                    </g>
                                    <path style="fill:#3E4347;" d="M290.368,179.632c0,26.08,21.12,47.2,47.2,47.04c25.92,0,47.04-20.96,47.04-47.04
                                    c0-25.92-21.12-47.04-47.2-47.04C311.488,132.608,290.368,153.712,290.368,179.632z" />
                                    <g>
                                    <path style="fill:#FFFFFF;" d="M310.368,170.672c3.2,3.36,9.92,1.76,14.88-3.36c4.96-4.96,6.56-11.52,3.36-14.88
                                    c-3.36-3.2-9.92-1.6-14.88,3.36C308.608,160.752,307.008,167.472,310.368,170.672z" />
                                    <path style="fill:#FFFFFF;" d="M113.184,312.16c-1.12-0.064-2.16,0.112-3.216,0.24c29.712,40.224,83.904,42.448,146.032,42.448
                                    s116.32-2.224,146.032-42.448c-1.088-0.128-2.144-0.304-3.28-0.24C303.408,318.192,208.224,318.192,113.184,312.16z" />
                                    </g>
                                    <path style="fill:#E24B4B;" d="M255.968,445.056c26.608,0,51.808-6,74.368-16.656c-1.104-18.576-8.624-35.424-21.008-47.968
                                    c-9.904-9.872-24.992-13.568-38.128-8.736c-11.952,4.288-24.976,6.496-39.072,6.64c-23.968,0-44.912,17.568-49.248,41.072
                                    c-0.544,2.976-0.672,6.08-0.832,9.184C204.48,439.104,229.504,445.056,255.968,445.056z" />
                                    <g></g>
                                </svg>
                                <!--EMOJI 7-->
                                <svg class="rating-7 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <path style="fill:#3E4347;" d="M431.312,234.736c11.456,24.656-121.44,50.176-133.6,21.744c-3.28-9.12,7.584-24.144,46.24-40.688
                                    c27.344-12.352,48.512-21.264,53.408-14.72c3.984,5.328-6.112,21.056-27.68,34.4C401.824,230.928,427.968,227.232,431.312,234.736z" />
                                    <path style="fill:#F4C534;" d="M240.224,238.736c0,44.352-35.776,80.112-80.112,80.112c-44.16,0-80.112-35.76-80.112-80.112
                                    c0-44.16,35.952-80.112,80.112-80.112C204.448,158.624,240.224,194.576,240.224,238.736z" />
                                    <path style="fill:#FFFFFF;" d="M229.2,238.736c-2.224,35.536-34.912,64.256-73.12,64.256s-67.28-28.72-65.056-64.256
                                    s34.912-64.256,73.12-64.256C202.352,174.48,231.424,203.2,229.2,238.736z" />
                                    <path style="fill:#3E4347;" d="M206.656,236.544c0,21.344-17.328,38.864-38.864,39.056c-21.36,0-38.88-17.52-38.88-38.864
                                    c0-21.728,17.52-39.056,39.056-39.056C189.328,197.68,206.656,215.2,206.656,236.544z" />
                                    <path style="fill:#5A5F63;" d="M190.24,229.056c-3.28,3.296-9.312,2.736-13.504-1.456c-4.016-4.192-4.752-10.224-1.456-13.504
                                    c3.472-3.28,9.488-2.736,13.696,1.456C192.976,219.76,193.696,225.776,190.24,229.056z" />
                                    <g>
                                    <path style="fill:#3E4347;" d="M376.448,313.696c-8.416-6.56-40.56,66.608-105.312,85.024c-32.72,11.552-64.416,5.664-88.16-1.376
                                    c-17.568-6.768-20.864,8.624-2.928,23.904c25.648,16.736,61.472,37.68,102.32,24.448
                                    C363.648,420.208,386.64,317.008,376.448,313.696z" />
                                    <path style="fill:#3E4347;" d="M283.28,147.056c21.04-11.92,64.928-31.552,111.072-20.656c4.88,1.152,8.592-5.376,4.48-8.24
                                    c-48.784-33.904-90.016-29.168-122.176,22.416C274.16,144.592,279.168,149.376,283.28,147.056z" />
                                    <path style="fill:#3E4347;" d="M228.72,147.056c-21.04-11.92-64.928-31.552-111.072-20.656c-4.88,1.152-8.592-5.376-4.48-8.24
                                    c48.784-33.904,90.016-29.168,122.176,22.416C237.84,144.592,232.832,149.376,228.72,147.056z" />
                                    </g>
                                </svg>
                                <!--EMOJI 8-->
                                <svg class="rating-8 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <path style="fill:#3E4347;" d="M431.312,323.28c-18.88,79.36-90.08,138.56-175.36,138.56s-156.48-59.2-175.36-138.72
                                    c-1.44-6.08,4.16-11.36,10.08-9.6c111.04,33.12,221.28,33.76,330.56,0.16C427.312,311.76,432.752,317.2,431.312,323.28z" />
                                    <path style="fill:#E24B4B;" d="M245.648,394.72c-65.536,0-112.224-19.28-103.136,26.288c0.048,0.24,0.144,0.464,0.192,0.704
                                    c30.928,25.072,70.288,40.112,113.248,40.112s82.32-15.056,113.248-40.096c0.048-0.256,0.144-0.48,0.192-0.72
                                    C378.48,375.44,311.2,394.72,245.648,394.72z" />
                                    <path style="fill:#FFFFFF;" d="M93.232,314.192c9.68,34.72,78.64,61.504,162.4,61.504c83.456,0,152.192-26.592,162.272-61.136
                                    C310.56,346.88,202.288,346.224,93.232,314.192z" />
                                    <circle style="fill:#F4C534;" cx="362.8" cy="214.608" r="98.448" />
                                    <path style="fill:#FFFFFF;" d="M447.072,214.64c-2.592,46.832-42.4,84.768-88.944,84.768c-46.528,0-82.288-37.952-79.696-84.768
                                    c2.592-46.832,42.56-84.912,89.088-84.912S449.664,167.824,447.072,214.64z" />
                                    <path style="fill:#3E4347;" d="M402.688,214.576c0.096,22.064-17.872,40.032-39.936,39.936
                                    c-22.064,0.096-40.048-17.888-39.936-39.952c-0.096-22.064,17.872-40.032,39.936-39.936
                                    C384.816,174.528,402.784,192.512,402.688,214.576z" />
                                    <ellipse transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 502.9126 608.1483)" style="fill:#FFFFFF;" cx="377.408" cy="199.918" rx="11.92" ry="7.648" />
                                    <circle style="fill:#F4C534;" cx="149.216" cy="214.608" r="98.448" />
                                    <path style="fill:#FFFFFF;" d="M64.944,214.64c2.592,46.832,42.4,84.768,88.944,84.768c46.528,0,82.288-37.952,79.696-84.768
                                    c-2.592-46.832-42.56-84.912-89.088-84.912C97.952,129.728,62.352,167.824,64.944,214.64z" />
                                    <path style="fill:#3E4347;" d="M109.312,214.576c-0.096,22.064,17.872,40.032,39.936,39.936
                                    c22.064,0.096,40.032-17.888,39.936-39.952c0.096-22.064-17.872-40.032-39.936-39.936
                                    C127.2,174.528,109.216,192.512,109.312,214.576z" />
                                    <ellipse transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 88.3791 436.5053)" style="fill:#FFFFFF;" cx="134.593" cy="199.949" rx="7.648" ry="11.92" />
                                    <g>
                                    <path style="fill:#3E4347;" d="M155.152,72.928c0,0-52.016-7.312-106.624,55.904C48.528,128.832,83.84,15.584,155.152,72.928z" />
                                    <path style="fill:#3E4347;" d="M356.848,72.928c0,0,52.016-7.312,106.624,55.904C463.472,128.832,428.16,15.584,356.848,72.928z" />
                                    </g>
                                </svg>
                                <!--EMOJI 9-->
                                <svg class="rating-9 shake" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <path style="fill:#3E4347;" d="M393.952,348.752c14.256,29.712-18.176,80.56-137.968,84.176
                                    c-119.776-3.664-152.192-54.496-137.968-84.176c13.936-31.536,53.136-30.448,137.968-28.576
                                    C340.832,318.32,379.984,317.184,393.952,348.752z" />
                                    <path style="fill:#FFFFFF;" d="M331.856,374.704c20.576-2.864,37.312-17.504,44.48-25.6
                                    c-15.456-15.328-56.112-11.776-120.416-11.408c-41.792-0.096-72.96-2.016-94.896,1.392c-13.92,2.048-21.168,5.92-25.2,9.776
                                    c7.008,7.984,23.936,23.056,44.896,25.936c0.064,0.032-26.144-2-50.896-13.584C127.44,382.672,170.08,414.688,256,415.632
                                    c0.064,0,0.128,0,0.192,0c85.744-0.912,128.32-32.88,126-54.336C357.616,372.688,331.792,374.72,331.856,374.704z" />
                                    <g>
                                    <path style="fill:#3E4347;" d="M433.056,236.512c-14.048-20.032-38.544-33.264-66.512-33.264c-36.32,0-66.8,22.272-76.128,52.752
                                    c-2.368-5.984-3.472-12.256-3.472-18.928c0-34.928,32.704-63.184,73.056-63.184C400.08,173.888,432.64,201.856,433.056,236.512z" />
                                    <path style="fill:#3E4347;" d="M78.944,236.512c14.048-20.032,38.544-33.264,66.512-33.264c36.32,0,66.8,22.272,76.128,52.752
                                    c2.368-5.984,3.472-12.256,3.472-18.928c0-34.928-32.704-63.184-73.056-63.184C111.92,173.888,79.36,201.856,78.944,236.512z" />
                                    </g>
                                </svg>
                                <!--EMOJI 10-->
                                <svg class="rating-10 shake" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <circle style="fill:#FFD93B;" cx="256" cy="256" r="256" />
                                    <path style="fill:#F4C534;" d="M512,256c0,141.44-114.64,256-256,256c-80.48,0-152.32-37.12-199.28-95.28
                                    c43.92,35.52,99.84,56.72,160.72,56.72c141.36,0,256-114.56,256-256c0-60.88-21.2-116.8-56.72-160.72
                                    C474.8,103.68,512,175.52,512,256z" />
                                    <path style="fill:#3E4347;" d="M388.368,309.264C410.864,315.424,374.816,435.04,256,435.92
                                    c-118.816-0.88-154.864-120.496-132.368-126.656C141.616,300.4,189.856,349.52,256,349.52
                                    C323.056,349.504,370.384,300.4,388.368,309.264z" />
                                    <path style="fill:#E24B4B;" d="M173.344,256.784c-1.392,1.712-3.728,2.128-5.648,1.072c-14.4-7.568-72.32-40-77.872-70.192
                                    c-3.52-19.088,9.072-37.44,28.16-40.96c13.76-2.56,27.088,3.312,34.88,14.08c3.312-12.8,13.76-23.04,27.52-25.488
                                    c19.088-3.52,37.328,9.072,40.848,28.16C226.784,193.632,184.112,244.512,173.344,256.784z" />
                                    <path style="fill:#D03F3F;" d="M179.424,249.632c-2.448,2.992-4.592,5.44-6.08,7.152c-1.392,1.712-3.728,2.128-5.648,1.072
                                    c-14.4-7.568-72.32-40-77.872-70.192c-3.2-17.168,6.608-33.712,22.512-39.36c-8.112,7.888-12.272,19.632-10.032,31.568
                                    C107.744,209.632,163.952,241.52,179.424,249.632z" />
                                    <g style="opacity:0.2;">
                                        <ellipse transform="matrix(-0.3654 -0.9308 0.9308 -0.3654 116.941 405.326)" style="fill:#FFFFFF;" cx="196.632" cy="162.802" rx="13.871" ry="9.344" />
                                    </g>
                                    <path style="fill:#E24B4B;" d="M332.752,256.784c1.392,1.712,3.728,2.128,5.648,1.072c14.4-7.568,72.32-40,77.872-70.192
                                    c3.52-19.088-9.072-37.44-28.16-40.96c-13.76-2.56-27.088,3.312-34.88,14.08c-3.312-12.8-13.76-23.04-27.52-25.488
                                    c-19.088-3.52-37.328,9.072-40.848,28.16C279.312,193.632,321.968,244.512,332.752,256.784z" />
                                    <path style="fill:#D03F3F;" d="M326.672,249.632c2.448,2.992,4.592,5.44,6.08,7.152c1.392,1.712,3.728,2.128,5.648,1.072
                                    c14.4-7.568,72.32-40,77.872-70.192c3.2-17.168-6.608-33.712-22.512-39.36c8.112,7.888,12.272,19.632,10.032,31.568
                                    C398.352,209.632,342.128,241.52,326.672,249.632z" />
                                    <g style="opacity:0.2;">
                                        <ellipse transform="matrix(-0.9308 -0.3654 0.3654 -0.9308 537.9436 427.4479)" style="fill:#FFFFFF;" cx="309.42" cy="162.82" rx="9.344" ry="13.871" />
                                    </g>
                                    <path style="fill:#E24B4B;" d="M256,435.92c22.944-0.176,42.768-4.8,59.712-12.144c-3.84-11.28-10.736-21.12-19.808-28.496
                                    c-7.28-6-17.28-7.088-26.272-4.176c-5.184,1.632-11.008,2.64-17.456,2.64c-5.008,0-9.632-0.64-13.904-1.632
                                    c-9.728-2.448-19.904,0.448-26.992,7.552c-6.704,6.704-11.84,14.96-14.96,24.144C213.264,431.136,233.072,435.76,256,435.92z" />
                                    <g></g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col">
                     <span class="float-left">
                        <section class="botones">
                           <div id="separar">
                              <a onclick="hijo6();">
                                 <span class="boton3"> < </span> 
                              </a> 
                           </div> 
                        </section> 
                     </span> 
                     <span class="float-right">
                        <section class="botones">
                           <div id="separar">
                              <a onclick="enviar();">
                                 <span class="boton3"> > </span>
                              </a>
                           </div>
                        </section>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>






























            
            </div>
         </div>
      </div>


   </div>

</body>

</html>

<script>
/*FUNCIONALIDAD PARA LOS BOTONES*/
   function hijo1() {
       document.getElementById('hijo1').style.display = "block"
       document.getElementById('hijo2').style.display = "none"
       document.getElementById('hijo3').style.display = "none"
       document.getElementById('hijo4').style.display = "none"
       document.getElementById('hijo5').style.display = "none"
       document.getElementById('hijo6').style.display = "none"
       document.getElementById('hijo7').style.display = "none"
   }
/*FUNCION PARA LA PREGUNTA 1*/
   function hijo2() { 

      var porq1 = document.getElementById("porq1").value;
       if (!document.querySelector('input[name="radio"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } 
       else if (porq1.length <= 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '¡Ingrese un comentario!',
                allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
            })
            return false;
        }
        else {
           document.getElementById('hijo1').style.display = "none"
           document.getElementById('hijo2').style.display = "block"
           document.getElementById('hijo3').style.display = "none"
           document.getElementById('hijo4').style.display = "none"
           document.getElementById('hijo5').style.display = "none"
           document.getElementById('hijo6').style.display = "none"
           document.getElementById('hijo7').style.display = "none"
           $('#barra').css('width', '14.29%');
       }
   }
/*FUNCION PARA LA PREGUNTA 2*/
   function hijo3() {
       if (!document.querySelector('input[name="radio3"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 1!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else if (!document.querySelector('input[name="radio4"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 2!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else if (!document.querySelector('input[name="radio5"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 3!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else if (!document.querySelector('input[name="radio6"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 4!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else if (!document.querySelector('input[name="radio7"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 5!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else if (!document.querySelector('input[name="radio8"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 6!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else {
           document.getElementById('hijo1').style.display = "none"
           document.getElementById('hijo2').style.display = "none"
           document.getElementById('hijo3').style.display = "block"
           document.getElementById('hijo4').style.display = "none"
           document.getElementById('hijo5').style.display = "none"
           document.getElementById('hijo6').style.display = "none"
           document.getElementById('hijo7').style.display = "none"
           $('#barra').css('width', '28.57%');
       }
   }
/*FUNCION PARA LA PREGUNTA 3*/
   function hijo4() {
         if (!document.querySelector('input[name="radio33"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 1!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else if (!document.querySelector('input[name="radio44"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 2!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else if (!document.querySelector('input[name="radio55"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 3!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else if (!document.querySelector('input[name="radio66"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta de la pregunta 4!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else {
           document.getElementById('hijo1').style.display = "none"
           document.getElementById('hijo2').style.display = "none"
           document.getElementById('hijo3').style.display = "none"
           document.getElementById('hijo4').style.display = "block"
           document.getElementById('hijo5').style.display = "none"
           document.getElementById('hijo6').style.display = "none"
           document.getElementById('hijo7').style.display = "none"
           $('#barra').css('width', '42.86%');
       }
   }
/*FUNCION PARA LA PREGUNTA 4*/
   function hijo5() {
       var texto2 = document.getElementById("texto2").value;
       if (texto2.length == 0) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Debe ingresar un comentario!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           return false;
       } else if (texto2.length == 0) {
           document.getElementById('hijo1').style.display = "none"
           document.getElementById('hijo2').style.display = "none"
           document.getElementById('hijo3').style.display = "none"
           document.getElementById('hijo4').style.display = "none"
           document.getElementById('hijo5').style.display = "block"
           document.getElementById('hijo6').style.display = "none"
           document.getElementById('hijo7').style.display = "none"
           $('#barra').css('width', '57.14%');
       } else {
           document.getElementById('hijo1').style.display = "none"
           document.getElementById('hijo2').style.display = "none"
           document.getElementById('hijo3').style.display = "none"
           document.getElementById('hijo4').style.display = "none"
           document.getElementById('hijo5').style.display = "block"
           document.getElementById('hijo6').style.display = "none"
           document.getElementById('hijo7').style.display = "none"
           $('#barra').css('width', '57.14%');
       }
   }
/*FUNCION PARA LA PREGUNTA 5*/
   function hijo6() {
       var texto3 = document.getElementById("texto3").value;
       if (texto3.length == 0) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione su respuesta!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } else {
           document.getElementById('hijo1').style.display = "none"
           document.getElementById('hijo2').style.display = "none"
           document.getElementById('hijo3').style.display = "none"
           document.getElementById('hijo4').style.display = "none"
           document.getElementById('hijo5').style.display = "none"
           document.getElementById('hijo6').style.display = "block"
           document.getElementById('hijo7').style.display = "none"
           $('#barra').css('width', '71.43%');
       }
   }
/*FUNCION PARA LA PREGUNTA 6*/
   function hijo7() { 

      var porq6 = document.getElementById("porq6").value;
       if (!document.querySelector('input[name="radioF"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione su respuesta!',
               allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
           })
           hasError = true;
       } 
        else if (porq6.length <= 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '¡Ingrese un comentario!',
                allowOutsideClick: false //no permite que cierre la ventana a menos que se acepte una condición 
            })
            return false;
        } else {
           document.getElementById('hijo1').style.display = "none"
           document.getElementById('hijo2').style.display = "none"
           document.getElementById('hijo3').style.display = "none"
           document.getElementById('hijo4').style.display = "none"
           document.getElementById('hijo5').style.display = "none"
           document.getElementById('hijo6').style.display = "none"
           document.getElementById('hijo7').style.display = "block"
           $('#barra').css('width', '85.71%');
       }
   }
/*FUNCION PARA LAS ESTRELLAS*/
   function enviar() {
       if (!document.querySelector('input[name="rating"]:checked')) {
           Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '¡Seleccione una respuesta!',
               allowOutsideClick: false
           })
           hasError = true;
       } else {
           document.getElementById('formulario').submit();
           return false;
       }
   }
/*FUNCION PARA LAS PREGUNTAS SI/NO*/
   function cambioSiNo1(sel) {
       if (sel.value == "si") {
           divC = document.getElementById("nSi");
           divC.style.display = "";
           divT = document.getElementById("nNo");
           divT.style.display = "none";
       } else {
           divC = document.getElementById("nSi");
           divC.style.display = "none";
           divT = document.getElementById("nNo");
           divT.style.display = "";
       }
   }
   function cambioSiNo2(sel) {
       if (sel.value == "si4") {
           divC = document.getElementById("nSi2");
           divC.style.display = "";
           divT = document.getElementById("nNo2");
           divT.style.display = "none";
       } else {
           divC = document.getElementById("nSi2");
           divC.style.display = "none";
           divT = document.getElementById("nNo2");
           divT.style.display = "";
       }
   }
/*FUNCION PARA LOS RADIO BUTTON*/
   function showContent() {
       element = document.getElementById("content");
       radio = document.getElementById("check");
       radio1 = document.getElementById("check1");
       radio2 = document.getElementById("check2");
       radio3 = document.getElementById("check3");
       radio4 = document.getElementById("check4");
       if (radio.checked) {
           element.style.display = 'block';
       } else if (radio1.checked) {
           element.style.display = 'block';
       } else if (radio2.checked) {
           element.style.display = 'block';
       } else if (radio3.checked) {
           element.style.display = 'block';
       } else if (radio4.checked) {
           element.style.display = 'block';
       }
   }
/*INGRESO DE TEXTO EN MAYUSCULAS*/
   function mayus(e) {
       e.value = e.value.toUpperCase();
   }
/*QUERY PARA EL RESETEO DE LOS TEXTAREA*/
   $("#slct").change(function() {
       $("#texto1").val("");
   });
   $("#slct2").change(function() {
       $("#texto2").val("");
   });
/*QUERY PARA LA SELECCION DE RADIOS*/
   $("td").click(function() {
       $(this).find('input:radio').attr('checked', true);
   });;

/*FUNCION PARA DESACTIVAR EL CLICK DERECHO*/
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