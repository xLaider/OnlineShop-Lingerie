<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/orderInProgress.css" />

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

<div class="getBackDiv">
    <!-- podmieniłam link do prfilu w cofnij -->
        <a class="prev" href="<?php echo URLROOT."/profile"?>"><img src="./assets/images/arrowleft.svg"></a>
        <h1 class="getBack">Zamówienie nr 2000123</h1>
    </div>

<main>
    <div class="leftSide">
        <table>
            <tr>

                <th></th>
                <th>Nazwa</th>


                <th>Ilość</th>
                <th>Rozmiar</th>
                <th>Cena</th>
            </tr>

            <tr>
                <td>
                    <div class="product"><img src="./assets/images/kobieta.svg"></div>
                </td>
                <td><h3 class="bold">Placeholder na nazwe Przedmiotu</h3><br>Typ produktu</td>

                <td class="border-bottom">4</td>
                <td class="border-bottom">XXL</td>
                <td class="border-bottom">45zł</td>
            </tr>
            <tr>
                <td>
                    <div class="product"><img src="./assets/images/kobieta.svg"></div>
                </td>
                <td><h3 class="bold">Placeholder na nazwe Przedmiotu</h3><br>Typ produktu</td>

                <td class="border-bottom">4</td>
                <td class="border-bottom">XXL</td>
                <td class="border-bottom">45zł</td>
            </tr>
            <tr>
                <td>
                    <div class="product"><img src="./assets/images/kobieta.svg"></div>
                </td>
                <td><h3 class="bold">Placeholder na nazwe Przedmiotu</h3><br>Typ produktu</td>

                <td class="border-bottom">4</td>
                <td class="border-bottom">XXL</td>
                <td class="border-bottom">45zł</td>
            </tr>
            <tr>
                <td>
                    <div class="product"><img src="./assets/images/kobieta.svg"></div>
                </td>
                <td><h3 class="bold">Placeholder na nazwe Przedmiotu</h3><br>Typ produktu</td>

                <td class="border-bottom">4</td>
                <td class="border-bottom">XXL</td>
                <td class="border-bottom">45zł</td>
            </tr>
            <tr>
                <td></td><td></td> <td></td>
                <td>Przesyłka:</td><td class="border-bottom">15zł</td>
                
            </tr>
            <tr>
                <td></td><td></td> <td></td>
                <td class="bold">Łącznie:</td><td  class="bold">155zł</td>
            </tr>




        </table>
    </div>
    <div class="rightSide">
        <div>Status: Doręczono</div>
        <div class="DaneOsobowe">
            <h1>Dane osobowe</h1>
            <div class="dane">
                <div class="box">
                    <div class="kategoria">Kraj</div>
                    <div class="opis">Polska</div>
                </div>
                <div class="box">
                    <div class="kategoria">Miasto</div>
                    <div class="opis">Gliwice</div>
                </div>
                <div class="box">
                    <div class="kategoria">Ulica</div>
                    <div class="opis">Wiejska</div>
                </div>
                <div class="box">
                    <div class="kategoria">Nr budynku/mieszkania</div>
                    <div class="opis">32/12</div>
                </div>
                <div class="box">
                    <div class="kategoria">Kod pocztowy</div>
                    <div class="opis">12-345</div>
                </div>
                <div class="box">
                    <div class="kategoria">Imię</div>
                    <div class="opis">Jan</div>
                </div>
                <div class="box">
                    <div class="kategoria">Nazwisko</div>
                    <div class="opis">Kowalski</div>
                </div>
                <div class="box">
                    <div class="kategoria">E-mail</div>
                    <div class="opis">j.kowalski@gmail.com</div>
                </div>
                <div class="box">
                    <div class="kategoria">Numer telefonu</div>
                    <div class="opis">123 456 789</div>
                </div>
            </div>
        </div>

    </div>
</main>