<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜课网</title>
    <title>Document</title>
    <!--CSS-->
    <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/home/base/css/base.css">
    <link rel="stylesheet" href="/include/simpleWindow/css/simpleWindow.css">
    
    <style>
        .enter{
            height: 50px;
            position: absolute;
            right: 30px;
        }
        .enter li{
            height: 50px;
            line-height: 50px;
            display: inline-block;
        }
        .enter li a{
            padding: 0px 10px;
            display: block;
        }
        .main{
            width: 100%;
            margin: 0px;
            /*background-color: #0f0f0f;*/
            border: 1px solid #0f0f0f;
            overflow: hidden;
            position: relative;
        }
        .main ul{
            margin: 0px;
            padding: 0px;
            font-size: 100px;
            position: absolute;
            bottom: 0px;
        }
        .main ul li{
            height: 100%;
            margin: 0px;
            padding: 0px;
            font-size: 100px;
        }
        html,body{
            overflow: hidden;
        }
    </style>

</head>
<body>
<div id="container">
    <div class="header">
        <div id="logo"></div>
        <ul class="index">
            <li><a href="">日记</a></li><li><a href="">计划</a></li><li><a href="">重要事件</a></li><li><a href="">时间仓</a></li>
        </ul>
        <ul class="enter">
            <li><a href="">登录</a></li><li><a href="">注册</a></li>
        </ul>
    </div>
    <!--主题内容main-->
    

    <div id="website-tool">
        <ul>
            <li><span class="iconfont back-to-top" >&#xe613;</span></li>
        </ul>
    </div>
</div>
<footer>
    <p>©2016 haoshenghuo 使用haoshenghuo必读 文网文[2010]197号</p>
</footer>
<!--JS-->
<script type="text/javascript" src="/include/jquery.min.js"></script>
<script type="text/javascript" src="/Public/home/base/js/base.js"></script>
<script type="text/javascript" src="/include/simpleWindow/js/simpleWindow.js"></script>
<script type="text/javascript" src="/include/doMove.js"></script>
<script>
    console.log(new WG());
</script>

    <!--<script type="text/javascript" src="/Public/Home/View/index/js/index.js" ></script>-->

</body>
</html>