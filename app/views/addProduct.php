<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/addProduct.css" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navBar.css" />

<?php
include "header.php";
?>

<div class="getBackDiv">
    <!-- podmieniłam link do prfilu w cofnij -->
    <a class="prev" href="<?php echo URLROOT . "/adminProduct" ?>"><img src="<?php echo URLROOT; ?>/assets/images/arrowleft.svg"></a>
    <h1 class="getBack">Powrót</h1>
</div>

<form action="<?php echo URLROOT."/addProduct/AddProduct/".$_GET['productID'].""?>" method="post" enctype="multipart/form-data">
    <main>

        <div class="daneProduktu">
            <h1>Dane produktu</h1>
            <div class=box>
                <label for="Name"><b>Nazwa</b></label>
                <input type="text" id="Name" required name="Name" value="<?php if ($product) {
                                                                                echo $product->Name;
                                                                            } ?>" placeholder="Nazwa">
            </div>
            <div class=box>
                <label for="Price"><b>Cena</b></label>
                <input type="number" id="Price" required name="Price" min="0" value="<?php if ($product) {
                                                                                            echo $product->Price;
                                                                                        }  ?>" placeholder="Cena">
            </div>
            <div class=box>
                <label for="Sizes"><b>Rozmiar</b></label>
                <select name="Sizes" id="Sizes" required>
                    <option value="XS" <?php if ($product){if ($product->Sizes == "XS") echo "selected";} ?>>XS</option>
                    <option value="S" <?php if ($product){if ($product->Sizes == "S") echo "selected";} ?>>S</option>
                    <option value="M" <?php if ($product){if ($product->Sizes == "M") echo "selected";} ?>>M</option>
                    <option value="L" <?php if ($product){if ($product->Sizes == "L") echo "selected";} ?>>L</option>
                    <option value="XL" <?php if ($product){if ($product->Sizes == "XL") echo "selected";} ?>>XL</option>
                </select>
            </div>
            <div class=box>
                <label for="Sizes"><b>Kategoria</b></label>
                <select name="Category" id="Category" required>
                    <option value="Biustonosze">Biustonosze</option>
                    <option value="Majtki">Majtki</option>
                    <option value="Bokserki">Bokserki</option>
                    <option value="Piżamy">Piżamy</option>
                </select>
            </div>
            <div class=box>
                <label for="Description"><b>Opis</b></label>
                <textarea id="Description" required name="Description" placeholder="Opis" rows="5" cols="33"><?php if ($product) {
                                                                                    echo $product->Description;
                                                                                } ?> 
                                                                                        </textarea>
            </div>
        </div>


        <div class="zdjeciaProduktu">
            <h1>Zdjęcia</h1>
            <div class="container">
                
            <?php 
                $i=1;
                if($product){
                foreach($images as $image){
                    echo "<div>
                    <label for='".$i."Img'>
                    <img src='".$image->link."'>
                    </label>
                    <input type='file' id='".$i."Img' name='".$i."Img' accept='mage/x-png,image/gif,image/jpeg'  >
                </div>";
                $i++;
            }
                for($i;$i<=5;$i++){
                    echo "<div>
                    <label for='".$i."Img'><img src='". URLROOT."/assets/images/plus.svg'></label>
                    <input type='file' id='".$i."Img' name='".$i."Img' accept='image/x-png,image/gif,image/jpeg'  >
                </div>";
                }

                
                }else{
            ?>

                                                    
                <div>
                    <label for="1Img"><img src="<?php echo URLROOT; ?>/assets/images/plus.svg"></label>
                    <input type="file" id="1Img" name="1Img"accept="image/x-png,image/gif,image/jpeg"  >
                </div>
                <div>
                    <label for="2Img"><img src="<?php echo URLROOT; ?>/assets/images/plus.svg"></label>
                    <input type="file" id="2Img" name="2Img" accept="image/x-png,image/gif,image/jpeg"  >
                </div>
                <div>
                    <label for="3Img"><img src="<?php echo URLROOT; ?>/assets/images/plus.svg"></label>
                    <input type="file" id="3Img" name="3Img" accept="image/x-png,image/gif,image/jpeg"  >
                </div>
                <div>
                    <label for="4Img"><img src="<?php echo URLROOT; ?>/assets/images/plus.svg"></label>
                    <input type="file" id="4Img" name="4Img" accept="image/x-png,image/gif,image/jpeg"  >
                </div>
                <div>
                    <label for="5Img"><img src="<?php echo URLROOT; ?>/assets/images/plus.svg"></label>
                    <input type="file" id="5Img" name="5Img" accept="image/x-png,image/gif,image/jpeg"  >
                </div>
               <?php } ?>

            </div>

        </div>

    </main>
    <div class="button">
    <input type="submit" value="Zapisz">
    <?php
    if (isset($blad))
        echo "Uzupelnij wszytskie pola";
    ?>
    </div>
</form>