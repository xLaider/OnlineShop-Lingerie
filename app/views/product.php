

<link rel="stylesheet" href="<?php echo URLROOT;?>/css/navBar.css" />
<link rel="stylesheet" href="<?php echo URLROOT;?>/css/product.css" /></head>

    
    <!-- End of navbar -->

<!-- Wszystkie zmienne dotyczace produktu sa trzymane w sesji
        $_SESSION['imageArray'] zawiera tablice z linkami do zdjec
        $_SESSION['currentProduct] zawiera aktualny produkt w formie obiektu
        Do obiektu odnosic sie nalezy za pomoca funkcji unserialize
        np: $currentProduct = unserialize($_SESSION['currentProduct']);
        Wtedy mozna juz spokojnie uzywac strzalki np:
        echo $currentProduct -> Name;
        -->


<?php
    include "header.php";
?>
<div class="main">
<div class="flex-row">
        <a class="flex-row" href="<?php echo URLROOT . "/index" ?>">
            <img src="<?php echo URLROOT; ?>/assets/images/arrowleft.svg">
            <h1 class="getBack">Powrót</h1>
        </a>
</div>
    <div class="hero">
        <div class="flex-row">
        <div class="column">
            
            <?php 
                foreach($images as $image){
                    echo "<div class='productRow' onclick='changePicture(event)'><img src=data:image/png;base64,". base64_encode($image->image)."></div>";
                }
            ?>       
        </div>
        <div>
        
            <div id="productHero"><img src=data:image/png;base64,<?php echo base64_encode($images[0]->image) ?> ></div>
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
                    <form method="GET" action="<?php echo URLROOT."/cart/addToCart/".$product->productID."&"; ?>">
                    
                    Rozmiar<span> <select name="size" id="">
                        <?php 
                        foreach ($sizes as $size){
                            echo "<option value=".$size.">".$size."</option>";
                        }
                        ?>
                        </select> <?php $product->Sizes ?></span>   
                    </div>
                    <input type="submit" value="Dodaj do koszyka +">
                </div> 
                </form> 
                <div class="finalize">
                    <div>

                    </div>
                    <div>
                        
                    </div>
                </div> 
                
            </div>
        </div>
    </div>
</div>
    <script>

        var changePicture = function(event){
            event.stopPropagation();
            document.getElementById("productHero").innerHTML=event.path[0].innerHTML;
        }

        </script>
    
    

