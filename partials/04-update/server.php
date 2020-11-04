<?php
    include __DIR__.'/../00-config/database.php';
    include __DIR__.'/../00-config/functions.php';

    // controllo che sia stato passato un id
    if (empty($_GET['id'])) {
        die('nessun id');
    }


    $id = $_GET['id'];
    $row = readData($conn,'stanze',$id);
?>