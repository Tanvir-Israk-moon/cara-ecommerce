<?php
include('../include/data_base.php');

$user_email = $_COOKIE['access_for_explore'];
$user_found_query = "SELECT * FROM `users` WHERE `Email` = '$user_email'";
$user_found_query_insert = $conn->query($user_found_query);
$user_info = mysqli_fetch_assoc($user_found_query_insert);
$user_id = $user_info['ID'];

if (isset($_POST['crypto_submit'])) {
    $txd_id = $_POST['txd_id'];
    $amount = $_POST['amount'];
    $gateway = $_GET['gateway'];

    $deposit_request_query = "INSERT INTO `deposit`(`txd id`, `gateway`, `amount`, `user id`, `user mail`, `status`) VALUES ('$txd_id','$gateway','$amount','$user_id','$user_email','Pending')";
    $deposit_query_insert = $conn->query($deposit_request_query);

    header("location:../index.php");

}

?>