<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/navBar.css" />
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/cart.css" />
</head>
<?php
include "header.php";
?>

<div class="getBackDiv">
    <!-- podmieniłam link do prfilu w cofnij -->
    <a class="prev" href="<?php echo URLROOT . "/index" ?>"><img src="<?php echo URLROOT; ?>/assets/images/arrowleft.svg"><div>Powrót</div></a>
    
</div>
<div class=tytul><h2 class=bold>KOSZYK ZAKUPÓW</h2></div>

<section class="boxed">
    <?php if (count($cartProducts) > 0) : ?>
        <table>
            <tr>
                <th>Zdjęcie</th>
                <th>Nazwa</th>
                <th>Ilość</th>
                <th>Rozmiar</th>
                <th>Cena</th>
                <th></th>
            </tr>
            <?php
            foreach ($cartProducts as $item) {
                echo "<tr id=\"product-" . $item->productID . "\">
            
                <td><div class='product'><img src='data:image/png;base64,". base64_encode($item->imageLink)."' ></div></td>
                <td>";
                echo '<a href="' . URLROOT, '/product?productID=' . $item->productID . '"><h3 class="bold">' . $item->Name . "</h3></a>
                <br>" . $item->Category . "</td>
                
            <td>";

                echo "<a href='" . URLROOT . "/cart/updateCart/?id=".$item->productID ."&quantity=-1&size=".$item->Sizes."' title='Zmniejsz' class='cartbox plus'>-</a>";
                echo  $item->quantity;
                echo "<a href='" . URLROOT . "/cart/updateCart/?id=".$item->productID ."&quantity=1&size=".$item->Sizes."' title='Zwieksz' class='cartbox plus'>+</a>";

                echo "</td>
            <td class=border-bottom>" . $item->Sizes . "</td>
            <td class=border-bottom>" . $item->Price . "</td>
            <td class=usun>";  echo '<a href="' . URLROOT . '/cart/deleteItemFromCart/?id='.$item->productID .'&quantity=1&size='.$item->Sizes.'/">'; echo '<img src="' . URLROOT . '/assets/images/x.svg"</a>'; 
            echo"</td></tr>";
            }
            ?>
            <tr>
                <td></td> <td></td> <td></td><td class=bold>Suma:</td><td class=border-bottom> <?php echo $cartSum; ?></td> 
                <td><div class="final"><a href="<?php echo URLROOT.'/order' ?>">Finalizuj <img src="<?php echo URLROOT; ?>/assets/images/arrowright.svg"> </a></div></td>
            </tr>

        </table>

        
           
           
        
    <?php
    else :
    ?>
        <div class="emptyCart">
            <h2>Twój koszyk jest pusty.</br>Sprawdź nasze produkty i wybierz coś dla siebie!</h2>
        </div>

    <?php endif; ?>
</section>