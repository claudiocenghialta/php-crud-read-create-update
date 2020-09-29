<?php
    include __DIR__.'/partials/01-template/header.php';
    include __DIR__.'/partials/03-show/server.php';
    
?>
<body>
    <div class="container">
        <a href="index.php">Torna alla home</a>
        <ul class="list-group">
            <li class="list-group-item">ID: <?php echo $row['id'];?></li>
            <li class="list-group-item">Numero stanza: <?php echo $row['room_number'];?></li>
            <li class="list-group-item">Piano: <?php echo $row['floor'];?></li>
            <li class="list-group-item">Numero letti: <?php echo $row['beds'];?></li>
        </ul>
    </div>


</body>


<?php
    include __DIR__.'/partials/01-template/footer.php';
?>
