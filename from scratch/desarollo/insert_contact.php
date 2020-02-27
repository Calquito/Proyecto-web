<?php
    $comentario = $_POST['comentario'];//get external variable by name
    $nombre = $_POST['nombre'];//get external variable by name
    $email = $_POST['email'];//get external variable by name

    if(!empty($comentario)){

        include 'host_variables.php';

        $conn= mysqli_connect ($host, $dbusername, $dbpassword , $dbname);//create connection

        $datos=$nombre . ',' . $email . ',' . $comentario;

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

?>