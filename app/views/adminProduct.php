<link rel="stylesheet" href="<?php echo URLROOT;?>/css/navBar.css" />
<link rel="stylesheet" href="<?php echo URLROOT;?>/css/adminProduct.css" /></head>
<?php
    include "header.php";
?>
<div class="main">
    <div class="flex-row">
            <a class="flex-row" href="<?php echo URLROOT . "/profile" ?>">
                <img src="<?php echo URLROOT; ?>/assets/images/arrowleft.svg">
                <h1 class="getBack">Powrót</h1>
            </a>
            <div class=dodaj><a href="<?php echo URLROOT . "/addProduct?productID=0" ?>">+ Dodaj nowy produkt</a></div>
    </div>

    <main>
        <?php if(count($products)>0):?>

            
            
    <table>
            <tr>
                <th> <a href="?sortType=productID">Id Produktu</a></th> 
                <th><a href="?sortType=Name">Nazwa</a></th>
                <th><a href="?sortType=Category">Kategoria</a></th>
                <th><a href="?sortType=Price">Cena</a></th>
                <th>Status</th>
            </tr>
            <?php 

            foreach ($products as $product){
                echo "<tr id=\"product-".$product->productID."\">";
                echo "<td>".$product->productID."</td>";
                echo "<td>".$product->Name."</td>";
                echo "<td>".$product->Category."</td>";  
                echo "<td>".$product->Price."</td>"; 
                echo "<td>
                <form id='".$product->productID."' method='post' action='".URLROOT."/adminProduct/updateStatus'>
                    <select name='status' onchange='change".$product->productID."()'>
                        <option value='1'";
                        if ($product->Status==1) echo "selected";
                        echo ">Dostępne</option>
                        <option value='0'";
                        if ($product->Status==0) echo "selected";
                        echo ">Nie Dostępne</option>
                    </select></td>
                    <input type='hidden' name='ProductID' value='".$product->productID."'>
                    </form>";
                echo '<td><a href="'.URLROOT .'/addProduct?productID='.$product->productID.'"> Edytuj </a></td>';
            echo "</tr>";
            echo "<script>
            function change".$product->productID."(){
                document.getElementById('".$product->productID."').submit();
            }
            </script>";
            }
            
            ?>
            
        

    </table> 
    
    

        <?php endif;?>
    </main>
</div>

