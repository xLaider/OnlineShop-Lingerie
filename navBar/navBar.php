
<head>
    <link rel="stylesheet" href="./style.css">
</head>
<nav class="header">
    <img class="menu-icon" src="./assets/images/menu.svg" alt="Menu"  onclick="openNav()">
                
                <h1 class="logo">MAJTECZKI W KROPECZKI</h1>
                <a href="#about">ZALOGUJ</a>
    <img class="menu-icon" src="./assets/images/cart.svg" alt="Menu"></span>
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
</html>