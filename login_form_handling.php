<?php

session_start();

if(isset($_SESSION['logged_email']))
{
    header('Location: mainPage');
    exit();
}

require_once 'database.php';

if (!isset($_SESSION['logged_email'])) {

    if (isset($_POST['email'])) {

        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

      
        // echo $email . " " .$password;
        // (exit);

        $userQuery = $db->prepare('SELECT * FROM user WHERE `E-mail` = :email');
        $userQuery->bindValue(':email', $email, PDO::PARAM_STR);
        $userQuery->execute();

        //echo $userQuery->rowCount();
        //exit();



        $user = $userQuery->fetch();
        if ($user && password_verify($password, $user['Password'])) {
            $_SESSION['logged_email'] = $user['E-mail'];
            unset($_SESSION['bad_attempt']);
            header('Location: mainPage');
        } else {
            $_SESSION['bad_attempt'] = "pass or user doesnt exist";
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['bad_attempt'] = "log empty";
        header('Location: login.php');
        exit();
    }
} else {

    header('Location: login.php');
    exit();
}

