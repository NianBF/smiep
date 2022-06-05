<?php
//DB details
$dbHost = 'us-cdbr-east-05.cleardb.net';
$dbUsername = 'bcc4441154c3a9';
$dbPassword = 'b4a4c01d';
$dbName = 'heroku_619553700a45b98';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
} 
?>