<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
//
//if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
//
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','./App/');
//define('BIND_MODULE','Admin');
define("WEBROOT",dirname(__FILE__));
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

////函数会预解析，不允许重复定义
////函数的作用域，可以根据作用域链进行调用
////局部作用域链要经过global声明，才能根据作用域链访问全局变量
//
//fn();
//
//function fn(){
//    t();
//    global $a;//添加 global ，就会增加预解析
//}
//function t(){
//    echo 1;
//}
////PHP中，变量的初始化是得到一个部位null的值，没有预解析
////var_dump($a);
//$a=10;
//var_dump($a);

