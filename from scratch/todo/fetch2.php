<?php
    $host = "localhost";
    $dbusername = "uuu7djctptbt7";
    $dbpassword = "elcrack1409";
    $dbname = "dbu58nyapm8ef7";
    $tablename= "Tabla_de_prueba";

    mysql_connect(host,$dbusername,$dbpassword);
    mysql_select_db(dbname);

    $sql =  mysql_query("SELECT * FROM $tablename  ORDER BY id ASC ");
    $ID = 'ID';
    $Comentario ='Comentario';
    $rows = mysql_fetch_assoc($sql);

    echo $rows[$Comentario];
?>