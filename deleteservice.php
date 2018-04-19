<?php
include 'header.php';
require 'database.php';
require_once 'services.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $s = new Services();
    $db = Database::getDb();
    $s->deleteservices($db, $id);
    header("Location: list_services.php");

}

?>