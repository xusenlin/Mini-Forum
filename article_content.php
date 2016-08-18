<?php
require_once 'config.php';

include 'head.php';

require_once 'link_db.php';
    $id=$_GET['id'];
    $sql="select * from topic where id=$id";
    $data=mysqli_query($con,$sql);

    if($data&&$data->num_rows){
        $row=mysqli_fetch_assoc($data);

    }else{
        echo '<h1>id为'.$id.'文章不存在</h1>';
        exit;
    }
?>

    <div class="jumbotron">
       <div class="container">
           <h1><?php echo $row[topic];?></h1>
           <p>作者：<?php echo $row[name];?><span class="mytext">发布时间：<?php echo date('Y-m-d H:i:s',$row[datetime]);?></span></p>
           <p><?php echo $row[content];?></p>

       </div>
    </div>


<script src="js/myjs.js"></script>
<script>
    window.onload=function(){
        headbtn(50); //参数大于实际导航列表就没有激活选项
    }
</script>
<?php
include 'foot.php';
?>