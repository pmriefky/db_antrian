<?php
    $databaseHost = 'localhost';
    $databaseName = 'db_antrian';
    $databaseUsername = 'root';
    $databasePassword = '';
    
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die ("connection failed"); 
?>