<link rel="stylesheet" href="./css/register.css">
<link rel="stylesheet" href="./css/address.css">
</head>

<body>
    <div class="getBackDiv">
        <a class="prev  getBackDiv" href="<?php echo URLROOT . "/profile" ?>">
            <img src="./assets/images/arrowleft.svg">
            <p class="getBack">Wróć do profilu</p>
        </a>
    </div>
    <div class="registerArea">
        <h1>
            Dane do wysyłki
        </h1>
        <form class="register" action="<?php echo URLROOT . "/Address/AddressHandler" ?>" method="post">
            <input type="text" id="country" name="country" value="<?php
                                                                    if (isset($_SESSION['address']->Country)) {
                                                                        echo $_SESSION['address']->Country;
                                                                    }
                                                                    ?>" placeholder="Kraj"><br>
            <input type="text" id="city" name="city" value="<?php
                                                            if (isset($_SESSION['address']->City)) {
                                                                echo $_SESSION['address']->City;
                                                            }
                                                            ?>" placeholder="Miasto"><br>
            <input type="text" id="street" name="street" value="<?php
                                                                if (isset($_SESSION['address']->Street)) {
                                                                    echo $_SESSION['address']->Street;
                                                                } ?>" placeholder="Ulica"><br>
            <input type="text" id="number" name="number" value="<?php
                                                                if (isset($_SESSION['address']->{"BuildingNumber/ApartmentNumber"})) {
                                                                    echo $_SESSION['address']->{"BuildingNumber/ApartmentNumber"};
                                                                }
                                                                ?>" placeholder="Nr budynku/ nr mieszkania"><br>
            <input type="text" id="postCode" name="postCode" value="<?php
                                                                    if (isset($_SESSION['address']->PostCode)) {
                                                                        echo $_SESSION['address']->PostCode;
                                                                    } else echo "Kod pocztowy";
                                                                    ?>" placeholder="Kod pocztowy"><br>
            <input type="submit" value="Zapisz">

        </form>
        <?php
        if (isset($_SESSION['errorEmptyAddress'])) {
            echo $_SESSION['errorEmptyAddress'];
            unset($_SESSION['errorEmptyAddress']);
        }
        if (isset($_SESSION['updateAddress'])) {
            echo $_SESSION['updateAddress'];
            unset($_SESSION['updateAddress']);
        }
        ?>
        <div class="seperator"></div>
        <br>
        <a href="<?php echo URLROOT . "/profile" ?>">Powrót</a>
    </div>


</body>