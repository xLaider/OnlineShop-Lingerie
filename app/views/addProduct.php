<link rel="stylesheet" href="<?php echo URLROOT;?>/css/navBar.css" />

<?php
    include "header.php";
?>


<form action="" method="post">
    

            <input type="text" id="Name" required name="Name" value="<?php
            if ($product) {
                echo $product->Name;
            }
            ?>" placeholder="Nazwa"><br>

            <input type="number" id="Price" required name="Price" min="0" value="<?php
            if ($product) {
                echo $product->Price;
            }
            ?>" placeholder="Cena"><br>

            <select name="Sizes" id="Sizes" required>
                <option value="XS" <?php if ($product->Sizes=="XS") echo "selected";?>>XS</option>
                <option value="S" <?php if ($product->Sizes=="S") echo "selected";?>>S</option>
                <option value="M" <?php if ($product->Sizes=="M") echo "selected";?>>M</option>
                <option value="L" <?php if ($product->Sizes=="L") echo "selected";?>>L</option>
                <option value="XL" <?php if ($product->Sizes=="XL") echo "selected";?>>XL</option>
            </select>


           <input type="text" id="Description" required name="Description" value="<?php
            if ($product) {
                echo $product->Description;
            }
            ?>" placeholder="Opis"><br>

            <select name="Category" id="Category" required>
                <option value="Biustonosze">Biustonosze</option>
                <option value="Majtki">Majtki</option>
                <option value="Bokserki">Bokserki</option>
                <option value="Piżamy">Piżamy</option>
            </select>
            <input type="submit" value="Zapisz">
        </form>

        <?php
            if($blad)
            echo "Uzupelnij wszytskie pola";
        ?>
    