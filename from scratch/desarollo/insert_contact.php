<?php
    $comentario_contacto = $_POST['comentario_contacto'];//get external variable by name
    $nombre = $_POST['nombre'];//get external variable by name
    $email = $_POST['email'];//get external variable by name

    if(!empty($comentario_contacto)){

        include 'host_variables.php';

        $conn= mysqli_connect ($host, $dbusername, $dbpassword , $dbname);//create connection

        $datos=$nombre . ',,,,' . $email . ',,,,,' . $comentario_contacto;

        if(mysqli_connect_error()){//verify if there is not connection error
            die('Conect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
            echo json_encode('error');
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