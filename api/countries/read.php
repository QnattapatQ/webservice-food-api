<?php
    include '../db.php';
    try{
        foreach($dbh->query('SELECT * from foods') as $row){
            print_r($row);
        }
        $dbh = null;
    }catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "</br>";
        die();
    }
?>
