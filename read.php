<?php
include("connect_db.php");
$sql = "SELECT * FROM category";
$res = $con->query($sql);
if ($res) {
    echo "connected";
    // $values = mysqli_fetch_array($res);
    // foreach ($values as $value) {
        while($value = mysqli_fetch_array($res)){
?>
        <table>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Category Date</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['category_name']?></td>
                <td><?=$value['category_date']?></td>
                <td><a href="update.php?id=<?= $value['id']?>">Edit</a></td>
            </tr>
        </table>
<?php
    }
}
?>