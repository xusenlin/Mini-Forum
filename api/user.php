<?php
require '../config.php';
require '../link_db.php';

$username=$_POST['username'];
$password=md5($_POST['password']);
//$username='小林';
//$password=md5(123456);
$sql="select * from user where username='$username' and password='$password'";
$result = mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if($num_rows==1){
    echo json_encode($row);
}else{
    echo $num_rows;
}
                   