<?php
    //video: https://www.youtube.com/watch?v=As6R1MHUNhQ
    //define the variables of the server:
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    //$dbusername = "uuu7djctptbt7";
    //$dbpassword = "elcrack1409";
    $dbname = "dbu58nyapm8ef7";
    $tablename= "Tabla_de_prueba";

    // fetch from server
    if(isset($_POST["limit"], $_POST["start"])){
        $connect = mysqli_connect($host, $dbusername, $dbpassword , $dbname);
        $query = "SELECT * FROM $tablename ORDER BY ID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
        $result = mysqli_query($connect, $query);
        echo'esto deberia aparecer una vez cada n mensajes';
        while($row = mysqli_fetch_array($result)){
?>
            <div class="card d-flex align-content-start  mt-4 ">
                <div class="card-header">
                <form method="post" action="increase_likes.php">
                    <p class="card-text"><?php echo $row["ID"]?></p>
                    <p class="card-text" ><?php echo $row["likes"] ?></p>

                    <input type="hidden" name="ID" value="<?php echo $row["ID"];?>">

                    <input type="submit" name="increase_button" value="+" />
                    <input type="submit" name="decrease_button" value="-" />
                </form>
                </div>

                <div class="card-body">
                    <p class="card-text"><?php echo $row["Comentario"]?></p>
                </div>
                <div class="card-footer ">
                    2 days ago
                </div>
            </div>
<?php     
        }    
    }
    else{
        die("Connection failed: ");
    }


?>