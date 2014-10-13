<?php
    $link = mysql_connect('db416119753.db.1and1.com', 'dbo416119753', 'ventanadb678')
    or die('Could not connect: ' . mysql_error());
    mysql_select_db('db416119753') or die('Could not select database');

    $query = "SELECT a.nombre_id,a.id,a.nombre,a.subtitulo,a.id_centro,a.tipo_expo,a.fecha_inicio,a.fecha_fin,a.resumen,a.texto,a.foto,c.provincia_id FROM exposiciones a, centros c WHERE a.id_centro = c.id AND a.nombre_id IS NOT NULL";

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
    
 
?>



