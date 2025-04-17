<?php

session_start();

require '../logics/database.php';

if (isset($_POST['signin'])) {
    $email      = htmlspecialchars ($_POST['email']);
    $password   = htmlspecialchars($_POST['password']);

    $login      = "SELECT * FROM user WHERE email = '$email'";
    $result     = $db->query($login);
    $user       = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['id']=$user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        header("Location: ../components/profile.php");
        exit();
    } else {
        $f_msg = "Incorrect Email or Password";
        header("location: ../signin-up/signin.php?f_msg=" .$f_msg);
    }
}