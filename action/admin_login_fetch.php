<?php
    session_start();
    include("../include/data_base.php");

    function codePrevent($input){
        $input = trim($input);
        $input = stripcslashes($input);
        $input = htmlspecialchars($input);
        
        return $input;
    }

    if(isset($_POST['login'])){
        $Email = $_SESSION['EMAIL'] = codePrevent($_POST['EMAIL']);
        $Password= $_SESSION['PASSWORD'] = codePrevent($_POST['PASSWORD']);
        $Password=md5($Password);


        $admin_signup_search_SQL = "SELECT * FROM `admins` WHERE `Email` = '$Email' AND `Password` = '$Password'";
        $admin_signup_search_SQL_insert = $conn->query($admin_signup_search_SQL);
        $result=mysqli_fetch_assoc($admin_signup_search_SQL_insert);


        if(!isset($result)){
            $_SESSION["not_found"] = '*Email not found OR Password not matched';
            header('location:../admin/admin-login-form/');        

        }else{
            setcookie('access_for_explore_like_admin', $Email, time() + (86400 * 7), "/");
            session_unset();
            header('location:../admin/');        
        }
    }

?>
