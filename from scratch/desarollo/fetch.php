<?php
    //define the variables of the server:
    $host = "localhost";
    $dbusername = "uuu7djctptbt7";
    $dbpassword = "elcrack1409";
    $dbname = "dbu58nyapm8ef7";
    $tablename= "Tabla_de_prueba";

    $conn= new mysqli ($host, $dbusername, $dbpassword , $dbname);// Create connection

    if ($conn->connect_error) {// Check connection
        die("Connection failed: " . $conn->connect_error);//exit if error in connection
    }

    $sql = "SELECT comentario FROM $tablename";//get column from table 
    $result = $conn->query($sql);//put sql in a usable variable

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {// output data of each row
            echo $row["comentario"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();//close the connection
?>