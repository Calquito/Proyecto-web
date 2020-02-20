
    <div class="card d-flex align-content-start  mt-4 ">
        <div class="card-header">
            <form>
                <p class="card-text"><?php echo $ID?></p>
                <p class="card-text" id="likes<?php echo $ID;?>" ><?php echo $row["likes"] ?></p>

                <input type="submit" name="increase_button"  value="+"  onclick="return increase('<?php echo $ID;?>','<?php echo 'increase_button';?>',<?php echo $row['likes'] ?>,'<?php echo $IP;?>')">
                <input type="submit" name="decrease_button"  value="-"  onclick="return increase('<?php echo $ID;?>','<?php echo 'decrease_button';?>',<?php echo $row['likes'] ?>,'<?php echo $IP;?>')">
            </form>
        </div>

        <div class="card-body">
            <p class="card-text"><?php echo $row["Comentario"]?></p>
        </div>
        <div class="card-footer ">
            <form >
                <input type="submit" name="crease_button"  value="semd">
            </form>
        </div>
    </div>
