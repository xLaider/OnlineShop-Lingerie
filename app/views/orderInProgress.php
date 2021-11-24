<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/orderInProgress.css" />

</head>

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


<main>
<div class="leftSide">
<table>
        <tr>
            
                <th>Koszyk</th>
                <th>Nazwa</th>
            </div>
            
            <th>Ilość</th>
            <th>Rozmiar</th>
            <th>Cena</th>
        </tr>

                <tr><td><div class="product"><img src="./assets/images/kobieta.svg" ></div></td>
                <td>Placeholder na nazwe Przedmiotu<br>Typ produktu</td>
            </div>    
            <td>4</td>
            <td>XXL</td>
            <td>45zł</td></tr>
            <tr><td><div class="product"><img src="./assets/images/kobieta.svg" ></div></td>
                <td>Placeholder na nazwe Przedmiotu<br>Typ produktu</td>
            </div>    
            <td>4</td>
            <td>XXL</td>
            <td>45zł</td></tr>
            <tr><td><div class="product"><img src="./assets/images/kobieta.svg" ></div></td>
                <td>Placeholder na nazwe Przedmiotu<br>Typ produktu</td>
            </div>    
            <td>4</td>
            <td>XXL</td>
            <td>45zł</td></tr>
            <tr><td><div class="product"><img src="./assets/images/kobieta.svg" ></div></td>
                <td>Placeholder na nazwe Przedmiotu<br>Typ produktu</td>
            </div>    
            <td>4</td>
            <td>XXL</td>
            <td>45zł</td></tr>



    </table>
    </div>
    <div class="rightSide">
        <div>Status: Doręczono</div>
        <div class="DaneOsobowe">
            <h1>Dane osobowe</h1>
            <div class="dane">
                <div class="box">
                <div class="kategoria">Kraj</div><div class="opis">Polska</div>
    </div><div class="box">
                <div class="kategoria">Miasto</div><div class="opis">Gliwice</div>
                </div><div class="box">
                <div class="kategoria">Ulica</div><div class="opis">Wiejska</div>
                </div><div class="box">
                <div class="kategoria">Nr budynku/miieszkania</div><div class="opis">32/12</div>
                </div><div class="box">
                <div class="kategoria">Kod pocztowy</div><div class="opis">12-345</div>
                </div><div class="box">
                <div class="kategoria">Imię</div><div class="opis">Jan</div>
                </div><div class="box">
                <div class="kategoria">Nazwisko</div><div class="opis">Kowalski</div>
                </div><div class="box">
                <div class="kategoria">E-mail</div><div class="opis">j.kowalski@gmail.com</div>
                </div><div class="box">
                <div class="kategoria">Numer telefonu</div><div class="opis">123 456 789</div>
                </div>
    </div>
        </div>

    </div>
    </main>