<?php
$t2 = microtime(true);
?>
<hr>
<div class="container-fluid">
    <div class="text-center">
        <?php
        echo $footCopyright.'<br>'.'页面耗时'.round($t2-$t1,3).'秒';
        ?>
    </div>
</div>
<script src="js/myjs.js"></script>
</body>
</html>