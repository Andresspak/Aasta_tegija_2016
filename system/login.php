<?php include('main.php');
if (isset($_POST['login'])) {
    $un = $db->real_escape_string($_POST['username']);
    $pw = $db->real_escape_string($_POST['password']);
    if (empty($un) || empty($pw)) {
        exit('Username or Password is missing!');
    } else {
        $result = $db->query("SELECT * FROM admin WHERE password = sha('$pw') AND username = '$un'");
        if ($result) {
            $_SESSION['user'] = $result->fetch_assoc();
            HEADER('location: ../admin.php');
        } else {
            exit('Invalid Username or Password');
        }
    }
} else {
    exit('No data sent');
}