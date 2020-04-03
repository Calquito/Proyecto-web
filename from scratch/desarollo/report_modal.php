<div class="modal fade" id="report_modal<?php echo $ID?>" tabindex="-1" role="dialog" aria-labelledby="report_exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form>
                <input type="hidden" name="reported_id" id="reported_id" value="<?php echo $ID;?>">
                <div class="modal-body">
                    <h5 class="modal-title" id="reportModalLabel<?php echo $ID?>">Reportar confesión <?php echo $ID?></h5>
                    <br>
                    <p>Si esta confesión viola las <a href="reglas.php">reglas de la página</a>  te agradecemos la reportes. La revisaremos y procederemos a borrarla si es necesario. ¡Gracias!</p>
                    <input class="float-right mt-2 mb-2" type="submit" name="report_update<?php echo $ID?>" id="report_update<?php echo $ID?>" value="Reportar" onclick="return send_report('<?php echo $ID;?>')">        
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function send_report(ID)
    { 
        $.ajax({
            type:"post",
            url: "send_report.php",
            dataType: "json",
            data:'reported_id='+ID,
            cache:false,
            success:function(data) {
                if(data !=='error'){
                    $('#report_modal'+ID).modal('hide');
                    alert("Hemos recibido tu reporte, !Gracias!");
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
    }

</script>
