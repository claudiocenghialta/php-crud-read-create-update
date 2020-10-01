<?php
    include __DIR__.'/../00-config/database.php';
    include __DIR__.'/../00-config/functions.php';

    // controllo che sia stato passato un id
    if (empty($_POST['id'])) {
        die('nessun id');
    }
    
    $id = $_POST['id'];
    $room_number = $_POST['room_number'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];

    editRoom ($conn, $basepath, $id, $room_number, $floor, $beds);
?>