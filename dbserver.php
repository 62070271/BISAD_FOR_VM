<?php
    $server_name = 'localhost';
    $user_name = 'root';
    $user_password = '';
    $db_name = 'bisad_project';
    
    $db_con =  mysqli_connect($server_name, $user_name, $user_password, $db_name) or die ("Unable Connect");
    mysqli_set_charset($db_con, "utf8");
?>