<?php
$con = new mysqli("localhost", "root", "", "sms");
if(!$con){
    echo mysqli_connect_error();
}
?>