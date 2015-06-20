<?php

// This is for access to the database
$host = 'localhost';
$username = 'tw1123';
$password = '1234';
$database = 'dine_a_mite';

if (!mysql_connect($host, $username, $password)) {
    exit('Error: could not establish database connection');
}
if (!mysql_select_db($database)) {
    exit('Error: could not select the database');
}
?>
	