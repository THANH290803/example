<?php
    $id = $_GET['id'];

    include_once '../connect/openConnect.php';
    $sql = "DELETE FROM bills WHERE id = '$id'";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');
?>
