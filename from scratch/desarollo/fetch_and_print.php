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
            echo '
            <div class="card d-flex align-content-start  mt-4 w-75 ">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">'.$row["Comentario"].'</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer ">
                    2 days ago
                </div>
            </div>
            ';
        }    
    }
    else{
        die("Connection failed: ");
    }


?>