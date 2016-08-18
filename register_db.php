<?php
    require_once 'config.php';
    require_once 'link_db.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $password=$_POST['password'];
    $repeat_password=$_POST['repeat_password'];
    $new_code=$_POST['invite_code'];
    $sex = $_POST['sex'];  //性别
    $date = time();

    $sql="select * from user where username='$username'";    //检验用户名是否已经存在

    $result = mysqli_query($con,$sql);
    $num_rows = mysqli_fetch_row($result);
    if (!empty($num_rows)||empty($username)) {
        echo "<h1>该用户名已经存在或不能为空!</h1>";
        exit;
    }

    else if(!($password==$repeat_password)||empty($password)){
        echo "<h1>密码前后不一致或不能为空！</h1>";
        exit;
    }

    else if(!$new_code==$invite_code){
        echo "<h1>此邀请码不可用！</h1>";
        exit;
    }
    else{
        $_SESSION['username'] = $username;
        $password=md5($password);
        $sql="insert into user(username,password,email,age,sex,regtime)
             values('$username', '$password', '$email','$age', '$sex','$date')"; //将用户信息插入数据库
        $result = mysqli_query($con,$sql);
        if(!empty($result))
        {
            echo "<script>window.location.href='index.php';alert('注册成功！');</script>";

        }
        else {
            echo "<script>window.location.href='index.php';alert('注册失败');</script>";
        }
    }
if(!(mysqli_close($con))){
    mysql_error();
}