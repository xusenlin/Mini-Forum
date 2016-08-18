<?php
require_once 'config.php';

include 'head.php';
?>

    <div class="container">



        <form method="post" action="login_db.php">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">用户名</span>
                <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">密码</span>
                <input type="password" class="form-control" placeholder="Password" name="Password">
            </div>
            <div class="btn_box center-block">
                <button  type="submit" name="submit" class="btn btn-primary mt20">提交登录</button>
                <a type="button" href="register.php" class="btn btn-success mt20 " >返回注册</a>
            </div>
        </form>



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