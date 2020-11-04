<?php
    include __DIR__.'/partials/01-template/header.php';
    
    ?>

    <div class="container p-3">
        <h1>Dettagli della stanza</h1>
        <?php include __DIR__.'/partials/01-template/alert.php';?>
        <form action="partials/06-create/server.php" method="post">
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input type="number" class="form-control" name="room_number" value="" id="roomNumber" placeholder="Inserisci il numero della stanza">
            </div>
            <div class="form-group">
                <label for="floor">Floor</label>
                <input type="number" class="form-control" name="floor" value="" id="floor" placeholder="Inserisci il piano">
            </div>
            <div class="form-group">
                <label for="beds">Numero di letti</label>
                <input type="number" class="form-control" name="beds" value="" id="beds" placeholder="Inserisci il numero di letti">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary"  value="Salva modifiche">
            </div>
        
        </form>



    </div> <!-- chiusura container-->





<?php
    include __DIR__.'/partials/01-template/footer.php';
?>
