<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $country = $_POST['country'];

    include_once '../connect/openConnect.php';
    $sql = "UPDATE brands SET name = '$name', address = '$address', country = '$country' WHERE id = '$id'";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');
?>
