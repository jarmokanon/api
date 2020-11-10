<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u532747_crud');
define('DB_PASSWORD', 'Api123');
define('DB_NAME', 'u532747_crud');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>