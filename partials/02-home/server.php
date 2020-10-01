<?php
    include __DIR__.'/../00-config/database.php';
    include __DIR__.'/../00-config/functions.php';

    $results = readData($conn,'stanze');
    

?>