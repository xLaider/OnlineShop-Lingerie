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
                    <?php
                    $sizes = ["XS","S","M","L","XL"];
                    foreach($sizes as $size){
                        echo '<option value='.$size.' '.(($product && $product->Sizes == $size)?"selected":"").'>'.$size.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class=box>
                <label for="Group"><b>Grupa</b></label>
                <select name="Group" id="Group" required>
                <?php
                    $groups = ["Unisex"=>"Dla obu płci","Woman"=>"Kobieta","Man"=>"Mężczyzna","Kids"=>"Dzieci"];
                    foreach($groups as $group => $group_value){
                        echo '<option value='.$group.' '.(($product && $product->ProductGroup == $group)?"selected":"").'>'.$group_value.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class=box>
                <label for="Category"><b>Kategoria</b></label>
                <select name="Category" id="Category" required>
                    <?php
                    $categories = ["Biustonosze","Majtki","Bokserki","Piżamy"];
                    foreach($categories as $category){
                        echo '<option value='.$category.' '.(($product && $product->Category == $category)?"selected":"").'>'.$category.'</option>';
                    }
                    ?>
                </select>
            </div>
            
            <div class=box>
                <label for="Description"><b>Opis</b></label>
                <textarea id="Description" required name="Description" placeholder="Opis" rows="5" cols="33"><?php if ($product) {
                                                                                    echo $product->Description;
                                                                                } ?></textarea>
            </div>
        </div>


        <div class="zdjeciaProduktu">
            <h1>Zdjęcia</h1>
            <div class="container">
                
            <?php 
                $i=0;
                if($product){
                foreach($images as $image){
                    $i++;
                    echo "<div class=zdjecia>
                    <label for='File_".$i."'>
                    <img id='Img_".$i."' src='data:image/png;base64,". base64_encode($image->image)."'>
                    </label>
                    <input type='file' id='File_".$i."' name='File_".$i."' accept='mage/x-png,image/gif,image/jpeg'  onchange='loadFile(event)' onclick='onClick(event)' >
                    <a href=". URLROOT."/addProduct/DeleteImage(".$_GET['productID'].",".$i.")><div class=hidden ><img src=".URLROOT."/assets/images/delete.svg> </div></a>
                    </div>";
            }
            $i++;
                    echo "<div>
                    <label for='File_".$i."'><img id='Img_".$i."' src='". URLROOT."/assets/images/plus.svg'></label>
                    <input type='file' id='File_".$i."' name='File_".$i."' accept='image/x-png,image/gif,image/jpeg'  onchange='loadFile(event)' onclick='onClick(event)' >
                </div>";

                
                }else{
            ?>

                                                    
                <div>
                    <label for="File_<?php echo $i?>"><img id="Img_<?php echo $i?>" src="<?php echo URLROOT; ?>/assets/images/plus.svg"></label>
                    <input type="file" id="File_<?php echo $i?>" name="File_<?php echo $i?>"accept="image/x-png,image/gif,image/jpeg" onchange="loadFile(event)" >
                </div>
                
               <?php } 
               ?>

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

<script>
function htmlToElements(html) {
    var template = document.createElement('template');
    template.innerHTML = html;
    return template.content.childNodes;
}

    var onClick = function(event){
        console.log(event);
    }
    var loadFile = function(event){
        var id = event.srcElement.id;
        var index = parseInt(id.split('_')[1]);
        var image = document.getElementById('Img_'+index);
        image.src = URL.createObjectURL(event.target.files[0]);
        if(index == document.querySelectorAll('[id^="Img_"]')[document.querySelectorAll('[id^="Img_"]').length-1].id.split('_')[1]){
        var container = document.getElementsByClassName("container")[0];
        var test = htmlToElements(`<div><label for="File_`+(index+1)+`"><img id="Img_`+(index+1)+`" src="<?php echo URLROOT; ?>/assets/images/plus.svg"></label><input type="file" id="File_`+(index+1)+`" name="File_`+(index+1)+`"accept="image/x-png,image/gif,image/jpeg" onchange="loadFile(event)" ></div>`);
                console.log(test);
        container.appendChild(test[0]);
        }
    }
   

    </script>