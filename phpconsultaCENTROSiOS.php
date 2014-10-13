<?php
    
    
    $link = mysql_connect('db416119753.db.1and1.com', 'dbo416119753', 'ventanadb678')
    or die('Could not connect: ' . mysql_error());
    mysql_select_db('db416119753') or die('Could not select database');
    
    $query = "SELECT id,nombre,nombre_id,resumen,direccion,provincia_id,web,cod_tipo,tipologia FROM centros";
    
    mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

    
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    $resultArray = array();
    while ($row = mysql_fetch_assoc($result)) {
        array_push($resultArray, $row);
    }
    
    header('Content-Type: application/json');
    echo json_encode($resultArray);
    
    
    
    mysql_free_result($result);
    mysql_close($link);
    
    












//<?php
//
//
//    $link = mysql_connect('db416119753.db.1and1.com', 'dbo416119753', 'ventanadb678')
//    or die('Could not connect: ' . mysql_error());
//    mysql_select_db('db416119753') or die('Could not select database');
//    
//    $query = "SELECT * FROM centros";
//    
//    
//    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
//    
//    $toDisplay = "{\"centros\":[";
//    
//    while ($row = mysql_fetch_assoc($result)) {
//        $toDisplay = $toDisplay . "{\"nombre\":\"" . $row['nombre_id'] . "\",";
////        $toDisplay = $toDisplay . "\"direccion\":\"" . $row['direccion'] . "\",";
////        $toDisplay = $toDisplay . "\"localidad\":\"" . $row['localidad'] . "\",";
////        $toDisplay = $toDisplay . "\"web\":\"" . $row['web'] . "\",";
//        $toDisplay = $toDisplay . "\"id_centro\":\"" . $row['id'] . "\",";
//        $toDisplay = $toDisplay . "\"tipologia\":\"" . $row['cod_tipo'] . "\",";
//        $toDisplay = $toDisplay . "\"provincia\":\"" . $row['provincia'] . "\"},";
//        
//        
//    }
//    
//    $toDisplay = rtrim($toDisplay, ",");
//    $toDisplay = $toDisplay . "]}";
//    echo $toDisplay;
//    
//    
//    
//    mysql_free_result($result);
//    mysql_close($link);
//    
    ?>
