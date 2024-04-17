<?php
$servername = "localhost";
$database = "portfolio";
$username = "root";
$password = "";
 
// Create connection
 
$connexion = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$connexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>