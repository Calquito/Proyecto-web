<?php
    $comentario = $_POST['comentario'];
    if(!empty($comentario)){
        $host = "localhost";
        $dbUsername = "uuu7djctptbt7";
        $dbPassword = "elcrack1409";
        $dbname = "dbu58nyapm8ef7";

        //create connection

        $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

        if(mysqli_connect_error()){
            die('Conect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else{
            $SELECT = "SELECT comentario From register Where comentario = ? Limit 1";
            $INSERT = "INSERT Into register(comentario) values (?)";
            //Preparate statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$comentario);
            $stmt->execute();
            $stmt->bind_result($comentario);
            $stmt->store_result($comentario);
            $rnum = $stmt->num_rows;

            if($rnum==0){
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("s", $comentario);
                $stmt->execute();
                echo "ingresado correctamente";
            }
            else{
                echo "repetido";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else{
        echo "rellenar campos ";
        die();
    }
?>