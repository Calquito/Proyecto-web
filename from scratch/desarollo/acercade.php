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
                        <h4 class="modal-title" style="text-align: center;" >Acerca de</h4>
                        <br>
                        <p class="modal-title" >ConfesionesdeU es una página web dirigida  a estudiantes universitarios de habla hispana con el fin de desahogarse y distraerse de la ajetreada vida universitaria. En esta página, los estudiantes pueden compartir sus anécdotas, recuerdos, consejos y conocimientos acerca de su universidad, profesores, ambiente, carrera, o en general, las vivencias universitarias que les causan más risa, enojo o que crean  les pueden servir a los demás. Las confesiones son totalmente anónimas, lo que da la oportunidad de expresarse con total libertad y confianza.</p>        
                        <br>
                        <h5 class="modal-title" >Cómo funciona:</h5>
                        <p class="modal-title" >*Confesiones: los estudiantes pueden compartir sus confesiones  de forma completamente anónima. ¿Por qué quedarte con tu experiencia cuando puedes compartirla ?
                        <br>
                        *Comentarios: Cada confesión puede ser comentada mediante el sistema de comentarios de cada confesión, utilizando las redes sociales o de manera anónima.
                        <br>
                        *Votaciones: Los usuarios pueden votar las confesiones, dependiendo de si les parece útil, interesante o divertida. Las confesiones mejor votadas aparecerán en nuestro canal de Youtube. ¡No te las pierdas!
                        <br>
                        <br>
                        ¿Tienes alguna idea o sugerencia para la pagina?, no dudes en hacerla a través de nuestra <a href="contacto.php">página de contacto.</a>
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
