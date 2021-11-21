<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/index.css" /></head>
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
    <section>
        <article id="banner">
            <div class="slideshow-container">
            <a class="prev" onclick="plusSlides(-1)"><img src="./assets/images/arrowleft.svg"></a>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="./assets/images/img.svg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="./assets/images/img.svg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="./assets/images/img.svg" style="width:100%">
                    </div>
                </div>   
                <a class="next" onclick="plusSlides(1)"><img src="./assets/images/arrowright.svg"></a>
            </div>
           
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <div id="arrowdown">
                <img src="./assets/images/arrowdown.svg" style="width:100%">
            </div>
        </article>
        <article id="products">
            <div class="filter">
                <div>FILTRUJ</div>
                <div onclick="openNav()"><img src="./assets/images/filter.svg" style="width:100%"></div>
            </div>
            <div class="container">
                <div >
                    Wszystko
                </div>
                <div class="product"><img src="./assets/images/kobieta.svg" ></div>
                <div class="product"><img src="./assets/images/mezczyzna.svg" ></div>
                <div class="product"><img src="./assets/images/kobieta.svg" ></div>
                <div class="product"><img src="./assets/images/kobieta.svg" ></div>
                <div class="product"><img src="./assets/images/kobieta.svg" ></div>
                <div class="product"><img src="./assets/images/kobieta.svg" ></div>
                <div class="product"><img src="./assets/images/kobieta.svg" ></div>
                <div class="product"><img src="./assets/images/kobieta.svg" ></div>
                
                <div>
                    Made by Us
                </div>
                
            </div>
        </article>
    </section>
<script>
   
    //Slideimg
    var slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>