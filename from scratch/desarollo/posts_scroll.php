<div class="card d-flex align-content-start  mt-4 ">
    <div class="card-header" style="background-color: #C1DFF0;">
        <div class="d-flex flex-row bd-highlight justify-content-between">
            <div class=" bd-highlight">
                <span class="card-text"><?php echo $ID?></span>
                <span class="card-text" ><?php echo $row["universidad"] ?></span>
                <span class="card-text" ><?php echo $row["pais"] ?></span>
            </div>
            <div class=" bd-highlight">               
                <form>
                    <span class="card-text" id="likes<?php echo $ID;?>" ><?php echo $row["likes"] ?></span>
                    <input type="submit" name="increase_button"  value="+"  onclick="return increase('<?php echo $ID;?>','<?php echo 'increase_button';?>',<?php echo $row['likes'] ?>,'<?php echo $IP;?>')">
                    <input type="submit" name="decrease_button"  value="-"  onclick="return increase('<?php echo $ID;?>','<?php echo 'decrease_button';?>',<?php echo $row['likes'] ?>,'<?php echo $IP;?>')">
                </form>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="card-text"><?php echo $row["Comentario"]?></p>
    </div>
    <div class="card-footer">
            <div style="width:4%;height:4%;" class="float-right">
                <input style="width:100%;height:100%;" type="image" src="images/report.png" alt="Enviar reporte" data-toggle="modal" data-target="#report_modal<?php echo $ID?>">
                <?php include "report_modal.php"?>
            </div>

            <div style="width:10%;height;4%;" class="float-right">
                <!-- iconos de redes sociales-->
            </div>

            <div>
                <div style="width:4%;height:4%;">
                    <input style="width:100%;height:100%;" type="image" src="images/comment_icon.png" alt="Enviar reporte" data-toggle="collapse" data-target="#comments<?php echo $ID;?>">
                </div>
                <div id="comments<?php echo $ID;?>" class="collapse">
                    Lorem ipsum dolor text.... necesito un texrto mas largo que me premita ver como cargarian los comentario s de face, por lo que voy a empexar  a escribir varas aleatoriamente, con razon,, esta mierda se borro entonces emepcemps a escribir aleatoriametente fdscjkdmjsjcnksvfovmifdkmsjvsmivkfprono jdsnfldmfdsflkdsmfkjdnsfkmdsfnmdsfdsmfdsm tratere de ecrvibir sad pero no pudeecxdcddxdxdxdxdxxd
                </div>
            </div>
    </div>
</div>

