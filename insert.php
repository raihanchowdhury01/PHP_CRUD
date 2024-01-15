<?php
    if(isset($_POST['btn'])){
        $CategoryName = $_POST['category_name'];
        $CategoryDate = $_POST['date'];
        $sql = "INSERT INTO category(category_name, category_date) VALUES ('$CategoryName', '$CategoryDate')";
        $res = $con-> query($sql);
        if($res){
            echo "Data Inserted!";
        }
    }
    
?>