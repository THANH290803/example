<?php
    $id = $_GET['id'];

    include_once '../connect/openConnect.php';
    $sql = "SELECT * FROM customers WHERE id = '$id'";
    $customers = mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';
?>

<form method="post" action="update.php">
    <?php
    foreach ($customers as $customer){
    ?>
        <input type="hidden" name="id" value="<?= $customer['id'] ?>">
        Name: <input type="text" name="name" value="<?= $customer['name'] ?>"><br>
        Email: <input type="email" name="email" value="<?= $customer['email'] ?>"><br>
        Password: <input type="password" name="password" value="<?= $customer['password'] ?>"><br>
        Address: <input type="text" name="address" value="<?= $customer['address'] ?>"><br>
        Phone: <input type="number" name="phone" value="<?= $customer['phone'] ?>"><br>
        <button>Update</button>
    <?php
        }
    ?>

</form>



