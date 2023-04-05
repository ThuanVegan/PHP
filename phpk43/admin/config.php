<?php

$host = 'localhost';
$username = 'root';
$password = ''; 

$db_name = 'staradminphpk43';

$conn = new mysqli($host, $username, $password, $db_name);
$conn->query("SET NAMES 'utf8'");

?>