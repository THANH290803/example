<?php
    include_once '../connect/openConnect.php';
    $sql = "SELECT * FROM courses";
    $courses = mysqli_query($connect, $sql);
    include_once '../connect/closeConnect.php';

?>

<table border="1px" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Start-Year</th>
        <th>End-Year</th>
        <th>Update</th>
        <th>DELETE</th>
    </tr>
    <?php
    foreach ($courses as $cours){
        ?>
        <tr>
            <td><?= $cours['id'] ?></td>
            <td><?= $cours['name'] ?></td>
            <td><?= $cours['start_year'] ?></td>
            <td><?= $cours['end_year'] ?></td>
            <td><a href="edit.php?id=<?= $cours['id'] ?>">Edit</a></td>
            <td><a href="destroy.php?id=<?= $cours['id'] ?>">Delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<button style="margin-top: 15px; padding: 5px;"><a href="create.php">Add courses</a></button>
