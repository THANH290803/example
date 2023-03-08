<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $startYear = $_POST['start_year'];
    $endYear = $_POST['end_year'];

    include_once '../connect/openConnect.php';
    $sql = "UPDATE courses SET name = '$name', start_year = '$startYear', end_year = '$endYear' WHERE id = '$id'";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');
?>
