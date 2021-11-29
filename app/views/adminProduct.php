<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/adminProduct.css" /></head>
<?php
    include "header.php";
?>

<section class="boxed">
    <?php if(count($products)>0):?>
   <table>
        <tr>
            <th>Id Produktu</th>
            <th>Nazwa</th>
            <th>Kategoria</th>
            <th>Cena</th>
        </tr>
        <?php 

        foreach ($products as $product){
            echo "<tr id=\"product-".$product->productID."\">";
            echo "<td>".$product->productID."</td>";
            echo "<td>".$product->Name."</td>";
            echo "<td>".$product->Category."</td>";  
            echo "<td>".$product->Price."</td>"; 
           echo "</tr>";
        }
        ?>

   </table> 


    <?php endif;?>
</section>

