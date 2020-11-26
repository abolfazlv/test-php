<?php
require_once 'section/Header.php';

$id=$_SESSION['user_id'];
$result =$mysqli->query("DELETE FROM `users` WHERE id=$id");
session_destroy();
if ($result === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

require_once 'section/Footer.php'
