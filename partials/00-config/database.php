<?php
    include __DIR__.'/env.php';
    $conn = new mysqli($server, $username, $password, $database);
    if ($conn && $conn->connect_error) {
        echo 'Connessione fallita: '. $conn->connect_error;
        die();
    }
?>