<?php
$arr = [9,3,5,4,7,1];
$sort = [9,7,5,4,3,1,12,45,34,35,99,43,88,2,33,11,55,66,10,29,39,"r"];
function bubble($arr) {
    $count = count($arr);
    $jishu = 0;
    $continue = false;

    $numList = implode($arr,"");
    if (!is_numeric($numList)) { //is_numeric源码实现？
        die("error");
    }

    if ($count < 2) {
        return $arr;
    }
    for ($i = 0;$i < $count;$i++){
        for ($j = $i + 1; $j < $count; $j ++) {
            ++$jishu;
            $tmp = $arr[$i];
            if ($arr[$i] < $arr[$j]) {
                $continue = true;
                $arr[$i] = $arr[$j] ;
                $arr[$j] = $tmp;
            }
            if (!$continue) {
                break;
            }
        }
    }
    echo "------------$jishu<br>";
    echo json_encode($arr);
}

bubble($sort);