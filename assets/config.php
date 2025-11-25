<?php
    $server = "192.168.9.55";
   
    $user = "root";
    $password = "";
    //$db = "smsdb";
    $db = "school";

    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        header('Location: ../errors/error.html');
        exit();
    }


?>