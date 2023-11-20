<?php 

    $hostdb = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'food-db';

    $dsn = 'mysql:host=' . $hostdb . ';dbname=' . $dbname . '';
    $conn = null;

    try {
        $conn = new PDO($dsn, $user, $password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        die("Error : " . $e->getMessage());
    }


?>