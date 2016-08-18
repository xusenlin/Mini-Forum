<?php
require_once 'config.php';
include 'head.php';
require_once 'link_db.php';
if($_SESSION['username']){
        $username=$_SESSION['username'];

        if($_POST['title']){

//        $sql="select * from user where username='$username'";
//        $result = mysqli_query($con,$sql);
//
////        $num_rows = mysqli_num_rows($result);
//        $row = mysqli_fetch_array($result);
        $title =trim($_POST['title']);
        $author = trim($_POST['author']);
        $about = trim($_POST['about']);
        $centent = trim($_POST['centent']);
        $datetime = time();

            if(!($title&&$author&&$about&&$centent)){
                 echo "<script>alert('请填写完整！');</script>";
            }else{
                $sql = "INSERT INTO topic (topic,name,about,content,datetime) VALUES ('$title','$author','$about','$centent',$datetime)";
                if(mysqli_query($con,$sql)){
                    $sql="select * from user where username='$username'";
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($result);
                    $score = $row['score']+5;
                    $sql = "UPDATE user SET score=$score WHERE username='$username'";
                    mysqli_query($con,$sql);
                    echo '<script>alert(\'发表成功！\');</script>';
                }else{
                    echo '发表帖子出错！';
                }

            }



//    $sql = "INSERT INTO topic (topic,content,name,datetime,) VALUES (value1,value2,value3,...);";

    }
    }
    else{
        echo '<h1>请先登录！</h1>';
        exit;
    }


?>

<div class="container">
    <form method="post" action="article_add.php">
        <div class="form-group">
            <label for="exampleInputEmail1">文章标题</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">文章作者</label>
            <input type="text" class="form-control" name="author" value="<?php echo $username;?>">
        </div>
        <textarea class="form-control" rows="3" placeholder="文章简介" name="about"></textarea>
        </br>
        </br>
        <textarea class="form-control " rows="8" placeholder="文章内容" name="centent"></textarea>
        </br>
        <div class="alert alert-warning" role="alert">提示：禁止发表不和谐的内容！</div>
             </br></br>
        <button type="submit" class="btn btn-success">发布文章</button>
    </form>

</div>
</br>
</br>


<script>
    window.onload=function(){
        headbtn(100);
    }
</script>
<?php
include 'foot.php';
?>