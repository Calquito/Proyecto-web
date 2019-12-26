<?php
    //video: https://www.youtube.com/watch?v=As6R1MHUNhQ
    //define the variables of the server:
    $host = "localhost";
    $dbusername = "uuu7djctptbt7";
    $dbpassword = "elcrack1409";
    $dbname = "dbu58nyapm8ef7";
    $tablename= "Tabla_de_prueba";

    if(isset($_POST["limit"], $_POST["start"]))
    {
    $connect = mysqli_connect($host, $dbusername, $dbpassword , $dbname);
    $query = "SELECT * FROM $tablename ORDER BY ID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
    echo '
    <h3>'.$row["Comentario"].'</h3>
    <p>'.$row["Comentario"].'</p>
    <p class="text-muted" align="right">By - '.$row["post_author"].'</p>
    <hr />
    ';
    }
    }

?>