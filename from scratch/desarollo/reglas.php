<?php
  try {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <html>
    <head>
        <link rel="icon" type="image/png" href="images/page_icon.png" />
        <link rel="stylesheet" type="text/css" href="all_styles.css" />
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
         
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <title>confesionesdeu.com ¡el sitio de las confesiones universitarias!</title>

    </head>
    <body style="background-color:#E9EBEE;">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->	
        <script src="jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>


        <!--includes -->
        <?php 
        include 'nav_and_bar.php';
        include 'send_confession_modal_window.php';
        include 'paises_modal_window.php';
        include 'universidades_modal_window.php';
        include 'posts_scripts.php'
        ?>
        
          <div class="d-flex flex-row bd-highlight justify-content-around ">
            <!--scrolls-->
            <div class=" bd-highlight d-none d-sm-block w-25 ">
            </div>
            <div class=" bd-highlight w-100">       
                <div class="d-flex flex-row bd-highlight justify-content-around">
                    <div class="w-75"></div>
                    <div class="modal-body"><!--modal content--> 
                        <h5 class="modal-title" >Reglas de la página</h5>
                        
                        <p class="modal-title" >Confesiones de U es una plataforma online donde los estudiantes universitarios pueden sentirse libres de expresar sus opiniones y secretos acerca de su vida universitaria. Es un espacio para compartir de manera anónima y disfrutable
                        Algunas confesiones pueden no ser del agrado de todos, ser ofensivo o revelador y sin embargo no incumplir las normas de la página.
                        Queremos que todos se sientan cómodos al utilizar nuestra página, por lo que hemos definido qué contenido no es aceptable en nuestra página. Estas reglas deben ser cumplidas por las confesiones y los comentarios hechos en la página.
                        <br>
                        <br>
                        <h5 class="modal-title" >Contenido no deseado:</h5>
                        <p class="modal-title" >
                        *Contenido ilegal
                        <br>
                        *Spam
                        <br>
                        *Amenazas
                        <br> 
                        *Rumores falsos que puedan afectar la imagen de alguien
                        <br> 
                        *Contenido que incite a la violencia
                        <br> 
                        *Contenido con información falsa
                        <br> 
                        *Contenido que hositgue, acose o humille 
                        <br> 
                        *Contenido con información personal que no debe ser de acceso público
                        <br> 
                        *Contenido que atenta contra la salud o la integridad física y mental
                        <br> 
                        *Contenido discriminatorio
                        <br> 
                        *Contenido pornografico ilegal 
                        <br> 
                        *Contenido engañoso
                        <br> 
                        <br> 

                        **Cualquier usuario de la pagina es libre de ofrecer productos y servicios, o hacerle publicidad a los mismos, siempre y cuando cumpla con las leyes vigentes y no sea spam.

                        <br> 
                        <br> 
                        **Confesiones de U, dentro del marco de lo legal, no eliminará confesiones simplemente porque sean desagradables para alguien. Cierto contenido puede no ser del gusto de todos, pero esto no implica que deba ser eliminado. 

                        <br> 
                        <br> 
                        Cualquier consulta puedes dirigirla mediante nuestra <a href="contacto.php">página de contacto.</a>
                        </p>        
                        
                    </div>
                    <div class="w-75"></div>  
                </div>
            </div>
            <!--sidebar-->
            <div class=" bd-highlight d-none d-sm-block w-75 ">
              <div class="d-flex flex-row bd-highlight justify-content-around ">
                <div class=" bd-highlight w-50">
                </div>
                <div class=" bd-highlight w-100">
                  <?php include "sidebar.php"?>
                </div>
              </div>
            </div>    
          </div>

        <!-- variables of the navbar -->
        <input type="hidden" name="todas" id="todas" value="<?php echo $todas;?>">
        <input type="hidden" name="pais" id="pais" value="<?php echo $pais;?>">
        <input type="hidden" name="universidad " id="universidad" value="<?php echo $universidad;?>">
            
    </body>
    </html>
  <?php
  }
  catch (Exception $e){
    include 'error.php';
  }
?>
