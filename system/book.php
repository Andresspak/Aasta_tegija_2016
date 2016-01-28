<?php
include_once('system/main.php');

$firstname = $db->real_escape_string($_POST['firstname']);
$lastname = $db->real_escape_string($_POST['lastname']);

$result = $db->query("SELECT * FROM broneering");

var_dump($_POST);
