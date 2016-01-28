<?php
include_once('main.php');

$firstname = $db->real_escape_string($_POST['firstname']);
$lastname = $db->real_escape_string($_POST['lastname']);
$lastname = $db->real_escape_string($_POST['email']);
$lastname = $db->real_escape_string($_POST['phone']);
$lastname = @$_POST['date'];
$lastname = @$_POST['book_time'];
$lastname = @$_POST['first_dish'];
$lastname = @$_POST['main_dish'];
$lastname = @$_POST['last_dish'];

$result = $db->query("SELECT * FROM booking");

var_dump($_POST);
