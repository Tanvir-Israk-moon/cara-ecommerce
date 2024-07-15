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

        $signup_search_SQL = "SELECT * FROM `users` WHERE `Email` = '$Email'";
        $signup_search_SQL_insert = $conn->query($signup_search_SQL);
        $result=mysqli_fetch_assoc($signup_search_SQL_insert);


        if(!isset($result)){

            $_SESSION["email_not_found"] = '*Email not found';
            if (isset($_GET['id']) && $_GET['id']== 'cart') {
                header("location:../login.php?var=complex&id=cart");
            }elseif($_GET['id']== 'checkout'){
                header("location:../login.php?var=complex&id=checkout");
            }elseif($_GET['id']== 'profile'){
                header("location:../login.php?var=complex&id=profile");
            }else {
                header("location:../login.php?var=complex");
            }          

        }else{

            unset($_SESSION["email_not_found"]);
            if (isset($_GET['id']) && $_GET['id']== 'cart') {
                header("location:../login.php?var=complex&id=cart");
            }elseif($_GET['id']== 'checkout'){
                header("location:../login.php?var=complex&id=checkout");
            }elseif($_GET['id']== 'profile'){
                header("location:../login.php?var=complex&id=profile");
            }else {
                header("location:../login.php?var=complex");
            } 

                $Password=md5($Password);

                if($result['Password'] !== $Password){

                    $_SESSION["password_not_match"] = '*Password not matched';
                    if (isset($_GET['id']) && $_GET['id']== 'cart') {
                        header("location:../login.php?var=complex&id=cart");
                    }elseif($_GET['id']== 'checkout'){
                        header("location:../login.php?var=complex&id=checkout");
                    }elseif($_GET['id']== 'profile'){
                        header("location:../login.php?var=complex&id=profile");
                    }else {
                        header("location:../login.php?var=complex");
                    } 
                }else{
                    setcookie('access_for_explore', $Email, time() + (86400 * 7), "/");
                    session_unset();

                    if (isset($_GET['id']) && $_GET['id']== 'cart') {
                        header("location:../cart.php");
                    }elseif($_GET['id']== 'checkout'){
                        header("location:../checkout.php");
                    }elseif($_GET['id']== 'profile'){
                        header("location:../profile.php");
                    }else {
                        header("location:../index.php");
                    } 
                }
        }
    }

    if (isset($_SESSION["email_not_found"])) {
        unset($_SESSION["password_not_match"]);
    }elseif(isset($_SESSION["password_not_match"])){
        unset($_SESSION["email_not_found"]);
    }

?>
