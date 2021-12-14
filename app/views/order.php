<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navBar.css" />

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/order.css" />

</head>
<main>
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

    <div>

        <h2>
            <img class="arrowLeft" src='./assets/images/arrowleft.svg' style='width:10%'>
            <a href="">Zamówienie</a>
        </h2>
        <div class="hero">

            <div>
                <table>
                    <form action="<?php echo URLROOT . '/order/addOrder' ?>" method="POST">
                        <tr>
                            <th>Dane osobowe</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="Country">Kraj</label></div>
                            </td>
                            <td><input type="text" name="Country" required
                            <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->Country."'"
                            ?>
                            ></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="City">Miasto</label></div>
                            </td>
                            <td><input type="text" name="City" required
                            <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->City."'"
                            ?>
                            ></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="Street">Ulica</label></div>
                            </td>
                            <td><input type="text" name="Street" required
                            <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->Street."'"
                            ?>
                            ></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="Number">Nr budynku/mieszkania</label></div>
                            </td>
                            <td><input type="text" name="Number" required
                            <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->BuildingNumberApartmentNumber."'"
                            ?>
                            ></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="PostCode">Kod pocztowy</label></div>
                            </td>
                            <td><input type="text" name="PostCode" required
                            <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->PostCode."'"
                            ?>></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="Name"
                                <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->FirstName."'"
                                ?>
                            >Imię</label></div>
                            </td>
                            <td><input type="text" name="Name" required></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="Surname">Nazwisko</label></div>
                            </td>
                            <td><input type="text" name="Surname" required
                            <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->LastName."'"
                            ?>></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="Email" >E-mail</label></div>
                            </td>
                            <td><input type="text" name="Email" required
                            <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->email."'"
                            ?>></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product"><label for="PhoneNumber">Numer telefonu</label></div>
                            </td>
                            <td><input type="text" name="PhoneNumber" required
                            <?php
                                if (isset($addressInfo)) echo "value='".$addressInfo->PhoneNumber."'"
                            ?>></td>
                        </tr>
                </table>
            </div>

            <div>
                <table>
                    <tr>
                        <td>
                            <div class="product"><label for="DiscountCode">Kod Rabatowy</label></div>
                        </td>
                        <td><input type="text" name="DiscountCode"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="gap">
                                <div class="product"><label for="Price">Kwota Zamówienia</label></div>
                        </td>
                        <td><input type="text" name="Price" readonly value="<?php echo $_POST['price']."zł" ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product"><label for="Shipment">Przesyłka</label></div>
                        </td>
                        <td><input type="text" name="Shipment" readonly value="15zł"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product"><label for="DiscountValue">Zniżka</label></div>
                        </td>
                        <td><input type="text" name="DiscountValue" readonly value="15zł"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product"></div>
                        </td>
                        <td><input type="submit" name="finalize" value="Finalizuj"></td>
                    </tr>

                </table>
                </form>
            </div>

        </div>

    </div>