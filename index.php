<?php
    include __DIR__.'/partials/01-template/header.php';
    include __DIR__.'/partials/02-home/server.php';
    
?>


<body>
    <div class="container p-3">
        <h1>Elenco camere</h1>
        <?php include __DIR__.'/partials/01-template/alert.php';?>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Room Number</th>
                    <th>Floor</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $room) { ?>
                    
                <tr>
                    <td><?php echo $room['id'];?></td>
                    <td><?php echo $room['room_number'];?></td>
                    <td><?php echo $room['floor'];?></td>
                    <td><a class="btn btn-primary" href="show.php?id=<?php echo $room['id'];?>">SHOW</a></td>
                    <td><a  class="btn btn-warning" href="update.php?id=<?php echo $room['id'];?>">UPDATE</a></td>
                    <td>
                        <form action="partials/05-delete/server.php" method="post">
                            <input class="btn btn-danger" type="submit" value="DELETE">
                            <input type="hidden" name="id" value="<?php echo $room['id'];?>">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

<?php
    include __DIR__.'/partials/01-template/footer.php';
?>
