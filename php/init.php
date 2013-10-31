<?php

$host = 'localhost';
$user = 'root';
$password = '';

if (mysql_connect($host, $user, $password)) {
    $database_name = 'jquery';
    if (mysql_select_db($database_name)) {
        // Connected
    } else {
        die();
    }
} else {
    echo 'Error: could not connect with database.';
    die();
}
?>
