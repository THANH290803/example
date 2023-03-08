<?php
    include_once '../connect/openConnect.php';
    $sql = "SELECT * FROM customers";
    $customers = mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';

?>
<form method="post" action="store.php">
    Date Buy <input type="date" name="dateBuy"><br>
    Customer_name <select name="customer_id">
        <option value="0">-- Choose --</option>
        <?php
            foreach ($customers as $customer){
        ?>
                <option value="<?= $customer['id'] ?>">
                    <?= $customer['name'] ?>
                </option>
                <?php
            }
        ?>
    </select><br>
    Status: <input type="radio" name="status" value="0">Đã thanh toán<input type="radio" name="status" value="1">Chưa thanh toán<br>
    <button>Add</button>
</form>

