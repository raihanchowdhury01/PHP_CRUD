<?php
include("connect_db.php");

include("update_form.php");
$GetID = $_GET['id'];
if (isset($_POST['update_btn'])) {

    $Name = $_POST['update_category_name'];
    $Date = $_POST['update_category_date'];
    $sql = "UPDATE category SET category_name ='$Name', category_date ='$Date' WHERE id='$GetID'";
    $res = $con->query($sql);
    if ($res) {
        echo "Data Updated!";
    }
}
