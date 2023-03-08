<?php
    $id = $_POST['id'];
    $dateBuy = $_POST['dateBuy'];
    $customer_id = $_POST['customer_id'];
    $status = $_POST['status'];

    include_once '../connect/openConnect.php';
    $sql = "UPDATE bills SET dateBuy = '$dateBuy', customer_id = '$customer_id', status = '$status' WHERE id = '$id'";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');
?>

