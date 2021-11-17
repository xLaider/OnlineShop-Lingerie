<?php
if (isset($_POST['email']) and isset($_POST['password']) and isset($_POST['confirmPassword'])){
    if ($_POST['password']==$_POST['confirmPassword']){
        $sql = "INSERT INTO `user` (`e-mail`, `FirstName`, `LastName`, `PhoneNumber`, `Password`, `DateOfBirth`, `DateOfRegistration`, `DateOfLastLogin`, `AddressId`) VALUES
        ('".$_POST['email']."', NULL, NULL, NULL, '".password_hash($_POST['password'], PASSWORD_DEFAULT)."', NULL, '".date("Y-m-d h:i:s")."', NULL, NULL);";
        mysqli_query($conn,$sql);
        header("Location: index.php?redirectToLogin&registerSuccessful");
    }
}else{
    if (!isset($_POST['email'])) $errorEmailEmpty=true;
    if (!isset($_POST['password'])) $errorPasswordEmpty=true;
    if (!isset($_POST['confirmPassword'])) $errorConfirmPasswordEmpty=true;
}
?>