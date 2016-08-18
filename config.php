<?php
    error_reporting(0);
    @session_start();
    header('Content-type: text/html;charset=utf-8');
    define('HOST','localhost');
    define('DBNAME','root');
    define('DBPASSWORD','123456');
    $web_title='迷你论坛';//网站标题
    $path='';//文件路径
    $db_name='mini_forum';//使用的数据库
    $allow_register=true;//是否开放注册，选择true会告知游客邀请码。
    $invite_code=9654321;//注册邀请码
    $level=array("普通会员",'活跃会员','超级会员','普通管理员','超级管理员');
    $footCopyright="© 2016 <a href='http://xusenlin.com'>Xu senlin's</a> Mini-Forum. 由php+mysql强力驱动.</br>备案号：黔ICP备15004121号";

?>