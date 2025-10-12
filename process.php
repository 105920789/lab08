<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$token = $_POST['token'];

if ($username === 'Shaun Vambe' && $password === '105920789') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
} else {
    echo "Invalid login.<a href='login.html'>Try again</a>";
}
?>