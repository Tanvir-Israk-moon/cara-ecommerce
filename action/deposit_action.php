<?php
include('../include/data_base.php');
$action = $_GET['action'];
$dp_id = $_GET['id'];

if (isset($action) && $action == 'apv') {
    $approved_query = "UPDATE `deposit` SET `status`='Approved' WHERE `id` = $dp_id";
    $conn -> query($approved_query);
    header("location:../admin/deposit.php");
}
if (isset($action) && $action == 'rjt') {
    $reject_query = "UPDATE `deposit` SET `status`='Rejected' WHERE `id` = $dp_id";
    $conn -> query($reject_query);
    header("location:../admin/deposit.php");
}

?>