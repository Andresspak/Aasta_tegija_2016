<?php
include_once('main.php');


function escape(array $data)
{
    global $db;
    $values = array();
    if (!empty($data)) {
        foreach ($data as $field => $value) {
            if ($value === NULL) {
                $values[] = "`$field`=NULL";
            } elseif (is_array($value) && isset($value['no_escape'])) {
                $values[] = "`$field`=" . mysqli_real_escape_string($db, $value['no_escape']);
            } else {
                $values[] = "`$field`='" . mysqli_real_escape_string($db, $value) . "'";
            }
        }
    }
    return $values;
}

function insert($table, $data)
{
    global $db;
    if ($table and is_array($data) and !empty($data)) {
        $values = implode(',', escape($data));
        $sql = "INSERT INTO `{$table}` SET {$values}";
        $q = $db->query($sql) or die($db->error);
        $id = mysqli_insert_id($db);
        return ($id > 0) ? $id : FALSE;
    } else {
        return FALSE;
    }
}

/*
$firstname = $db->real_escape_string($_POST['firstname']);
$lastname = $db->real_escape_string($_POST['lastname']);
$lastname = $db->real_escape_string($_POST['email']);
$lastname = $db->real_escape_string($_POST['phone']);
$lastname = @$_POST['date'];
$lastname = @$_POST['book_time'];
$lastname = @$_POST['first_dish'];
$lastname = @$_POST['main_dish'];
$lastname = @$_POST['last_dish'];
*/
$result = insert('booking', $_POST);

if ($result) {
    exit('Broneering salvestatud!');
} else {
    exit('Error');
}
