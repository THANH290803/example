<?php
    include_once '../connect/openConnect.php';
    $sql = "SELECT bills.*, customers.name AS customer_name FROM bills INNER JOIN customers ON bills.customer_id = customers.id ";
    $bills = mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';

?>

<table border="1px" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <th>id</th>
        <th>Date Buy</th>
        <th>Customer_id</th>
        <th>Status</th>
        <th>Update</th>
        <th>DELETE</th>
    </tr>
    <?php
    foreach ($bills as $bill){
        ?>
        <tr>
            <td><?= $bill['id'] ?></td>
            <td><?= $bill['dateBuy'] ?></td>
            <td><?= $bill['customer_name'] ?></td>
            <td>
                <?php
                    if ($bill['status'] == 0) {
                        echo 'Đã thanh toán';
                    } else {
                        echo 'Chưa thanh toán';
                    }

                ?>
            </td>
            <td><a href="edit.php?id=<?= $bill['id'] ?>">Edit</a></td>
            <td><a href="destroy.php?id=<?= $bill['id'] ?>">Delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<button style="margin-top: 15px; padding: 5px;"><a href="create.php">Add customers</a></button>
