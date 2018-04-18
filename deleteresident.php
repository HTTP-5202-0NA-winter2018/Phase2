<?php
include 'header.php';
require 'database.php';
require_once 'resident.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $r = new Resident();
    $db = Database::getDb();
    $r->deleteresident($db, $id);
    header("Location: list_residents.php");

}

?>