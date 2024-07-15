<?php 
session_start();
session_destroy();
setcookie("access_for_explore", "", time() - 3600, "/");
if (isset($_GET['id']) && $_GET['id']== 'cart') {
    header("location:cart.php");
}elseif($_GET['id']== 'checkout'){
    header("location:checkout.php");
}elseif($_GET['id']== 'profile'){
    header("location:profile.php");
}else {
    header("location:index.php");
} 

?>