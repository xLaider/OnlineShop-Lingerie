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
<section>
   <table>
        <tr>
            <div class="tableLeft">
                <th>Koszyk</th>
                <th>Nazwa</th>
            </div>
            
            <th>Ilość</th>
            <th>Rozmiar</th>
            <th>Cena</th>
        </tr>
        <?php 
        foreach ($_SESSION['cartItem'] as $item){
            echo "<tr>
            <div class='tableLeft'>
                <td><div class='product'><img src='./assets/images/kobieta.svg' ></div></td>
                <td>".$item['name']."<br>".$item['type']."</td>
            </div>    
            <td>".$item['quantity']."</td>
            <td>".$item['size']."</td>
            <td>".$item['price']."</td>
            </tr>";
        }
        ?>
        <tr>
            <div class="tableLeft">
                <td><div class="product"><img src="./assets/images/kobieta.svg" ></div></td>
                <td>Placeholder na nazwe Przedmiotu<br>Typ produktu</td>
            </div>    
            <td>4</td>
            <td>XXL</td>
            <td>45zł</td>
        </tr>
   </table> 
</section>

