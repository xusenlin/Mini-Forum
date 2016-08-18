
<!--用户退出登陆程序-->

<?php
require('config.php');
require('link_db.php');

$_SESSION = array();//清空SESSION
session_unset();
session_destroy();

?><script language='javascript'>;
    window.location.href="index.php";
    alert("成功退出登录!")
</script>

