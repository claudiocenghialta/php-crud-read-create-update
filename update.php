<?php
    include __DIR__.'/partials/01-template/header.php';
    include __DIR__.'/partials/04-update/server.php';
    
?>

    <div class="container p-3">
        <h1>Dettagli della stanza</h1>
        <?php include __DIR__.'/partials/01-template/alert.php';?>
        <form action="partials/04-update/server_edit.php" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>" id="id">
            </div>
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="number" class="form-control" name="room_number" value="<?php echo $row['room_number'];?>" id="roomNumber">
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="number" class="form-control" name="floor" value="<?php echo $row['floor'];?>" id="floor">
            </div>
            <div class="form-group">
                <label for="beds">Numero di letti</label>
                <input type="number" class="form-control" name="beds" value="<?php echo $row['beds'];?>" id="beds">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary"  value="Salva modifiche">
            </div>
        
        </form>



    </div> <!-- chiusura container-->





<?php
    include __DIR__.'/partials/01-template/footer.php';
?>
