   <!-- Modal -->
<div class="modal fade" id="confessionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered w-75" role="document">
    <div class="modal-content">
        <form  method="post" >
            <div class="modal-header">
                <div class="w-100">
                    <h5 class="modal-title" id="exampleModalLabel">¿De dónde eres?:</h5>
                </div>
                <div class ="w-100">
                    <?php include 'drop_down.php';?>
                </div>
            </div>
            <div class="modal-body"><!--modal content-->         
                <textarea class="form-control"  name="comentario" id="comentario" rows="3" placeholder='Escribe tu confesión'></textarea>
                <input  class="float-right mt-2 mb-2" type="submit" name="Update" id="update" value="Enviar" onclick="return submit_confession()"> 
            </div>
        </form>

        <script>
            function submit_confession() {     
                var comentario = $("#comentario").val(); 
                var parent_selection = $("#parent_selection").val();
                var child_selection = $("#child_selection").val();
                var dataString = 'comentario='+comentario+'&parent_selection='+parent_selection+'&child_selection='+child_selection;

                $.ajax({
                    type:'POST',
                    dataType: "json",
                    data:dataString,
                    url:'insert.php',
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



  