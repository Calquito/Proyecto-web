   <!-- Modal -->
<div class="modal fade" id="confessionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <form  method="post" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <?php include 'drop_down.php';?>
            </div>
            <div class="modal-body"><!--modal content-->         
                <textarea class="form-control"  name="comentario" id="comentario" rows="3"></textarea>
                <input type="submit" name="Update" id="update" value="Update" onclick="return submit_confession()"> 
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
                    data:dataString,
                    url:'insert.php',
                    success:function(data) {
                    alert(data);
                    }
                });
                return false;
            };
        </script>
    </div>
</div>
</div>


  