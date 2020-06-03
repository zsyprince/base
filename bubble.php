<?php
/**
 * Create by PhpStorm
 * @Date: 2020/6/3
 * @Time: 17:23
 * @Author: zuosongyan01
 * @Email: zuosongyan01@58.com
 * File: bubble.php
 */

function bubble($arr) {
    $count = count($arr);
    //冒泡排序，可以把这个判断去掉，因为概率性事件，很难是大部分数据排序好的，并且这部分
    //会耗费一些时间，会多几个 n方 的执行次数

    for ($i = 0;$i < $count;$i++){
        $continue = false;
        for ($j = 0; $j < $count - $i - 1; $j ++) {
            $tmp = $arr[$j];
            if ($arr[$j] > $arr[$j + 1]) {
                $continue = true;
                $arr[$j] = $arr[$j+1] ;
                $arr[$j+1] = $tmp;
            }
        }
//        if (!$continue) {
//            break;
//        }
    }
    return $arr;
}


function bubble1($arr) {
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
