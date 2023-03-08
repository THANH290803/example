<?php
    include_once '../connect/openConnect.php';
    $sql = "SELECT * FROM brands";
    $brands = mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';

?>

<table border="1px" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>country</th>
        <th>Update</th>
        <th>DELETE</th>
    </tr>
    <?php
    foreach ($brands as $brand){
        ?>
        <tr>
            <td><?= $brand['id'] ?></td>
            <td><?= $brand['name'] ?></td>
            <td><?= $brand['address'] ?></td>
            <td><?= $brand['country'] ?></td>
            <td><a href="edit.php?id=<?= $brand['id'] ?>">Edit</a></td>
            <td><a href="destroy.php?id=<?= $brand['id'] ?>">Delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<button style="margin-top: 15px; padding: 5px;"><a href="create.php">Add customers</a></button>
