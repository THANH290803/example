<?php
    $name = $_POST['name'];
    $address = $_POST['address'];
    $country = $_POST['country'];

    include_once '../connect/openConnect.php';
    $sql = "INSERT INTO brands(name, address, country) VALUES ('$name', '$address', '$country')";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');
?>
