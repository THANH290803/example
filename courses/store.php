<?php
    $name = $_POST['name'];
    $startYear = $_POST['start_year'];
    $endYear = $_POST['end_year'];

    include_once '../connect/openConnect.php';
    $sql = "INSERT INTO courses(name, start_year, end_year) VALUES ('$name', '$startYear', '$endYear')";
    mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
    header('Location:index.php');
?>
