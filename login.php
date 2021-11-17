<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginArea">
    <h1>
        MAJTECZKI W KROPECZKI
    </h1>
    <h2>Zaloguj się na swoje konto</h2>
    
    <form class ="login" action="login_form_handling.php" method="post">
        <input type="email" id="email" name="email" placeholder="E-mail"><br>
        <input type="password" id="password" name="password" placeholder="Hasło"><br>
        <button type="submit">Zaloguj</button>
    </form>
    <div class="seperator"></div>
    </div>
    
    <?php session_start();unset($_SESSION['bad_attempt']);?>
    
</body>
</html>