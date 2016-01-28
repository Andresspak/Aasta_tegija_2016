<?php include('functions.php');
if (isset($_POST['login'])) {
    $un = $db->real_escape_string($_POST['username']);
    $pw = $db->real_escape_string($_POST['password']);
    if (empty($un) || empty($pw)) {
        exit('Username or Password is missing!');
    } else {
        $result = $db->query("SELECT * FROM admins WHERE password = sha('$pw') AND username = '$un'");
        if ($result) {
            $result = $result->fetch_assoc();
            $_SESSION['admin'] = $result;
            HEADER('location: ../');
        } else {
            exit('Invalid Username or Password');
        }
    }
} else {
    exit('No data sent');
}