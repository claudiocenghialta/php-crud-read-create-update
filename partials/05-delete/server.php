<?php
    
    include __DIR__.'/../00-config/database.php';

    // controllo che sia stato passato un id
    if (empty($_POST['id'])) {
        die('nessun id');
    }

    // se l'id è stato passato faccio query sql sulla base dell'id e restituisco risultato
    $sql = "DELETE FROM stanze WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i",$id);
    
    $id = $_POST['id'];
    $stmt->execute();

    if ($stmt && $stmt->affected_rows >0) {
        header("Location: $basepath/index.php?id=$id&action=delete&alert=1");
    } elseif ($stmt && $stmt->affected_rows ==0) {
        header("Location: $basepath/index.php?id=$id&action=delete&alert=0");
    } else {
        header("Location: $basepath/index.php?id=$id&action=delete&alert=-1");
    }

    $conn->close();

    
?>

