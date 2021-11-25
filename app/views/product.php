

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


        <a class="getBackDiv" href="<?php echo URLROOT ?>">
        <img src="./assets/images/arrowleft.svg">
        <h1 class="getBack">Powrót</h1>
    </a>
    <div class="hero">
        <div class="flex-row">
        <div class="column">
            
            <?php 
                foreach($images as $image){
                    echo "<div class='productRow'><img src='".$image->link."' ></div>";
                }
                echo "<img src='./assets/images/arrowdown.svg' style='width:50%'>";
            ?>       
        </div>
        <div>
        
            <div class="productHero"><img src="<?php echo $images[0]->link ?>" ></div>
        </div>
        </div>
        
        <div class="info">
            <div class="name">
            <?php echo $product->Name ?><br>
            <?php echo $product->Category ?>
            </div>
            <div class="description">
                <?php echo $product->Description ?>
            </div>
            <div class=" flex-row">
                <div class="flex-column">
                    <div>
                        Cena <span> <?php echo $product->Price ?></span>
                    </div> 
                    <div>
                    Rozmiar<span> <select name="" id="">
                            <option value="M">M</option>
                            <option value="M">M</option>
                            <option value="M">M</option>
                        </select> <?php $product->Sizes ?></span>
                    </div>
                </div> 
                <div class="finalize">
                    <div>
                        
                    </div>
                    <div>
                        <a href="<?php echo URLROOT."/cart/addToCart/".$product->productID; ?>">Dodaj do koszyka +</a>
                    </div>
                </div> 
                
            </div>
        </div>
    </div>
    
    

