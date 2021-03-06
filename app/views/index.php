


<link rel="stylesheet" href="<?php echo URLROOT;?>/css/navBar.css" />
<link rel="stylesheet" href="<?php echo URLROOT;?>/css/index.css" />

</head>
<main>
<?php
    include "header.php";

?>
  

    <section>
        <article id="banner">
            <div class="slideshow-container">
                <a onclick="plusSlides(-1)"><img src="<?php echo URLROOT;?>/assets/images/arrowleft.svg"></a>
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="<?php echo URLROOT;?>/assets/images/img.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="<?php echo URLROOT;?>/assets/images/2.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fade">
                        <img src="<?php echo URLROOT;?>/assets/images/3.jpg" style="width:100%">
                    </div>
                </div>
                <a onclick="plusSlides(1)"><img src="<?php echo URLROOT;?>/assets/images/arrowright.svg"></a>
            </div>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <div id="arrowdown">
                <img src="<?php echo URLROOT;?>/assets/images/arrowdown.svg" style="width:100%">
            </div>
        </article>
        <article id="products">
            <div class="filterButton">
                <div onclick="openFiltr()">FILTRUJ</div>
                <div onclick="openFiltr()"><img src="<?php echo URLROOT;?>/assets/images/filter.svg" style="width:100%"></div>
            </div>
            <div id="filter" class="filterSidenav flex-row">
                <div>
                    <form action="<?php if (isset($_GET['group'])){
                        echo URLROOT."/index/applyFilter?group=".$_GET['group'];
                    }else{
                        echo URLROOT."/index/applyFilter";
                    }
                     ?>" method="POST">
                        <section>
                            <h3>CENA</h3>
                            <div class="price0">
                                <input class="price" type="number" id="minPrice" name="minPrice" <?php 
                                    if (isset($_SESSION['filterMinPrice'])){
                                        echo "value='".$_SESSION['filterMinPrice']."'";
                                    }
                                ?> placeholder="OD">
                                <div style="font-size: large;">-</div>
                                <input class="price" type="number" id="maxPrice" name="maxPrice" 
                                <?php 
                                    if (isset($_SESSION['filterMaxPrice'])){
                                        echo "value='".$_SESSION['filterMaxPrice']."'";
                                    }
                                ?> placeholder="DO">
                            </div>
                        </section>
                        <section>

                            <h3>ROZMIAR</h3>
                            <label class="box">XS
                                <input type="checkbox" id="XS" name="XS" <?php
                                if (isset($_SESSION['filterSizes'])){
                                    if (in_array("XS", $_SESSION['filterSizes'])) echo "checked";
                                }
                                
                                ?>>
                                <span class="checkmark" ></span>
                            </label>

                            <label class="box">S
                                <input type="checkbox" id="S" name="S"
                                <?php
                                if (isset($_SESSION['filterSizes'])){
                                    if (in_array("S", $_SESSION['filterSizes'])) echo "checked";
                                }
                                
                                ?>>
                                <span class="checkmark"></span>
                            </label>

                            <label class="box">M
                                <input type="checkbox" id="M" name="M"
                                <?php
                                if (isset($_SESSION['filterSizes'])){
                                    if (in_array("M", $_SESSION['filterSizes'])) echo "checked";
                                }
                                
                                ?>>
                                <span class="checkmark"></span>
                            </label>

                            <label class="box">L
                                <input type="checkbox" id="L" name="L"
                                <?php
                                if (isset($_SESSION['filterSizes'])){
                                    if (in_array("L", $_SESSION['filterSizes'])) echo "checked";
                                }
                                
                                ?>>
                                <span class="checkmark"></span>
                            </label>
                            <label class="box">XL
                                <input type="checkbox" id="XL" name="XL"
                                <?php
                                if (isset($_SESSION['filterSizes'])){
                                    if (in_array("XL", $_SESSION['filterSizes'])) echo "checked";
                                }
                                
                                ?>>
                                <span class="checkmark"></span>
                            </label>
                        </section>
                        <section>
                            <h3>RODZAJ</h3>
                            <label class="box">Biustonosze
                                <input type="checkbox" id="Biustonosze" name="Biustonosze"
                                <?php
                                if (isset($_SESSION['filterTypes'])){
                                    if (in_array("Biustonosze", $_SESSION['filterTypes'])) echo "checked";
                                }
                               
                                ?>>
                                <span class="checkmark"></span>
                            </label>

                            <label class="box">Majtki
                                <input type="checkbox" id="Majtki" name="Majtki"<?php
                                if (isset($_SESSION['filterTypes'])){
                                    if (in_array("Majtki", $_SESSION['filterTypes'])) echo "checked";
                                }
                                
                                ?>>
                                <span class="checkmark"></span>
                            </label>

                            <label class="box">Bokserki
                                <input type="checkbox" id="Bokserki" name="Bokserki"
                                <?php
                                if (isset($_SESSION['filterTypes'])){
                                    if (in_array("Bokserki", $_SESSION['filterTypes'])) echo "checked";
                                }
                               
                                ?>> 
                                <span class="checkmark"></span>
                            </label>

                            <label class="box">Pi??amy
                                <input type="checkbox" id="Pi??amy" name="Pi??amy"<?php
                                if (isset($_SESSION['filterTypes'])){
                                    if (in_array("Pi??amy", $_SESSION['filterTypes'])) echo "checked";
                                }
                                
                                ?>>
                                <span class="checkmark"></span>
                            </label>
                        </section>
                        <!--
                        <section>
                            <h3>KOLOR</h3>
                            <label class="box">Czrany
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                            </label>

                            <label class="box">Bia??y
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                            <label class="box">Czerwony
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>

                            <label class="box">Wielokolorowe
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </section>-->
                        <div class="buttonFiltr"><input type="submit" value="FILTRUJ">
                        </div>
                    </form>
                </div>
                <a class="close-button flex-row" href="javascript:void(0)" onclick="closeFiltr()"><img src="<?php echo URLROOT;?>/assets/images/arrowleft.svg"></a>
            </div>


            <div class="container">
                <div>
                    <?php echo $group ?>
                </div>
                <?php
                
                   if (isset($filteredProducts)){
                    foreach ($filteredProducts as $product){

                        echo 
                        "
                        <a class='product' href='".URLROOT."/product?productID=".$product->productID."'>
                        
                        <img src='data:image/png;base64,". base64_encode($product->image)."' onerror='this.onerror=null;this.src=`http://example.com/existent-image.jpg`;'>

                        <div class='hidden'>
                                <span style='font-size:xx-large;'>".$product->Name."</span>
                                <span style='font-size: large;'>Cena: ".$product->Price."</span>
                            </div></a>";
                    }

                   }else{
                       
                    foreach ($products as $product){

                        echo 
                        "
                        <a class='product' href='".URLROOT."/product?productID=".$product->productID."'>
                        
                        <img src='data:image/png;base64,". base64_encode($product->image)."'>

                        <div class='hidden'>
                                <span style='font-size:xx-large;'>".$product->Name."</span>
                                <span style='font-size: large;'>Cena: ".$product->Price."</span>
                            </div></a>";
                    }
                   }
                    
                    
                ?>

                <div>
                    Made by Us
                </div>

            </div>
        </article>
    </section>
</main>
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
<script>
                //Sidebar
                function openFiltr() {
                    document.getElementById("filter").style.width = "300px";
                }

                function closeFiltr() {
                    document.getElementById("filter").style.width = "0";
                }
            </script>