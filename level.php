<?php

function level($i){
    global $level;
    switch($i){
        case 1:
            echo  $level[0];
            break;
        case 2:
            echo $level[1];
            break;
        case 3:
            echo $level[2];
            break;
        case 4:
            echo $level[3];
            break;
        case 5:
            echo $level[4];
            break;
    }
}
?>