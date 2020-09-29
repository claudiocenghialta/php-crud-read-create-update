<?php
    
    include __DIR__.'/../00-config/database.php';

    // controllo che sia stato passato un id
    if (empty($_POST['id'])) {
        die('nessun id');
    }

    // se l'id è stato passato faccio query sql sulla base dell'id e restituisco risultato
    $id = $_POST['id'];
    $sql = "DELETE FROM stanze WHERE id = $id";
    $result = $conn->query($sql);
    if ($result) {
        $messaggio='OK CANCELLATO';
    } else {
        $messaggio='NON HO CANCELLATO NIENTE';
    }
    header( "refresh:3;url=../../index.php" );
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="../../dist/app.css">
</head>
<body>
    <div class="container">
        <p><?php echo $messaggio ;?></p>
        <p>Se il tuo browser non supporta il redirect clicca <a class="btn btn-danger" href="../../index.php">qui</a></p>
    </div>
</body>
</html>
