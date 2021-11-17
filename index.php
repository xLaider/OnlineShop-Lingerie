<style>
    <?php include './main.css'; ?>
</style>

<?php


$dsn = "localhost";
$username = "root";
$password = "";
$dbname = "onlinelingerieshop";
$conn = new mysqli($dsn, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$arr = explode("/projekt",$_SERVER['REQUEST_URI']);
var_dump($arr);
if (sizeof($arr)>1){
    array_shift($arr);
}
$request = implode('/',$arr);
var_dump($request);
switch ($request ) {
    case '':
    case '/index.php':
    case '/' :
        require __DIR__ . '/navBar/navBar.php';
        ?>
        <style>
            <?php include './navBar/style.css'; ?>
        </style>
        <?php
        require __DIR__ . '/mainPage/index.php';
        ?>
        <style>
            <?php include './mainPage/style/style.css'; ?>
        </style>
        <?php
        break;
    case '/index.php?redirectToLogin&registerSuccessful':   
    case '/index.php?redirectToLogin':
        require __DIR__ . '/login/login.php';
        ?>
        <style>
            <?php include './login/style.css'; ?>
        </style>
        <?php
        break;
    case '/index.php?redirectToRegister' :
        require __DIR__ . '/actions/register.php';
        require __DIR__ . '/register/register.php';
        ?>
        <style>
            <?php include './register/style.css'; ?>
        </style>
        <?php
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
