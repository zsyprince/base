<?php
$arr = [9,5,3,1,4,7];
$sort = [9,7,5,4,3,1,12,45,34,35,99,43,88,2,33,11,55,66,10,29,39];
include  "select.php";
function bubble($arr) {
    $count = count($arr);
    //冒泡排序，可以把这个判断去掉，因为概率性事件，很难是大部分数据排序好的，并且这部分
    //会耗费一些时间，会多几个 n方 的执行次数

    for ($i = 0;$i < $count;$i++){
        $continue = false;
        for ($j = $i + 1; $j < $count; $j ++) {
            $tmp = $arr[$i];
            if ($arr[$i] < $arr[$j]) {
                $continue = true;
                $arr[$i] = $arr[$j] ;
                $arr[$j] = $tmp;
            }
        }
//        if (!$continue) {
//            break;
//        }
    }
    return $arr;
}

$bubble = bubble($arr);
echo json_encode($bubble);die;

$arr = [];
$max = 1000 * 10;
for ($ii = 0;$ii < $max; $ii++) {
    $arr[]= mt_rand(0,$max);
}
$s = microtime(true);
$select = select($arr);
$s_time = microtime(true) - $s;
$s = microtime(true);
$bubble = bubble($arr);
$b_time = microtime(true) - $s;

var_dump([$s_time,$b_time]);
