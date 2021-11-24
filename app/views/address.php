<link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="registerArea">
    <h1>
        Dane do wysyłki
    </h1>
    
   <form class ="register" action="<?php echo URLROOT."/Address/AddressHandler"?>" method="post">
        <input type="text" id="country" name="country" placeholder="Kraj"><br>
        <input type="text" id="city" name="city" placeholder="Miasto"><br>
        <input type="text" id="street" name="street" placeholder="Ulica"><br>
        <input type="text" id="number" name="number" placeholder="Nr budynku/nr mieszkania"><br>
        <input type="text" id="postCode" name="postCode" placeholder="Kod pocztowy"><br>
        <input type="submit" value="Zapisz">

    </form>
    <?php
    if (isset($_SESSION['errorEmptyAddress']))
    {
        echo $_SESSION['errorEmptyAddress'];
        unset($_SESSION['errorEmptyAddress']);
    }
    ?>
    <div class="seperator"></div>
    Cofnij<br>
    <a href="<?php echo URLROOT."/profile"?>"></a>
    </div>
    
    
</body>