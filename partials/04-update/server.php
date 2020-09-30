<?php
    include __DIR__.'/../00-config/database.php';

    // controllo che sia stato passato un id
    if (empty($_GET['id'])) {
        die('nessun id');
    }

    // se l'id è stato passato faccio query sql sulla base dell'id e restituisco risultato
    $id = $_GET['id'];
    $sql = "SELECT id, room_number, floor, beds FROM stanze WHERE id = $id";
    $result = $conn->query($sql);
    if ($result && $result->num_rows >0) {
        $row = $result->fetch_assoc();
    } else if ($result) {
        echo '0 risultati';
    } else {
        echo 'errore query';
    }
    
    $conn->close();

?>