   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post" action="insert.php">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <?php include 'drop_down.php';?>
            </div>
            <div class="modal-body"><!--modal content-->         
                <textarea class="form-control" id="exampleFormControlTextarea1" name="comentario" rows="3"></textarea>
                <input type="submit" value="Submit" class="btn btn-primary float-right mt-2">
            </div>
        </form>
    </div>
</div>
</div>

  