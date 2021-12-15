<link rel="stylesheet" href="<?php echo URLROOT;?>/css/navBar.css" />
<link rel="stylesheet" href="<?php echo URLROOT;?>/css/adminProduct.css" /></head>
<?php
    include "header.php";
?>

<div class="getBackDiv">
    <!-- podmieniłam link do prfilu w cofnij -->
    <a class="prev" href="<?php echo URLROOT . "/adminprofile" ?>"><img src="<?php echo URLROOT; ?>/assets/images/arrowleft.svg"><div>Powrót</div></a>
    
</div>

<main>
    <?php if(count($products)>0):?>

        
        
   <table>
        <tr>
            <th> <a href="?sortType=productID">Id Produktu</a></th> 
            <th><a href="?sortType=Name">Nazwa</a></th>
            <th><a href="?sortType=Category">Kategoria</a></th>
            <th><a href="?sortType=Price">Cena</a></th>
        </tr>
        <?php 

        foreach ($products as $product){
            echo "<tr id=\"product-".$product->productID."\">";
            echo "<td>".$product->productID."</td>";
            echo "<td>".$product->Name."</td>";
            echo "<td>".$product->Category."</td>";  
            echo "<td>".$product->Price."</td>"; 
            echo '<td><a href="'.URLROOT .'/addProduct?productID='.$product->productID.'"> Edytuj </a></td>';
           echo "</tr>";
        }
        
        ?>
        
       

   </table> 
   <div class=dodaj><a href="<?php echo URLROOT . "/addProduct?productID=0" ?>">+ Dodaj nowy produkt</a></div>
   

    <?php endif;?>
    </main>

