<?php
require_once 'config.php';

include 'head.php';
?>
    <div class="jumbotron">
        <div class="container">
            <div class="jumbotron">
                <h1>欢迎使用Mini-Forum</h1>
                <p>Mini-Forum是一个迷你论坛，后端使用php+mysql完成，前端使用bootstarp框架完成，在2016.06.28发布第一版，开源免费。你可以使用他来学习，甚至做其他你想做的事情。作者只希望保留一下出处，谢谢！当然，你也可以修改。最后，如果喜欢，请在github给我一个Star。</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">GITHUB</a></p>
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