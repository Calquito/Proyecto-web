<?php
    //get vsariables from form
    $ID = $_POST['ID'];
    $IP = $_POST['IP'];

    //define the variables of the server 
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    //$dbusername = "uuu7djctptbt7";
    //$dbpassword = "elcrack1409";
    $dbname = "dbu58nyapm8ef7";
    $tablename= "Tabla_de_prueba";

    $conn= mysqli_connect($host, $dbusername, $dbpassword , $dbname);//create connection

    if(mysqli_connect_error()){//verify if there is not connection error
        die('Conect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{

        if (isset($_POST['increase_button']) and !verify($IP,$ID,$conn,$tablename) ) {
            $sql = "UPDATE $tablename SET likes = likes +1 , ips = CONCAT(ips,'".$IP."',',')   WHERE ID = $ID;"; //insert into table

            if($conn->query($sql)){ //verify if sql exist in table
                echo "insertada";
            }
            else{
                echo "error";
            }
            $conn->close();//close the connection
        
        } 
        else if (isset($_POST['decrease_button']) and !verify($IP,$ID,$conn,$tablename)) {
            $sql = "UPDATE $tablename SET likes = likes -1 , ips = CONCAT(ips,'".$IP."',',')   WHERE ID = $ID;"; //insert into table
            if($conn->query($sql)){ //verify if sql exist in table
                echo "se inserto correctamente";
            }
            else{
                echo "error";
            }
            $conn->close();//close the connection
            
        } 
        else {
            //no button pressed
            echo "no lo metio";
        }
    }

function verify($IP,$ID,$conn,$tablename){
    $exist=FALSE;
    $query = "SELECT ips FROM $tablename WHERE ID = $ID";
    $result= mysqli_query($conn, $query);
    $ip_directions_string = mysqli_fetch_array($result);
    $ip_directions_array = explode(',', $ip_directions_string["ips"]);
    foreach($ip_directions_array as $ip_direction){
        if ($ip_direction == $IP){
            $exist = True;
            break;
        }
    }
    echo $exist;
    return $exist;

}


?>