<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/adminProduct.css" /></head>
<?php
    include "header.php";
?>
<div class="getBackDiv">
    <!-- podmieniłam link do prfilu w cofnij -->
    <a class="prev" href="<?php echo URLROOT . "/adminprofile" ?>"><img src="<?php echo URLROOT; ?>/assets/images/arrowleft.svg"><div>Powrót</div></a>
    
</div>

<main>
    <?php if(count($orders)>0):?>
   <table>
        <tr>
            <th>Nr zamówienia</th>
            <th>Email</th>
            <th>NrTelefonu</th>
            <th>Data</th>
            <th>Status</th>
        </tr>
        <?php 

        foreach ($orders as $order){
            echo "<tr><td>".$order->OrderNumber."</td>";
            echo "<td>".$order->email."</td>";
            echo "<td>".$order->PhoneNumber."</td>";
            echo "<td>".$order->DateOfOrder."</td>";    
            echo "<td>
            <form id='".$order->OrderNumber."' method='post' action='".URLROOT."/adminorders/updateStatus'>
                <select name='status' onchange='change".$order->OrderNumber."()'>
                    <option value='1'";
                    if ($order->Status==1) echo "selected";
                    echo ">Dostarczono</option>
                    <option value='0'";
                    if ($order->Status==0) echo "selected";
                    echo ">Nie Dostarczono</option>
                </select></td>
                <input type='hidden' name='OrderNumber' value='".$order->OrderNumber."'>
                </form>";

           echo "</tr>";
           echo "<script>
           function change".$order->OrderNumber."(){
               document.getElementById('".$order->OrderNumber."').submit();
           }
           </script>";
        }
        ?>
        
   </table> 
   

    <?php endif;?>
    </main>