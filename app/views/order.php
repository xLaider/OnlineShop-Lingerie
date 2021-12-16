<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navBar.css" />

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/order.css" />

</head>

    <?php
    include "header.php";
    ?>
    <script>
        //Sidebar
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <!-- End of navbar -->

    <div class="main">
        <form action="<?php echo URLROOT . '/order/addOrder' ?>" method="POST">
            <div class="flex-row">
                    <a class="flex-row" href="<?php echo URLROOT . "/index" ?>">
                        <img src="<?php echo URLROOT; ?>/assets/images/arrowleft.svg">
                        <h1 class="getBack">Powrót</h1>
                    </a>
                    <div class="final">
                    <input type="submit" name="finalize" value="Finalizuj">
                </div>
            </div>
            <main class="flex-row">
            <div class="flex-column">
                <h1>Dane produktu</h1>
                    <div class="userData">
                        <label for="Country">Kraj</label>
                        <input type="text" name="Country" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->Country."'"?>>
                        <label for="City">Miasto</label>
                        <input type="text" name="City" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->City."'"?>>
                        <label for="Street">Ulica</label>
                        <input type="text" name="Street" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->Street."'"?>>
                        <label for="Number">Nr budynku/mieszkania</label><input type="text" name="Number" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->BuildingNumberApartmentNumber."'"?>>
                        <label for="PostCode">Kod pocztowy</label>
                        <input type="text" name="PostCode" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->PostCode."'"?>>
                        <label for="Name">Imię</label>
                        <input type="text" name="Name" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->FirstName."'"?>>
                        <label for="Surname">Nazwisko</label>
                        <input type="text" name="Surname" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->LastName."'"?>>
                        <label for="Email" >E-mail</label>
                        <input type="text" name="Email" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->email."'"?>>
                        <label for="PhoneNumber">Numer telefonu</label>
                        <input type="text" name="PhoneNumber" required <?php if (isset($addressInfo)) echo "value='".$addressInfo->PhoneNumber."'"?>> 
                    </div>
            </div>
            <div class="flex-column">
            <h1>Dane zamówienia</h1>
            <div class="orderData">
                            <label for="Price">Kwota Zamówienia</label>
                            <input type="text" name="Price" readonly value="<?php echo $_POST['price']."zł" ?>"></td>
                            <label for="Shipment">Przesyłka</label>
                            <input type="text" name="Shipment" readonly value="15zł">
                    </div>
            </div>
    </main>
            </form>
    </div>