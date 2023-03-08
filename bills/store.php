<?php
    $dateBuy = $_POST['dateBuy'];
    $customer_id = $_POST['customer_id'];
    $status = $_POST['status'];

    include_once '../connect/openConnect.php';
    $sql = "INSERT INTO bills(dateBuy, customer_id, status) VALUES ('$dateBuy', '$customer_id', '$status')";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');

?>