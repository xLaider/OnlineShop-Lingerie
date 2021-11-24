
<link rel="stylesheet" href="./css/navBar.css" />

<link rel="stylesheet" href="./css/order.css" />

</head>
<main>
    <nav class="header">
        <img class="menu-icon" src="./assets/images/menu.svg" alt="Menu" onclick="openNav()">

        <h1 class="logo">
            <a href="<?php echo URLROOT ?>">MAJTECZKI W KROPECZKI</a>
        </h1>
        <?php if (isset($_SESSION['userData'])) : ?>
            <a href="<?php echo URLROOT . "/index/logout" ?>">WYLOGUJ <?php  ?></a>
        <?php else : ?>
            <a href="<?php echo URLROOT . "/login" ?>">ZALOGUJ</a>
        <?php endif; ?>
        <a href="<?php echo URLROOT . "/cart" ?>">
            <img class="menu-icon" src="./assets/images/cart.svg" alt="Menu"></span>
        </a>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Kobieta</a>
            <a href="#">Mężczyzna</a>
            <a href="#">Dzieci</a>
        </div>
    </nav>
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
                <form action="" method="POST">
                    <tr>
                        <th>Dane osobowe</th>   
                    </tr>
            <tr><td><div class="product"><label for="Country">Kraj</label></div></td>
                <td><input type="text" name="Country"></td>
            </tr>
            <tr><td><div class="product"><label for="City">Miasto</label></div></td>
                <td><input type="text" name="City"></td>
            </tr>
            <tr><td><div class="product"><label for="Street">Ulica</label></div></td>
                <td><input type="text" name="Street"></td>
            </tr>
            <tr><td><div class="product"><label for="Number">Nr budynku/mieszkania</label></div></td>
                <td><input type="text" name="Number"></td>
            </tr>
            <tr><td><div class="product"><label for="PostCode">Kod pocztowy</label></div></td>
                <td><input type="text" name="PostCode"></td>
            </tr>
            <tr><td><div class="product"><label for="Name">Imię</label></div></td>
                <td><input type="text" name="Name"></td>
            </tr>
            <tr><td><div class="product"><label for="Surname">Nazwisko</label></div></td>
                <td><input type="text" name="Surname"></td>
            </tr>
            <tr><td><div class="product"><label for="Email">E-mail</label></div></td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr><td><div class="product"><label for="PhoneNumber">Numer telefonu</label></div></td>
                <td><input type="text" name="PhoneNumber"></td>
            </tr>
            </table>
            </div>
                
        <div>
            <table>
            <tr><td><div class="product"><label for="DiscountCode">Kod Rabatowy</label></div></td>
                <td><input type="text" name="DiscountCode"></td>
            </tr>
            <tr><td>
                <div class="gap">
                    <div class="product"><label for="Price">Kwota Zamówienia</label></div></td>
                    <td><input type="text" name="Price" readonly value="135zł"></td>
            </tr>
            <tr><td><div class="product"><label for="Shipment">Przesyłka</label></div></td>
                <td><input type="text" name="Shipment" readonly value="15zł"></td>
            </tr>
            <tr><td><div class="product"><label for="DiscountValue">Zniżka</label></div></td>
                <td><input type="text" name="DiscountValue" readonly value="15zł"></td>
            </tr>
            <tr><td><div class="product"></div></td>
                <td><input type="submit" name="finalize" value="Finalizuj"></td>
            </tr>

            </table>
            </form>
        </div>
        
    </div>
        
    </div>
    

