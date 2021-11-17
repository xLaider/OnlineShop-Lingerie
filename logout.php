<?php
    session_start();

    if(isset($_SESSION['logged_email']))
    {
        unset($_SESSION['logged_email']);
    }
    header('Location: mainPage');
    exit();
    ?>