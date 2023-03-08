<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    include_once '../connect/openConnect.php';
    $sql = "UPDATE customers SET name = '$name', email= '$email', password = '$password', address = '$address', phone = '$phone' WHERE id = '$id'";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');
?>
