<?php 

if( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "visitors_register_db";

    // create connection
    $connection = new mysqli($server, $username, $password, $dbname);

    $sql = "DELETE FROM people WHERE id=$id";
    $connection->query($sql);

}
header("location: read.php");
exit;


?>