<link rel="stylesheet" href="<?php echo URLROOT;?>/css/navBar.css" />
<link rel="stylesheet" href="<?php echo URLROOT;?>/css/adminProduct.css" /></head>
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
            echo '<td><a href="'.URLROOT .'/addProduct?productID='.$product->productID.'"> Edytuj </a></td>';
           echo "</tr>";
        }
        
        ?>
        <a href="<?php echo URLROOT . "/addProduct?productID=null" ?>">+ Dodaj nowy produkt</a>
       

   </table> 


    <?php endif;?>
</section>

