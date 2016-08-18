<?php
$t1 = microtime(true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $web_title; ?></title>
    <link href="<?php echo $path; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $path; ?>css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="#">Mini-Forum</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="head">
                <li class="active"><a href="index.php">首页<span class="sr-only">(current)</span></a></li>
                <li><a href="#">帖子</a></li>
                <li><a href="#">用户</a></li>
                <li><a href="#">后台</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if($_SESSION['username']){
                    echo '<li><a href="article_add.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>'
                        .'<div class="tooltip bottom" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner">发帖</div></div>'
                        .'</a></li>';
                }
                ?>


                <li>
                    <a href=
                    <?php
                    if($_SESSION['username']){
                        echo 'user.php';
                    }else{
                        echo 'login.php';
                    }
                    ?> >
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="tooltip bottom" role="tooltip">
                            <div class="tooltip-arrow"></div>
                            <div class="tooltip-inner">
                                <?php
                                if($_SESSION['username']){
                                    echo '信息';
                                }else{
                                    echo '登录';
                                }
                                ?>

                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=<?php
                    if($_SESSION['username']){
                        echo 'logout.php';
                    }else{
                        echo 'register.php';
                    }
                    ?> >
                        <span class="glyphicon
                        <?php
                        if($_SESSION['username']){
                            echo 'glyphicon-share';
                        }else{
                            echo 'glyphicon-bookmark';
                        }
                        ?>" aria-hidden="true">

                        </span>
                        <div class="tooltip bottom" role="tooltip">
                            <div class="tooltip-arrow"></div>
                            <div class="tooltip-inner">
                                <?php
                                if($_SESSION['username']){
                                    echo '退出';
                                }else{
                                    echo '注册';
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="about.php"  >
                        <span class="glyphicon glyphicon-question-sign" aria-hidden="true">

                        </span>
                        <div class="tooltip bottom" role="tooltip">
                            <div class="tooltip-arrow"></div>
                            <div class="tooltip-inner">
                                关于
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>