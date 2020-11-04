<?php
    include __DIR__.'/../00-config/database.php';
    include __DIR__.'/../00-config/functions.php';

    $room_number = $_POST['room_number'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];

    createRoom ($conn, $basepath, $room_number, $floor, $beds);
?>