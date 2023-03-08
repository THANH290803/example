<?php
    $id = $_GET['id'];

    include_once '../connect/openConnect.php';
    $sql = "SELECT * FROM courses WHERE id = '$id'";
    $courses = mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
?>

<form method="post" action="update.php">
    <?php
    foreach ($courses as $cours){
        ?>
        <input type="hidden" name="id" value="<?= $cours['id'] ?>">
        Name: <input type="text" name="name" value="<?= $cours['name'] ?>"><br>
        Address: <input type="number" name="start_year" value="<?= $cours['start_year'] ?>"><br>
        Country: <input type="number" name="end_year" value="<?= $cours['end_year'] ?>"><br>
        <button>Update</button>
        <?php
    }
    ?>

</form>



