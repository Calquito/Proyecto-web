<?php
    //get vsariables from form
    $ID = $_POST['ID'];
    $IP = $_POST['IP'];

    include 'host_variables.php';
    
    $conn= mysqli_connect($host, $dbusername, $dbpassword , $dbname);//create connection

    if(mysqli_connect_error()){//verify if there is not connection error
        echo json_encode('error');
        die('Conect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
        if (isset($_POST['increase_button']) and !verify($IP,$ID,$conn,$tablename) ) {

            $stmt = $conn->prepare("UPDATE $tablename SET likes = likes +1 , ips = CONCAT(ips,?,'^$')  WHERE ID = ?;");
            $stmt->bind_param("ss",$IP,$ID);
            $stmt->execute();
            $stmt->close();
            echo json_encode('inserted'); 
            mysqli_close($conn);//close the connection
        
        } 
        else if (isset($_POST['decrease_button']) and !verify($IP,$ID,$conn,$tablename)) {

            $stmt = $conn->prepare("UPDATE $tablename SET likes = likes -1 , ips = CONCAT(ips,?,'^$')  WHERE ID = ?;");
            $stmt->bind_param("ss",$IP,$ID);
            $stmt->execute();
            $stmt->close();
            echo json_encode('inserted'); 
            mysqli_close($conn);//close the connection
            
        } 
        else {
            //no button pressed
            echo json_encode('not inserted');
            mysqli_close($conn);
        }
        
    }

function verify($IP,$ID,$conn,$tablename){
    $exist=FALSE;
    $query = "SELECT ips FROM $tablename WHERE ID = $ID";
    $result= mysqli_query($conn, $query);
    $ip_directions_string = mysqli_fetch_array($result);
    $ip_directions_array = explode('^$', $ip_directions_string["ips"]);
    foreach($ip_directions_array as $ip_direction){
        if ($ip_direction === $IP){
            $exist = True;
            break;
        }
    }
    return $exist;

}


?>