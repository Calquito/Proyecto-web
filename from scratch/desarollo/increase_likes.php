<?php
    $ID = $_POST['ID'];//get external variable by name
    //define the variables of the server 
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    //$dbusername = "uuu7djctptbt7";
    //$dbpassword = "elcrack1409";
    $dbname = "dbu58nyapm8ef7";
    $tablename= "Tabla_de_prueba";

    $conn= new mysqli ($host, $dbusername, $dbpassword , $dbname);//create connection

    if(mysqli_connect_error()){//verify if there is not connection error
        die('Conect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{

        if (isset($_POST['increase_button'])) {

            $sql = "UPDATE $tablename SET likes = 20 WHERE ID = $ID;"; //insert into table
            if($conn->query($sql)){ //verify if sql exist in table
                echo "se inserto correctamente";
            }
            else{
                echo "error";
            }
            $conn->close();//close the connection
        
        } 
        else if (isset($_POST['decrease_button'])) {
            
        } 
        else {
            //no button pressed
        }
    }
    

?>