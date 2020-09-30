<?php
    include __DIR__.'/../00-config/database.php';

    //faccio query per selezionare i risultati e li stampo in un array
    $sql = "SELECT id, room_number, floor, beds FROM stanze";
    $result = $conn->query($sql);
    if ($result && $result->num_rows >0) {
        $results=[];
        while ($row = $result->fetch_assoc()) {
            $results[]=$row;
        }
        
    } else if ($result) {
        echo '0 risultati';
    } else {
        echo 'errore query';
    }

    $conn->close();

?>