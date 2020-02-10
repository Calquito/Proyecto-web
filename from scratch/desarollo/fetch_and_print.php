<?php
    //video: https://www.youtube.com/watch?v=As6R1MHUNhQ
    //define the variables of the server:

    include 'host_variables.php';
?>
    <script>
    function increase(ID,button,likes)
    {
        // Append the counter id to the ID to get the correct input
        var ID=document.getElementById('ID' + ID).value;
        var IP=document.getElementById('IP' + ID).value;
        var increase_button='increase_button';
        var decrease_button='decrease_button';
        var likes=parseInt(likes);
        var return_message;
        if(button.localeCompare('increase_button')==0){
            var dataString='ID='+ID+'&IP='+IP+'&increase_button='+increase_button;
            likes+=1;
        }
        else{
            var dataString='ID='+ID+'&IP='+IP+'&decrease_button='+decrease_button;
            likes-=1;
        }    
        $.ajax({
            type:"post",
            url: "increase_likes.php",
            dataType: "json",
            data:dataString,
            cache:false,
            success:function(data) {
                    return_message=data;
                    change(ID,return_message,likes.toString());
            }

        });
        return false;
    }
    
    function change(ID,return_message,likes){
        if(return_message=='not inserted'){
            $('#likes'+ID).text(likes);
        }
        return false;
    }
    </script>

<?php
    //get ip 
    include 'get_ip.php';
    $IP=getUserIpAddr();
    
    // fetch from server
    if(isset($_POST["limit"], $_POST["start"])){
        $connect = mysqli_connect($host, $dbusername, $dbpassword , $dbname);
        $query = "SELECT ID,Comentario,likes FROM $tablename ORDER BY ID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
        $result = mysqli_query($connect, $query);
        echo'esto deberia aparecer una vez cada n mensajes';
        while($row = mysqli_fetch_array($result)){
            $ID=$row["ID"]
?>
        <!doctype html>
            <div class="card d-flex align-content-start  mt-4 ">
                <div class="card-header">
                    <form id="pen">
                        <p class="card-text"><?php echo $ID?></p>
                        <p class="card-text" id="likes<?php echo $ID;?>" ><?php echo $row["likes"] ?></p>

                        <!-- pass variables to php -->
                        <input type="hidden" name="ID" id="ID<?php echo $ID;?>" value="<?php echo $ID;?>">
                        <input type="hidden" name="IP" id="IP<?php echo $ID;?>" value="<?php echo $IP;?>">

                        <input type="submit" name="increase_button"  value="+"  onclick="return increase('<?php echo $ID;?>','<?php echo 'increase_button';?>',<?php echo $row['likes'] ?>)">
                        <input type="submit" name="crease_button"  value="-"  onclick="return increase('<?php echo $ID;?>','<?php echo 'decrease_button';?>',<?php echo $row['likes'] ?>)">
                    </form>
                </div>

                <div class="card-body">
                    <p class="card-text"><?php echo $row["Comentario"]?></p>
                </div>
                <div class="card-footer ">
                    2 days ago
                </div>
            </div>
        </html>
  
<?php     
        }    
    }
    else{
        die("Connection failed: ");
    }

?>