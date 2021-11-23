<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/product.css" /></head>
<nav class="header">
    <img class="menu-icon" src="./assets/images/menu.svg" alt="Menu"  onclick="openNav()">
                
    <h1 class="logo">
        <a href="<?php echo URLROOT?>">MAJTECZKI W KROPECZKI</a>
    </h1>
    <?php if (isset($_SESSION['userData'])) :?>
        <a href="<?php echo URLROOT."/index/logout"?>">WYLOGUJ <?php  ?></a>
    <?php else:?>
        <a href="<?php echo URLROOT."/login"?>">ZALOGUJ</a>
    <?php endif; ?>
    <a href="<?php echo URLROOT."/cart"?>">
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

<!-- Wszystkie zmienne dotyczace produktu sa trzymane w sesji
        $_SESSION['imageArray'] zawiera tablice z linkami do zdjec
        $_SESSION['currentProduct] zawiera aktualny produkt w formie obiektu
        Do obiektu odnosic sie nalezy za pomoca funkcji unserialize
        np: $currentProduct = unserialize($_SESSION['currentProduct']);
        Wtedy mozna juz spokojnie uzywac strzalki np:
        echo $currentProduct -> Name;
        -->

    <div class="getBackDiv">
        <a class="prev" onclick="plusSlides(-1)"><img src="./assets/images/arrowleft.svg"></a>
        <h1 class="getBack">Powrót</h1>
    </div>
    <div class="hero">
        <div class="column">
            <div class="productRow"><img src="<?php echo $_SESSION['imageArray'][0]?>" ></div>
            <div class="productRow"><img src="<?php echo $_SESSION['imageArray'][1]?>" ></div>
            <div class="productRow"><img src="<?php echo $_SESSION['imageArray'][1]?>" ></div>
            <img src="./assets/images/arrowdown.svg" style="width:50%">
        </div>
        <div>
            <div class="productHero"><img src="<?php echo $_SESSION['imageArray'][1]?>" ></div>
        </div>
        <div class="info">
            <div class="name">
                Calvin Klein Modern Cotton<br>
                Majtki
            </div>
            <div class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget enim porta lorem finibus mattis in sed dolor. Ut augue felis, mattis eget massa ac, tristique elementum sapien. Fusce id nibh id lectus aliquet tempus nec ut nunc. Duis elit tortor, fermentum nec porta vel, blandit sed sapien. Aenean non urna non eros feugiat pellentesque faucibus vitae enim. Suspendisse suscipit arcu ac metus venenatis, vel suscipit sapien pellentesque. Integer elementum mi in sagittis ornare. In elit urna, dignissim in blandit a, volutpat eu lacus.
            </div>
            <div class="orderOptions">
                <div>
                    Cena<span> 45 zł</span>
                </div> 
                <div class="finalize">
                    <div>
                        Rozmiar<span> XXL</span>
                    </div>
                    <div>
                        <a href="<?php echo URLROOT."/cart/addToCart"?>"></a>
                        Dodaj do koszyka +
                    </div>
                </div> 
                
            </div>
        </div>
    </div>
    
    

