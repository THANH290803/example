<?php
    $name = $_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    include_once '../connect/openConnect.php';
    $sql = "INSERT INTO customers(name, email, password, address, phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');
?>
