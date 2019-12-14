
<?php

$con = mysqli_connect('localhost','root','','practice');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


mysqli_select_db($con,"ajax_demo");
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d H:i:s");
$str= sha1( $_POST[user_id].$_POST[medicine_name].$date.$_POST[amount]);



$sql="INSERT INTO `Medicines` (`id`,`user_id`,`med_name`,`time_date`,`amount`,`mfg`,`exp`,`order_id`) VALUES (default,'$_POST[user_id]','$_POST[medicine_name]','$date','$_POST[amount]',NOW(),NOW(),'$str')";
$result = mysqli_query($con,$sql);

mysqli_close($con);
?>
