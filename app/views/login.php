<link rel="stylesheet" href="<?php echo URLROOT;?>/css/login.css">
</head>

<div class="loginArea">
    <h1>
        MAJTECZKI W KROPECZKI
    </h1>
    <h2><?php
            if (isset($_GET['registerSuccessful'])) 
            echo 'Rejestracja przebiegła pomyślnie!<br>'
        ?>
        Zaloguj sie na swoje konto!
    </h2>
    <form class ="login" action="<?php echo URLROOT."/login/tryToLogin"?>" method="post">

        <input type="email" id="email" name="email" placeholder="E-mail"><br>
        <input type="password" id="password" name="password" placeholder="Hasło"><br>
        <input type="submit" value="Zaloguj">
    </form>
    <?php
    if (isset($_SESSION['errorEmptyLogin']))echo $_SESSION['errorEmptyLogin'];
    if (isset($_SESSION['errorBadAuthorize']))echo $_SESSION['errorBadAuthorize'];
    ?>
    <div class="seperator">
    Jeśli nie masz jeszcze założonego konta<br>
    <a href="<?php echo URLROOT."/register"?>">kliknij tutaj</a>
    
    </div>
    </div>