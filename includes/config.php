<?php
    $db_user = 'cetam';
    $db_password = 'Spock1701a!';
    $db_name = 'phprest';

    $db = new PDO('mysql:host=18.230.68.85;dbname='.$db_name.';charset=utf8',$db_user,$db_password);

    //set db attributes
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    define('APP_NAME', 'PHP REST API para Gauss Command');
?>