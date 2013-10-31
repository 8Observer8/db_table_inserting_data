<?php

include 'init.php';

if (isset($_POST['name'], $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $jquery = "INSERT INTO `insert` VALUES ('', '" . $name . "', '" . $email . "')";
    if (mysql_query($jquery)) {
        echo 'Data was insert.';
    } else {
        echo 'Error: query is incorrect: ' . $jquery;
    }
}
?>
