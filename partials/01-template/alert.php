<?php 
    if (!empty($_GET['id'])) {
        if (!empty($_GET['action'])||!empty($_GET['alert'])) {
            $getId=$_GET['id'];
            $getAction=$_GET['action'];
            $getAlert=$_GET['alert'];

            if ($getAction=='update') {
                if ($getAlert==1) {
                    $messaggio= "L'aggiornamento della stanza con id $getId è andato a buon fine";
                } elseif ($getAlert==0) {
                    $messaggio= "Non c'erano cambiamenti da apportare";
                } elseif ($getAlert==-1) {
                    $messaggio= "Attenzione, i dati inseriti non possono essere salvati"; }
            } elseif ($getAction=='delete') {
                if ($getAlert==1) {
                    $messaggio= "La cancellazione della stanza con id $getId è andato a buon fine";
                } elseif ($getAlert==0) {
                    $messaggio= "Non c'erano dati da eliminare";
                } elseif ($getAlert==-1) {
                    $messaggio= "Attenzione, la cancellazione non è andata a buon fine, controllare le relazioni con altre tabelle"; }
            } elseif ($getAction=='create') {
                if ($getAlert==1) {
                    $messaggio= "La creazione della stanza con id $getId è andato a buon fine";
                } elseif ($getAlert==0) {
                    $messaggio= "Non c'erano dati da inserire";
                } elseif ($getAlert==-1) {
                    $messaggio= "Attenzione, la creazione non è andata a buon fine, controllare i dati inseriti"; }
            }
            ?>
        <div class="alert alert-warning">
            <?php echo $messaggio ?>
        </div>
<?php 
    } 
}?>