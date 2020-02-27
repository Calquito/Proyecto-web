
<?php

$comentario = $_POST['comentario'];//get external variable by name
$parent_selection = $_POST['parent_selection'];//get external variable by name
$child_selection = $_POST['child_selection'];//get external variable by name

if(!empty($comentario)){

    include 'host_variables.php';

    $conn= mysqli_connect ($host, $dbusername, $dbpassword , $dbname);//create connection
    if(mysqli_connect_error()){
        echo json_encode('error');
        die('Conect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
    }

    else{
        $stmt = $conn->prepare("INSERT INTO $tablename (Comentario,pais,universidad,date) values (?,?,?,CURDATE())");
        $stmt->bind_param("sss", $comentario,$parent_selection,$child_selection);
        $stmt->execute();
        $stmt->close();
        echo json_encode('inserted'); 
    }
    mysqli_close($conn); 
}



?>