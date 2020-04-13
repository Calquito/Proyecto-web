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
                        <h4 class="modal-title" style="text-align: center;">Agregar universidad</h4>
                        <br>
                        <p class="modal-title" >Aquí puedes agregar tu universidad. Indícanos el nombre y el país y con gusto la agregaremos. Cualquier comentario adicional es bienvenido</p>               
                        <br>
                        <form  method="post" >
                            <input type='text' class="form-control"  name="nombre" id="nombre" placeholder="País"></text><br>
                            <input type='text' class="form-control"  name="email" id="email" placeholder="Universidad"></text><br>
                            <textarea class="form-control"  name="comentario_contacto" id="comentario_contacto" placeholder="Comentario(opcional)" rows="3"></textarea>
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
