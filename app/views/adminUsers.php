<link rel="stylesheet" href="./css/navBar.css" />
<link rel="stylesheet" href="./css/adminProduct.css" /></head>
<?php
    include "header.php";
?>
<div class="main">
<div class="flex-row">
        <a class="flex-row" href="<?php echo URLROOT . "/profile" ?>">
            <img src="<?php echo URLROOT; ?>/assets/images/arrowleft.svg">
            <h1 class="getBack">Powrót</h1>
        </a>
</div>

<main>
    <?php if(count($users)>0):?>
   <table>
        <tr>
            <th>Email</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Numer Telefonu</th>
            <th>Data Rejestracji</th>
            <th>Poziom</th>
        </tr>
        <?php 

        foreach ($users as $user){
            $formEmail=str_replace('@','',$user->email);
            $formEmail=str_replace('.','',$formEmail);
            echo "<tr><td>".$user->email."</td>";
            echo "<td>".$user->FirstName."</td>";
            echo "<td>".$user->LastName."</td>";
            echo "<td>".$user->PhoneNumber."</td>";   
            echo "<td>".$user->DateOfRegistration."</td>"; 
            echo "<td>
            <form id='".$formEmail."' method='post' action='".URLROOT."/adminUsers/updatePermission'>
                <select name='permission' onchange='change".$formEmail."()'>
                    <option value='admin'";
                    if ($user->Permission=='admin') echo "selected";
                    echo ">Admin</option>
                    <option value='user'";
                    if ($user->Permission=='user') echo "selected";
                    echo ">Uzytkownik</option>
                </select></td>
                <input type='hidden' name='email' value='".$user->email."'>
                </form>";

           echo "</tr>";
           echo "<script>
           function change".$formEmail."(){
               document.getElementById('".$formEmail."').submit();
           }
           </script>";
        }
        ?>
        
   </table> 
   

    <?php endif;?>
    </main>
    </div>