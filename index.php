<?php
    require_once 'config.php';

    include 'head.php';

    require_once 'link_db.php';



    $sql = "select * from topic order by datetime desc";
    $result =mysqli_query($con,$sql);
    if($result){

//        $row = mysqli_fetch_array($result);
//        var_dump($row);
    }else{
        echo '查询失败！';
    }



?>



    <div class="container">

        <div class="panel panel-success">

            <div class="panel-heading ">最新发布帖子</div>


            <!-- Table -->
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>标题</th>
                    <th>用户</th>
                    <th>时间</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    while($row = mysqli_fetch_array($result)){
                        $time = date('Y-m-d',$row['datetime']);
                        echo '<tr><th scope="row">'.$row['id']
                        .'</th><td>'
                        .'<a href="article_content.php?id='.$row['id'].'">'.$row['topic'].'</a></td><td>'
                        .$row['name'].'</td><td>'
                        .$time.'</td></tr>';
                    }

                ?>



                </tbody>
            </table>
        </div>
    </div>

<?php

include 'foot.php';
?>