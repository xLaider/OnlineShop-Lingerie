<link rel="stylesheet" href="<?php echo URLROOT;?>/css/authorization.css">
</head>

<div class="loginArea">
    <h1>
        <a href="index.php">MAJTECZKI W KROPECZKI</a>
    </h1>
    <h2><?php
            if (isset($_GET['registerSuccessful'])) 
            echo 'Rejestracja przebiegła pomyślnie!<br>'
        ?>
    </h2>
    <form class ="login" action="<?php echo URLROOT."/login/tryToLogin"?>" method="post">

        <input type="email" <?php if(isset($_SESSION['errorEmptyLogin'])||isset($_SESSION['errorBadAuthorize']))echo "class='error'";?> id="email" name="email" placeholder="E-mail"><br>
        <input type="password" <?php if(isset($_SESSION['errorEmptyLogin'])||isset($_SESSION['errorBadAuthorize']))echo "class='error'";?> id="password" name="password" placeholder="Hasło"><br>
        <input type="submit" value="Zaloguj">
    </form>
    <?php
    if (isset($_SESSION['errorEmptyLogin']))echo $_SESSION['errorEmptyLogin'];
    if (isset($_SESSION['errorBadAuthorize']))echo $_SESSION['errorBadAuthorize'];
    ?>
    <div class="seperator"></div>
    Jeśli nie masz jeszcze założonego konta<br>
    <a href="<?php echo URLROOT."/register"?>">kliknij tutaj</a>
    
    </div>
    </div>