<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/cart.css" /></head>
<nav class="header">
    <img class="menu-icon" src="./assets/images/menu.svg" alt="Menu"  onclick="openNav()">
                
    <h1 class="logo">
        <a href="<?php echo URLROOT?>">MAJTECZKI W KROPECZKI</a>
    </h1>
    <?php if (isset($_SESSION['userData'])) :?>
        <a href="<?php echo URLROOT."/index/logout"?>">WYLOGUJ</a>
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
<section class="boxed">
    <?php if(count($cartProducts)>0):?>
   <table>
        <tr>
            <div class="tableLeft">
                <th>Zdjęcie</th>
                <th>Nazwa</th>
            </div>
            
            <th>Ilość</th>
            <th>Rozmiar</th>
            <th>Cena</th>
        </tr>
        <?php 

        foreach ($cartProducts as $item){
            echo "<tr id=\"product-".$item->productID."\">
            <div class='tableLeft'>
                <td><div class='product'><img src='./assets/images/kobieta.svg' ></div></td>
                <td>";
                echo '<a href="'.URLROOT,'/product/initProduct?productID='.$item->productID.'">'.$item->Name."</a><br>".$item->Category."</td>
            </div>    
            <td>".$item->quantity."</br>";
            echo '<a href="'.URLROOT.'/cart/addToCart/'.$item->productID.'/1/" title="Zwiększ" class="cartbox plus">+</a>';
            echo '<a href="'.URLROOT.'/cart/addToCart/'.$item->productID.'/-1/" title="Zmniejsz" class="cartbox plus">-</a>';
            echo '</br>';
            echo '<a href="'.URLROOT.'/cart/addToCart/'.$item->productID.'/'.-1*$item->quantity.'/">Usuń</a>';
            echo "</td>
            <td>".$item->Sizes."</td>
            <td>".$item->Price."</td>
            </tr>";
        }
        ?>

   </table> 

   <div>
       <p class="cartSum">Suma: <?php echo $cartSum;?></p>
   </div>
   <?php else:?>
<div class="emptyCart">
    <h2>Twój koszyk jest pusty.</br>Sprawdź nasze produkty i wybierz coś dla siebie!</h2>
</div>

    <?php endif;?>
</section>

