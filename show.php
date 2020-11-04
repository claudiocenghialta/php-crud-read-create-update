<?php
    include __DIR__.'/partials/01-template/header.php';
    include __DIR__.'/partials/03-show/server.php';
    
?>

    <div class="container p-3">
        <h1>Dettagli della stanza</h1>
        <?php include __DIR__.'/partials/01-template/alert.php';?>

        <ul class="list-group">
            <li class="list-group-item">ID: <?php echo $row['id'];?></li>
            <li class="list-group-item">Numero stanza: <?php echo $row['room_number'];?></li>
            <li class="list-group-item">Piano: <?php echo $row['floor'];?></li>
            <li class="list-group-item">Numero letti: <?php echo $row['beds'];?></li>
        </ul>
        <div class="d-flex justify-content-around m-3">
            <a  class="btn btn-primary" href="index.php">BACK</a>
            <a  class="btn btn-warning" href="update.php?id=<?php echo $row['id'];?>">UPDATE</a>
            <form action="partials/05-delete/server.php" method="post">
                <input class="btn btn-danger" type="submit" value="DELETE">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            </form>
        </div>
    </div> <!-- chiusura container-->





<?php
    include __DIR__.'/partials/01-template/footer.php';
?>
