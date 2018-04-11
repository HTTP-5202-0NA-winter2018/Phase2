<?php
$dsn = 'mysql:host=localhost; dbname=condos';
$username='root';
$password='';

try{

    $db = new PDO($dsn, $username, $password); var_dump($db);
    $query = 'Select * from resident_info';

    $PDOHtm= $db-> prepare($query);
    $PDOHtm-> execute();
    var_dump($PDOHtm->fetchAll());
}catch (PDOException $e) {
    $error_message = $e->getMessage();
    include(database_error.php);
    exit();
}

?>