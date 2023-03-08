<?php
    $id = $_GET['id'];

    include_once '../connect/openConnect.php';
    $sql = "SELECT * FROM brands WHERE id = '$id'";
    $brands = mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
?>

<form method="post" action="update.php">
    <?php
        foreach ($brands as $brand){
    ?>
        <input type="hidden" name="id" value="<?= $brand['id'] ?>">
        Name: <input type="text" name="name" value="<?= $brand['name'] ?>"><br>
        Address: <input type="text" name="address" value="<?= $brand['address'] ?>"><br>
        Country: <input type="text" name="country" value="<?= $brand['country'] ?>"><br>
        <button>Update</button>
    <?php
        }
    ?>

</form>



