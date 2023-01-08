<?php

    $file = "users.json";
    $data = file_get_contents("$file");
    
    if (!$data) {
        die('Error connect to DataBase');
    }
?>
