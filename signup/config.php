<?php
session_start();
$dbHost = 'localhost';
$dbName = 'nufi';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>