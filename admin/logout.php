<?php 
session_start();
session_destroy();
setcookie("access_for_explore_like_admin", "", time() - 3600, "/");

    header("location:../index.php");

?>