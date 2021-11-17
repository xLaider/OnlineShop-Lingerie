<?php
 session_start();
?>

<html>

    <link rel="stylesheet" href="./style/style.css" /></head>

<<<<<<< HEAD
    <div>
=======
<body>

    <main>
<<<<<<< HEAD
        <div class="header">
            <nav>
                <a href="#contact"><i class="material-icons">shopping_cart</i></a>
                <?php
                if(!isset($_SESSION['logged_email']))
                {
                    ?>
                        <a href="../login.php">ZALOGUJ</a>
                    <?php
                }
                else
                {
                    ?>
                        <a href="../logout.php">WYLOGUJ</a>
                    <?php
                }
                ?>
                
                <span onclick="openNav()"><i class="material-icons">menu</i></span>
                <h1 class="text-center">MAJTECZKI W KROPECZKI</h1>
            </nav>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Kobieta</a>
                <a href="#">Mężczyzna</a>
                <a href="#">Dzieci</a>
            </div>

        </div>
=======
>>>>>>> c7322df8382f0288ddd575100984b6f2ce50d2f2
       
>>>>>>> e8406114567494243e178a6549588ec4b24e8893
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
    </div>

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