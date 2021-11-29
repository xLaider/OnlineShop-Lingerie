<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/cart.css" /></head>
<?php
    include "header.php";
?>

<section class="boxed">
    <?php if(count($cartProducts)>0):?>
   <table>
        <tr>
            <div class="tableLeft">
                <th>Zdjęcie</th>
                <th>Nazwa</th>
            </div>
            
            <th>Ilość</th>
            <th>Rozmiar</th>
            <th>Cena</th>
        </tr>
        <?php 

        foreach ($cartProducts as $item){
            echo "<tr id=\"product-".$item->productID."\">
            <div class=\"tableLeft\">
                <td><div class='product'><img src=\"$item->imageLink\" ></div></td>
                <td>";
                echo '<a href="'.URLROOT,'/product/initProduct?productID='.$item->productID.'">'.$item->Name."</a>
                <br>".$item->Category."</td>
            </div>    
            <td>".$item->quantity."</br>";
            
            echo '<a href="'.URLROOT.'/cart/addToCart/'.$item->productID.'/-1/" title="Zmniejsz" class="cartbox plus">-</a>';
            echo '<a href="'.URLROOT.'/cart/addToCart/'.$item->productID.'/1/" title="Zwiększ" class="cartbox plus">+</a>';
            
            echo '</br>';
            echo '<a href="'.URLROOT.'/cart/addToCart/'.$item->productID.'/'.-1*$item->quantity.'/">Usuń</a>';
            echo "</td>
            <td>".$item->Sizes."</td>
            <td>".$item->Price."</td>
            </tr>";
        }
        ?>

   </table> 

   <div class="right">
       <p class="cartSum">Suma: <?php echo $cartSum;?></p>
       <p class="proceedButton"><a href="#">Dalej</a></p>
   </div>
   <?php
   else:
   ?>
<div class="emptyCart">
    <h2>Twój koszyk jest pusty.</br>Sprawdź nasze produkty i wybierz coś dla siebie!</h2>
</div>

    <?php endif;?>
</section>

