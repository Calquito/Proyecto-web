   <!-- Modal -->
<div class="modal fade" id="universidades_modal" tabindex="-1" role="dialog" aria-labelledby="universidades_exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form  method="get" action='universidades.php'>
            <div class="modal-header">
                <div class="w-100">
                    <h5 class="modal-title" id="exampleModalLabel">¿De dónde eres?:</h5>
                </div>
                <div class ="w-100">
                    <?php include 'universidades_drop_down.php';?>
                </div>
            </div>
            <div class="modal-body"><!--modal content-->
                <input class="float-right mb-2 btn btn-primary" type="submit" name="universidades_Update" id="universidades_update" value="Ir" style="background-color: #0073e6;">        
            </div>
        </form>
    </div>
</div>
</div>
