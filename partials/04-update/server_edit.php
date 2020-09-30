<?php
    include __DIR__.'/../00-config/database.php';

    // controllo che sia stato passato un id
    if (empty($_POST['id'])) {
        die('nessun id');
    }

    $sql = "UPDATE stanze 
        SET room_number = ?, floor = ?, beds = ? 
        WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiii",$room_number,$floor,$beds,$id);
    
    $room_number = $_POST['room_number'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];
    $id = $_POST['id'];

    $stmt->execute();
    
    if ($stmt && $stmt->affected_rows >0) {
        header("Location: $basepath/show.php?id=$id&action=update&alert=1");
    } elseif ($stmt && $stmt->affected_rows ==0) {
        header("Location: $basepath/show.php?id=$id&action=update&alert=0");
    } else {
        header("Location: $basepath/update.php?id=$id&action=update&alert=-1");
    }
    
    $conn->close();
?>