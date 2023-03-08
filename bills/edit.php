<?php
    $id = $_GET['id'];
    include_once '../connect/openConnect.php';
    $sql = "SELECT * FROM customers";
    $customers = mysqli_query($connect, $sql);
    $sqlBills = "SELECT * FROM bills WHERE id = '$id'";
    $bills = mysqli_query($connect, $sqlBills);
    include_once '../connect/closeConnect.php';
    foreach ($bills as $bill){
?>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?= $bill['id'] ?>">
        Date Buy <input type="date" name="dateBuy" value="<?= $bill['dateBuy'] ?>"><br>
        Customer_name <select name="customer_id">
            <option value="0">-- Choose --</option>
            <?php
            foreach ($customers as $customer){
                ?>
                <option value="<?= $customer['id'] ?>"
                    <?php
                        if ($customer['id'] == $bill['customer_id']){
                            echo 'selected';
                        }
                    ?>
                >
                    <?= $customer['name'] ?>
                </option>
            <?php
                }
            ?>
        </select><br>
        Status: <input type="radio" name="status" value="0"
        <?php
            if ($bill['status'] == 0){
                echo 'checked';
            }

        ?>>Đã thanh toán
        <input type="radio" name="status" value="1"
            <?php
            if ($bill['status'] == 1){
                echo 'checked';
            }

            ?>
        >Chưa thanh toán<br>
        <button>Update</button>
    </form>
<?php
    }
?>