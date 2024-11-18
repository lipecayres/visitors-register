<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $server = "sql303.infinityfree.com";
    $username = "if0_37732471";
    $password = "rP0KG4H1ExfrPMv";
    $dbname = "if0_37732471_visitors_register_db";

    // create connection
    $connection = new mysqli($server, $username, $password, $dbname);

    $sql = "DELETE FROM people WHERE id=$id";
    $connection->query($sql);

}
header("location: read.php");
exit;


?>