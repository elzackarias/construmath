<?php
$hostname = "bblc4cp9cm8fvqii1zes-mysql.services.clever-cloud.com";
$database = "bblc4cp9cm8fvqii1zes";
$username = "uqesyuwv7en15rn1";
$password = "U52YJBdB5NY56mrjHrDU";

// Conectarse a MySQL con extensión MySQLi 
$mysqli = new mysqli($hostname, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "¡Error! > (" . $mysqli->connect_errno . ")";
    die();
} else {
     
}
