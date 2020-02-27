<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>confesionesdeu.com ¡el sitio de las confesiones universitarias!</title>

</head>
<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->	
    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <div class="d-flex flex-row bd-highlight mb- justify-content-around ">
                <form  method="post" >
                    <div class="modal-header">
                        <h5 class="modal-title" >Página de contacto</h5>                        
                    </div>
                    <div class="modal-body"><!--modal content--> 
                        <p class="modal-title" >Aquí puedes dejar tus comentarios y sugerencias para la página.Si tuviste algún problema en nuestra página, te agradecemos nos lo expliques con detalle</p>        
                        <input type='text' class="form-control"  name="nombre" id="nombre" placeholder="nombre(opcional)"></text><br>
                        <input type='text' class="form-control"  name="email" id="email" placeholder="email(opcional)"></text><br>
                        <textarea class="form-control"  name="comentario" id="comentario" placeholder="comentario" rows="3"></textarea>
                        <br> <br>
                        <input type="submit" name="Update" id="update" value="Enviar" onclick="return submit_confession()"> ¡Gracias!
                    </div>
                </form>

                <script>
                    function submit_confession() {
                        var comentario = $("#comentario").val(); 
                        var email=$("#email").val();
                        var nombre=$('#nombre').val();
                        var dataString = 'comentario='+comentario+"&email="+email+"&nombre="+nombre;
                        $.ajax({
                            type:'POST',
                            dataType: "json",
                            data:dataString,
                            url:'insert_contact.php',
                            success:function(data) {
                                if(data !=='error'){
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
        </div>

    </div>        
</body>
</html>