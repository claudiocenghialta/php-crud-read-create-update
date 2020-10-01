<?php
    include __DIR__.'/../00-config/database.php';


    $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii",$room_number,$floor,$beds);
    
    $room_number = $_POST['room_number'];
    $floor = $_POST['floor'];
    $beds = $_POST['beds'];

    $stmt->execute();
    // var_dump($stmt);
    if ($stmt && $stmt->affected_rows >0) {
        $id = $stmt->insert_id;
        header("Location: $basepath/show.php?id=$id&action=create&alert=1");
    } elseif ($stmt && $stmt->affected_rows ==0) {
        header("Location: $basepath/create.php?id=NULL$id&action=create&alert=0");
    } else {
        header("Location: $basepath/create.php?id=NULL&action=create&alert=-1");
    }
    
    $stmt->close();
    $conn->close();
?>