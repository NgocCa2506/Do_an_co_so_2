<?php
    $mysqli = new mysqli("localhost", "root", "", "dacs");
    if($mysqli->connect_errno){
        echo "That bai: ". $mysqli->connect_error;
        exit();
    }
    mysqli_set_charset($mysqli, 'UTF8');
?>