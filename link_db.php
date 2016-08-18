<?php
/**
 * Created by PhpStorm.
 * User: JORDAN
 * Date: 2016/6/25
 * Time: 13:12
 */
if(!($con=mysqli_connect(HOST,DBNAME,DBPASSWORD))){
    echo mysql_error();
}


if(!(mysqli_select_db($con,$db_name))){
    echo mysql_error();
}
if(!(mysqli_query($con,'set names utf8'))){
    echo mysql_error();
}
?>