<?php 

include "connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT username, password from customers where username = '$username' and password = '$password'");
if($stmt){
    return true;
}else{
    return false;
}

?>