  
<div class="card d-flex align-content-start  mt-4 ">
    <div class="card-header" style="background-color: #C1DFF0;">
        <div class="d-flex flex-row bd-highlight justify-content-between" >
            <div class=" bd-highlight" style="width:100%;height:100%;">
                <span class="card-text"><?php echo $ID?></span>
                <span class="card-text" ><?php echo $row["pais"] ?></span>
                <span class="card-text" ><?php echo $row["universidad"] ?></span>
            </div>
            <div class=" bd-highlight" style="text-align:right; width:100%;height:100%;">               
                <form>
                    <span class="card-text mr-1" id="likes<?php echo $ID;?>" ><?php echo $row["likes"] ?></span>
                    <input class="card-text mr-1" style="width:20px; height:20px;" type="image" src="images/like.png" alt="like" name="increase_button"  onclick="return increase('<?php echo $ID;?>','<?php echo 'increase_button';?>',<?php echo $row['likes'] ?>,'<?php echo $IP;?>')">
                    <input style="width:20px; height:20px;" type="image" src="images/dislike.png" alt="dislike" name="decrease_button"  onclick="return increase('<?php echo $ID;?>','<?php echo 'decrease_button';?>',<?php echo $row['likes'] ?>,'<?php echo $IP;?>')">
                </form>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="card-text"><?php echo $row["Comentario"]?></p>
    </div>
    <div class="card-footer">
            <div style="width:22px;height:22px;" class="float-right">
                <input style="width:100%;height:100%;" type="image" src="images/report.png" alt="Enviar reporte" data-toggle="modal" data-target="#report_modal<?php echo $ID?>">
                <?php include "report_modal.php"?>
            </div>

            <div style="width:10%;height;4%;" class="float-right">
                <!-- iconos de redes sociales-->
            </div>

            <div>
                <div style="width:22px;height:22px;">
                    <input style="width:100%;height:100%;" type="image" src="images/comment_icon.png" alt="Enviar reporte" data-toggle="collapse" data-target="#comments<?php echo $ID;?>">
                </div>
                <div id="comments<?php echo $ID;?>" class="collapse">
                    <div id="wpac-comment<?php echo $ID;?>"></div>
                    <script type="text/javascript">
                    wpac_init = window.wpac_init || [];
                    wpac_init.push({widget: 'Comment', id: 24457});
                    (function() {
                        if ('WIDGETPACK_LOADED' in window) return;
                        WIDGETPACK_LOADED = true;
                        var mc = document.createElement('script');
                        mc.type = 'text/javascript';
                        mc.async = true;
                        mc.src = 'https://embed.widgetpack.com/widget.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
                    })();
                    </script>
                    <!--<a href="https://widgetpack.com" class="wpac-cr">Comments System WIDGET PACK</a>-->
                </div>
            </div>
    </div>
</div>

