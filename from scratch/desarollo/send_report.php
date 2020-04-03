<?php
    $reported_id = $_POST['reported_id'];//get external variable by name

    if(!empty($reported_id)){

        include 'host_variables.php';

        $conn= mysqli_connect ($host, $dbusername, $dbpassword , $dbname);//create connection

        $datos= 'reported_id:'. $reported_id;

        if(mysqli_connect_error()){//verify if there is not connection error
            echo json_encode('error');
            die('Conect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else{
            $stmt = $conn->prepare("INSERT INTO reports (Comentario) value (?)");
            $stmt->bind_param("s", $datos);
            $stmt->execute();
            $stmt->close();
            echo json_encode('inserted'); 
        }
        mysqli_close($conn);//close the connection
    }
    else{
        echo json_encode('error');
    }

?>