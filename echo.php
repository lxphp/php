<?php
/**
 * Created by PhpStorm.
 * User: jsobao
 * Date: 2017/4/28
 * Time: 10:28
 */

//第一种输出方式：
echo "Hello World";
//第二种输出方式
print "Hello World";
//第三种输出方式 ★通常用来输出数组
$arr[]="aaa";
$arr[]="bb";
echo "<pre>";
print_r($arr);
//第四种输出方式 ★通常用来输出数组
var_dump($arr);