<?php
    $server = "localhost";
    //$server = "192.168.9.55";

    //$user = "root";
    $user = "livecoro_schoolv2";
    //$password = "";
    $password = "school@26v2";
    //$db = "smsdb";
    $db = "livecoro_schoolv2";

    $conn = mysqli_connect($server, $user, $password, $db);

    if (!$conn) {
        header('Location: ../errors/error.html');
        exit();
    }


?>