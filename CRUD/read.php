<?php
  require '../inc/header.php';
?>
    <div class="container my-5">
        <h2>Visitors</h2>
        <a class="btn btn-primary" href="create.php" role="button">New visitor</a>
        <a href="../index.php" class = "btn btn-primary login">Logout</a>
        <br>
        <table class = 'table'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $server = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "curiousgame";

                    // create connection
                    $connection = new mysqli($server, $username, $password, $dbname);

                    // check connection
                    if($connection->connect_error) {
                        die("Connection Failed: " . $connection->connect_error);
                    }

                    // read all row from table
                    $sql = "SELECT * FROM people";
                    $result = $connection->query($sql);

                    if(!$result) {
                        die("Invalid querry: " . $connection->error);
                    }

                    while ($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[fname]</td>
                            <td>$row[city]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php
  require '../inc/footer.php';
?>