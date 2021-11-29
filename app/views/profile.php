<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/profile.css" /></head>
</head>
<?php
   include "header.php";
?>

<section class="boxed">
   <h1> Moje zamówienia </h1>
        <a class="prev  AddressDiv" href="<?php echo URLROOT . "/address" ?>">
            <img height=18px src="./assets/images/options_icon.svg"> Ustawienia konta
        </a>
    <?php if(count($orders)>0):?>
   <table>
        <tr>
               <th>Nr zamówienia</th>
               <th>Data zamówienia</th>            
               <th>Kwota zamówienia</th>
               <th>Status</th>
        </tr>
        <?php 

        foreach ($orders as $order){
            echo "<tr id=\"order-".$order->OrderNumber."\">";
            //tu jest link do orderInProgress, a nie do zamówień,
            // bo na moment jak to robię nie zostało jeszcze przez kogoś napisane Order
            echo "<td><a href=".URLROOT."/OrderInProgress>".$order->OrderNumber."</a></td>"; 
            echo "<td>".$order->DateOfOrder."</td>";
            echo "<td>".$order->OrderAmount."</td>";
            echo "<td>";
            switch ($order->Status) {
            case 0:
                  echo "oczekujace";
                  break;

            case 1:
               echo "doreczono";
                  break;
            }
            echo "</td>";
            echo "</tr>";
        }
        ?>

   </table> 

  
   <?php else:?>
<div class="emptyCart">
    <h2>Brak zamówień.</br></h2>
</div>

    <?php
     endif;
    ?>
</section>
