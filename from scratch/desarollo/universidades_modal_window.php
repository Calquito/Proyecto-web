   <!-- Modal -->
<div class="modal fade" id="universidades_modal" tabindex="-1" role="dialog" aria-labelledby="universidades_exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <form  method="post" action='universidades.php'>
            <div class="modal-header">
                <h5 class="modal-title" id="universidades_exampleModalLabel">Modal title</h5>
                <?php include 'universidades_drop_down.php';?>
            </div>
            <div class="modal-body"><!--modal content-->         
                <input type="submit" name="universidades_Update" id="universidades_update" value="Update"> 
            </div>
        </form>
    </div>
</div>
</div>
