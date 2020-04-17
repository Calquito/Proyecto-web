<?php
  try {
      include 'global_head.php';
    ?>
          <div class="d-flex flex-row bd-highlight justify-content-around ">
            <!--scrolls-->
            <div class=" bd-highlight d-none d-sm-block w-25 ">
            </div>
            <div class=" bd-highlight w-100">       
                <div class="d-flex flex-row bd-highlight justify-content-around">
                    <div class="w-75"></div>
                    <div class="modal-body"><!--modal content--> 
                        <h4 class="modal-title" style="text-align: center;" >Reglas de la página</h4>
                        <br>
                        <p class="modal-title" >Confesiones de U es una plataforma online donde los estudiantes universitarios pueden sentirse libres de expresar sus opiniones y secretos acerca de su vida universitaria. Es un espacio para compartir de manera anónima y pasar el rato.
                        Algunas confesiones pueden no ser del agrado de todos, ser ofensivo o revelador y sin embargo no incumplir las normas de la página.
                        A pesar de que intentamos censurar lo menos posible, debemos cumplir con estas reglas para el bienestar de todos.
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
                        *Contenido que atenta contra la salud o la integridad física, mental y psicológica
                        <br> 
                        *Contenido discriminatorio
                        <br> 
                        *Contenido pornográfico o erótico
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
