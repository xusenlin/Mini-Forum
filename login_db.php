<?php
    require_once 'config.php';
    require_once 'link_db.php';
    $username=$_POST['username'];
    $password=md5($_POST['Password']);

    $sql="select * from user where username='$username' and password='$password'";
    $result = mysqli_query($con,$sql);
    $num_rows = mysqli_num_rows($result);
    //			echo $num_rows;
    if($num_rows == 1)
    {
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['username'];  //将用户名存在session中
        $row['score']=$row['score']+5;
        mysql_query("set names gbk");
        mysqli_query($con,"update user set score = '".$row['score']."' where username ='".$row['username']."'");
        //跳转到论坛主页面

        ?><script language='javascript'>;
        window.location.href="index.php";
        alert("登录成功！");
    </script>
    <?php
    }
    else {
        ?> <script language='javascript'>
            window.location.href="login.php";
            alert("登录失败！请确认你的用户名和密码是否正确！");
        </script>
    <?php
    }
if(!(mysqli_close($con))){
    mysql_error();
}