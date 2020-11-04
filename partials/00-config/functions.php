<?php

function readData ($conn, $table, $id=null) {
    
    if (empty($id)) {
        $sql = "SELECT * FROM $table";
    } else {
        $sql = "SELECT * FROM $table WHERE id=$id";
    }
    $result = $conn->query($sql);
    if ($result && $result->num_rows >1) {
        $results=[];
        while ($row = $result->fetch_assoc()) {
            $results[]=$row;
        }
    } elseif ($result && $result->num_rows == 1) {
        $results = $result->fetch_assoc();
    } else if ($result) {
        $results = '0 risultati';
    } else {
        $results = 'errore query';
    }
    return $results;
    $conn->close();
}

function editRoom ($conn, $basepath, $id, $room_number, $floor, $beds) {


    $sql = "UPDATE stanze 
        SET room_number = ?, floor = ?, beds = ? 
        WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiii",$room_number,$floor,$beds,$id);

    $stmt->execute();
    
    if ($stmt && $stmt->affected_rows >0) {
        header("Location: $basepath/show.php?id=$id&action=update&alert=1");
    } elseif ($stmt && $stmt->affected_rows ==0) {
        header("Location: $basepath/show.php?id=$id&action=update&alert=0");
    } else {
        header("Location: $basepath/update.php?id=$id&action=update&alert=-1");
    }
    
    $conn->close();
    $stmt->close();
}

function createRoom ($conn, $basepath, $room_number, $floor, $beds) {
    
    $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iii",$room_number,$floor,$beds);
    

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
}