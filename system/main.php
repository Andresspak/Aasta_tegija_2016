<?php

// Constants
define('DATABASE_HOSTNAME', '192.168.25.128');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');
define('DATABASE_DATABASE', "tegija");

// Session
session_start();
if (!empty($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

// Database
$db = new mysqli(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_DATABASE) or die(mysqli_connect_error());
mysqli_query($db, "SET NAMES utf8");
mysqli_query($db, "SET CHARACTER utf8");


