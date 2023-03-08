<?php
    include_once '../connect/openConnect.php';
    $sql = "SELECT * FROM customers";
    $customers = mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';

?>

<table border="1px" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>address</th>
        <th>phone</th>
        <th>Update</th>
        <th>DELETE</th>
    </tr>
    <?php
        foreach ($customers as $customer){
    ?>
            <tr>
                <td><?= $customer['id'] ?></td>
                <td><?= $customer['name'] ?></td>
                <td><?= $customer['email'] ?></td>
                <td><?= $customer['password'] ?></td>
                <td><?= $customer['address'] ?></td>
                <td><?= $customer['phone'] ?></td>
                <td><a href="edit.php?id=<?= $customer['id'] ?>">Edit</a></td>
                <td><a href="destroy.php?id=<?= $customer['id'] ?>">Delete</a></td>
            </tr>
    <?php
        }
    ?>
</table>
<button style="margin-top: 15px; padding: 5px;"><a href="create.php">Add customers</a></button>
