<?php
require 'config.php';
require 'link_db.php';
require 'level.php';
include 'head.php';
?>
    <div class="jumbotron">
        <div class="container">
            <div class="jumbotron">
                <h1>欢迎你"
                    <?php
                    if($_SESSION['username'])
                    {   $username=$_SESSION['username'];
                        echo $username;
                        $sql="select * from user where username='$username'";
                        $result = mysqli_query($con,$sql);

                        $num_rows = mysqli_num_rows($result);
                        $row = mysqli_fetch_array($result);

                    }
                    else{
                        echo '请先登录！';
                        exit;
                    }
                    ?>"</h1>
                <p>欢迎你加入我们！下面是你的一些基本资料。</p>

                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">昵称：<?php echo $username;?></li>
                    <li class="list-group-item ">邮箱： <?php echo $row['email'];?></li>
                    <li class="list-group-item ">年龄：<?php echo $row['age'];?></li>
                    <li class="list-group-item ">性别：<?php echo $row['sex'];?></li>
                    <li class="list-group-item ">积分：<?php echo $row['score'];?></li>
                    <li class="list-group-item ">等级：<?php level($row['power']);?></li>
                    <li class="list-group-item ">注册时间：<?php echo date("Y-m-d H:i:s", $row['regtime']);?></li>
                </ul>

                <div class="alert alert-warning" role="alert">
                    <a href="#" class="alert-link">提示：暂时还不能更改你的个人信息！</a>
                </div>
            </div>

        </div>
    </div>

    <script src="js/myjs.js"></script>
    <script>
        window.onload=function(){
            headbtn(100);
        }

    </script>
<?php

include 'foot.php';
?>