<?php
    session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$emailDb = "montoyanacho@gmail.com";
$passwordDb = "123456";

$passwordHash = password_hash($passwordDb, PASSWORD_DEFAULT);

if (password_verify($password, $passwordHash) && $email == $emailDb) {
    $_SESSION['email'] = $email;
    header("Location:../dashboard.php");
    
}   else {
    $_SESSION['errorMessage'] = "Wrong email or password";
    header("Location:../index.php");
}