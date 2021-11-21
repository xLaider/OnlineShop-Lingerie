<link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="registerArea">
    <h1>
        MAJTECZKI W KROPECZKI
    </h1>
    <form class ="register" action="<?php echo URLROOT."/register/registerUser"?>" method="post">
        <input type="email" id="email" name="email" placeholder="E-mail"><br>
        <input type="password" id="password" name="password" placeholder="Hasło"><br>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Powtórz hasło"><br>
        <input type="submit" value="Zarejestruj">
    </form>
    <?php
    if (isset($_SESSION['errorEmptyRegister']))echo $_SESSION['errorEmptyRegister'];
    if (isset($_SESSION['errorTakenRegister']))echo $_SESSION['errorTakenRegister'];
    ?>
    <div class="seperator"></div>
    Jeśli masz już założone konto<br>
    <a href="<?php echo URLROOT."/login"?>">kliknij tutaj</a>
    </div>
    
    
</body>