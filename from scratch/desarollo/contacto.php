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
                        <h4 class="modal-title" style="text-align: center;">Página de contacto</h4>
                        <br>
                        <p class="modal-title" >Aquí puedes dejar tus comentarios y sugerencias para la página.Si tuviste algún problema en nuestra página, te agradecemos nos lo expliques con detalle.</p>        
                        <form  method="post" >
                            <input type='text' class="form-control"  name="nombre" id="nombre" placeholder="Nombre(opcional)"></text><br>
                            <input type='text' class="form-control"  name="email" id="email" placeholder="Email(opcional)"></text><br>
                            <textarea class="form-control"  name="comentario_contacto" id="comentario_contacto" placeholder="Comentario" rows="3"></textarea>
                            <br> <br>
                            <input class="btn btn-primary" type="submit" name="Update" id="update" value="Enviar" onclick="return submit_message()" style="background-color: #0073e6;"> ¡Gracias!
                        </form>
                    </div>
                    <div class="w-75"></div>  
                <script>
                    function submit_message() {
                        var comentario_contacto = $("#comentario_contacto").val(); 
                        var email=$("#email").val();
                        var nombre=$('#nombre').val();
                        var dataString = 'comentario_contacto='+comentario_contacto+"&email="+email+"&nombre="+nombre;
                        $.ajax({
                            type:'POST',
                            dataType: "json",
                            data:dataString,
                            url:'insert_contact.php',
                            success:function(data) {
                                if(data =='inserted'){
                                    alert("¡Gracias!");
                                    location.href = "index.php";
                                }
                                else{
                                    location.href = "error.php";
                                }
                            },
                            error: function (data) {
                                location.href = "error.php";
                            }
                        });
                        return false;
                    };
                </script>
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
