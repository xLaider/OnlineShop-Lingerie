<dialog id="address-form">
    <div class="flex-row">
<h1>
            Dane do wysyłki
        </h1>
        <a id="dialog-close">

            <img src="<?php echo URLROOT; ?>/assets/images/x.svg">
        </a>
        </div>
    <div class="registerArea">
        
        <form class="register" action="<?php echo URLROOT . "/Address/AddressHandler" ?>" method="post">
        <input type="text" id="firstName" name="firstName" value="<?php
            if (isset($_SESSION['firstName']->Country)) {
                echo $_SESSION['firstName']->Country;
            }
            ?>" placeholder="Kraj"><br>
             <input type="text" id="lastName" name="lastName" value="<?php
            if (isset($_SESSION['lastName']->Country)) {
                echo $_SESSION['lastName']->Country;
            }
            ?>" placeholder="Kraj"><br>
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
            if (isset($_SESSION['address']->{"BuildingNumberApartmentNumber"})) {
                echo $_SESSION['address']->{"BuildingNumberApartmentNumber"};
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
    </div>


    </dialog>