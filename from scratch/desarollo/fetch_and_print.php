<?php
    //video: https://www.youtube.com/watch?v=As6R1MHUNhQ
    //define the variables of the server:

    include 'host_variables.php';
    $messages_per_add=8;

    //get ip 
    include 'get_ip.php';
    $IP=getUserIpAddr();
    $todas=$_POST["todas"];
    $pais=$_POST["pais"];
    $universidad=$_POST["universidad"];
    $contid=$_POST["contid"];
    $contvalue=$_POST["contvalue"];
    $ID=0;

    // fetch from server
    if(isset($_POST["limit"], $_POST["start"])){      
        $connect = mysqli_connect($host, $dbusername, $dbpassword , $dbname);
        if($todas==='todas'){
            $query = "SELECT ID,Comentario,likes FROM $tablename ORDER BY ID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result)){
                $contvalue++;
                if ($contvalue>=$messages_per_add){
                    break;
                }
                $ID=$row["ID"]
                ?>
                <!doctype html>
                    <?php include 'posts_scroll.php'; ?>
                </html>
                <?php
                
            }
        }
        else if($universidad==='no'){
            $query = "SELECT ID,Comentario,likes,pais FROM $tablename WHERE pais='".$pais."' ORDER BY ID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result)){
                $ID=$row["ID"];
                    $contvalue++;
                    if ($contvalue>=$messages_per_add){
                        break;
                    }
                    ?>
                    <!doctype html>
                        <?php include 'posts_scroll.php'; ?>
                    </html>
                    <?php
                
            }
        }
        else {
            $query = "SELECT ID,Comentario,likes,universidad FROM $tablename WHERE universidad='".$universidad."' ORDER BY ID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result)){
                $ID=$row["ID"];
                $contvalue++;
                if ($contvalue>=$messages_per_add){
                    break;
                }
                ?>
                <!doctype html>
                    <?php include 'posts_scroll.php'; ?>
                </html>
                <?php  
            }
        }
        
        if($contvalue>=$messages_per_add){
            include 'ads.php';
        }
        if(intval($ID)<=71){
            $contvalue='finished';
        }

        ?>
        <input type="hidden" name="cont" id="<?php echo $contid;?>" value="<?php echo $contvalue;?>">
        <?php
        mysqli_close($connect);
    }
    else{
        echo json_encode('error');
    }

?>