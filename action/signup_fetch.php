<?php 

    session_start();
    include_once('../include/data_base.php');

    function codePrevent($input){
        $input = trim($input);
        $input = stripcslashes($input);
        $input = htmlspecialchars($input);
        
        return $input;
    }

    $name = $_SESSION['name']=  codePrevent($_POST['full_name'] );
    $contact = $_SESSION['contact'] = codePrevent($_POST['contact_number'] );
    $email = $_SESSION['email'] = codePrevent($_POST['email_address'] );
    $password = $_SESSION['password'] = codePrevent($_POST['password']);
    $con_password = $_SESSION['con_password'] =codePrevent($_POST['conform_password']);
    $passwordLength = strlen($password);

    if (isset($_POST['signup'])) {

        $email_count_query = "SELECT * FROM `users` WHERE `Email` = '$email'";
        $email_count_query_insert = $conn->query($email_count_query);
        $email_count = mysqli_num_rows($email_count_query_insert);
        

        if (empty ($name)) {
            header("location:../login.php?error=*User Name Can't Be Blank");
        }elseif (empty ($contact)) {
            header("location:../login.php?error=*Contact Number Can't Be Blank");
        }elseif (empty ($email)) {
            header("location:../login.php?error=*Email Address Can't Be Blank");
        }elseif($email_count >= 1){
            header("location:../login.php?error=*This Email Address Already Exist");
        }elseif (empty ($password)) {
            header("location:../login.php?error=*Please Enter Your Password");
        }elseif($passwordLength <= 5){
            header("location:../login.php?error=*Password Must Be Minimum 6 Character");
        }elseif($passwordLength >= 31){
            header("location:../login.php?error=*Password Must Be Maximum 32 Character");
        }elseif (empty ($con_password)) {
            header("location:../login.php?error=*Please Conform Your Password");
        }elseif($password !== $con_password){
            header("location:../login.php?error=*Password Not Matched");
        }else{
            $password=md5($password);
            $con_password=md5($con_password);

            if(!empty($name) && !empty($contact) && !empty($email) && !empty($password) && $password == $con_password){
                $user_data_insert = "INSERT INTO `users`(`Name`, `Contact`, `Email`, `Password`) VALUES ('$name','$contact','$email','$password')";

            $signup_success= $conn -> query($user_data_insert);

            if(isset($signup_success)){
                    setcookie('access_for_explore', $Email, time() + (86400 * 7), "/");
                    session_unset();
                    header("location:../index.php");

                }else{
                    header("location:../login.php?error=*Something went wrong !");
                }
            }

        }       
    }

?>
