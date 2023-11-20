<?php
    include 'condata.php';
    try{
        foreach($conndata->query('SELECT * from foods') as $row){
            print_r($row);
        }
        $conndata = null;
    }catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "</br>";
        die();
    }
?>
