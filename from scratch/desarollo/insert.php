 <?php
    $comentario = $_POST['comentario'];//get external variable by name
    $parent_selection = $_POST['parent_selection'];//get external variable by name
    $child_selection = $_POST['child_selection'];//get external variable by name

    if(!empty($comentario)){

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
            //$sql = "INSERT INTO $tablename (Comentario) values ('$comentario')"; //insert into table
            $sql = "INSERT INTO $tablename (Comentario,f1,f2,date) values ('$comentario','$parent_selection','$child_selection', CURDATE())"; //insert into table
            if($conn->query($sql)){ //verify if sql exist in table
                echo "se inserto correctamente";
            }
            else{
                echo $child_selection;
            }
            $conn->close();//close the connection
        }
    }

?>