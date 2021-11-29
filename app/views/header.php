<nav class="header">
    <img class="menu-icon" src="<?php echo URLROOT;?>/assets/images/menu.svg" alt="Menu"  onclick="openNav()">
                
    <h1 class="logo">
        <a href="<?php echo URLROOT?>">MAJTECZKI W KROPECZKI</a>
    </h1>
    <?php if (isset($_SESSION['userData'])) :?>
        <a href="<?php echo URLROOT."/index/logout"?>">WYLOGUJ</a>
    <?php else:?>
        <a href="<?php echo URLROOT."/login"?>">ZALOGUJ</a>
    <?php endif; ?>
    <a href="<?php echo URLROOT."/cart"?>">
        <img class="menu-icon" src="<?php echo URLROOT;?>/assets/images/cart.svg" alt="Cart"></span>
    </a>
    <a href="<?php echo URLROOT."/profile"?>">
        <img class="menu-icon" src="<?php echo URLROOT;?>/assets/images/user-icon.svg" alt="Profil"></span>
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