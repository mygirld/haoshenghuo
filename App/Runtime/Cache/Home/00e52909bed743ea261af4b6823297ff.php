<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>好生活</title>
    <title>Document</title>
    <!--//解决IE6,7,8不支持HTML5标签的问题-->
    <script type="text/javascript" src="/include/html5shiv.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/home/base/css/base.css">
    <link rel="stylesheet" href="/include/simpleWindow/css/simpleWindow.css">
    <!--juqeryUI-->
    
    <link rel="stylesheet" href="/Public/home/Index/index.css">

</head>
<body>
<div id="container">
    <div class="header">
        <div id="logo"></div>
        <ul class="index">
            <li><a href="http://www.haoshenghuo.com">主页</a></li>
            <!--<li><a href="/index.php/Home/Jour/create" id="jour">日记</a></li><li><a href="/index.php/Home/Plan/create" >计划</a></li><li><a href="/index.php/Home/ImportantEvent/create">重要事件</a></li><li><a href="/index.php/Home/TimeRestory/create">时间仓</a></li>-->
        </ul>
        <ul class="enter">
            <li><a href="/index.php/Home/User/login">登录</a></li><li><a href="/index.php/Home/User/register">注册</a></li>
        </ul>
    </div>
    <!--主题内容main-->
    
    <div id="pic">
            <a id="prev" class="iconfont text">&#xe604;</a>
            <a id="next" class="iconfont text">&#xe603;</a>
            <p id="title">图片标题加载中...</p>
            <div id="imgBox">
                <a href=""><img alt="" id="img"></a>
                <div id="shadow">图片加载中...</div>
            </div>
            <!--兼容IE6-->
            <div id="oUl"></div>
            <!--兼容IE6-->
            <div id="oSmallUl"></div>
    </div>
    <div class="main">
        <div class="left">
            <div class="block music">
                <div class="music-words">
                    <!--<span class="iconfont play on" style="font-size: 100px">&#xe606;</span>-->
                    <p>111</p>
                    <p>222</p>
                    <p>333</p>
                    <p>444444444</p>
                    <p>555555555555</p>
                    <p>66666666666666</p>
                    <p>777777777777</p>
                    <p>888888888888</p>
                    <p>999999999</p>
                    <p>10</p>
                    <p>101111111</p>
                    <p>1222222222</p>
                </div>
                <ul class="music-list">
                    <li><a href="">11111</a></li>
                    <li><a href="">222222</a></li>
                    <li><a href="">3333</a></li>
                    <li><a href="">4444444</a></li>
                </ul>
                <ul class="tool">
                    <li><span class="iconfont prev" style="font-size: 30px;position: absolute;left: 10px ">&#xe604;</span></li>
                    <li><span class="iconfont play on" style="font-size: 30px;position: absolute;left: 44% ">&#xe606;</span></li>
                    <li><span class="iconfont next" style="font-size: 30px;position: absolute;right: 10px ">&#xe603;</span></li>
                </ul>
                <ul class="toolbar">
                    <li class="music-list-button"><span class="iconfont">&#xe61f;</span></li>
                    <li class="loop"><span class="iconfont">&#xe61e;</span></li>
                    <li class="loop"><span class="iconfont"> &#xe607;</span></li>
                </ul>

            </div>
            <div class="block" style="height: 100px">
                <a href="http://sports.qq.com/nba/" STYLE="display: block;height: 100px;
                line-height: 100px;text-align: center;
                background-color: #3c763d;
                background-image: url('/Public/home/Index/img/nba.png');
                background-repeat: no-repeat;
                background-size: 100%;
                background-position: center;
                text-decoration: none;
                font-size: 40px;
                "></a>
            </div>
            <div class="block" style="height: 100px">
                <a href="http://daily.zhihu.com/" STYLE="display: block;height: 100px;
                  line-height: 100px;text-align: center;
                background-color: #3c763d;
                background-image: url('/Public/home/Index/img/zhihunews.png');
                background-repeat: no-repeat;
                background-size: 100%;
                background-position: center;
                text-decoration: none;
                font-size: 40px;
                "></a>
            </div>
            <div class="block" style="height: 100px">
                <a href="http://daily.zhihu.com/" STYLE="display: block;height: 100px;
                line-height: 100px;text-align: center;
                background-color: #f5f5f5;
                text-decoration: none;
                font-size: 60px;
                " title="自定义添加">+</a>
            </div>
        </div>
        <div class="R">
            <div class="block user">
                <a href="http://sports.qq.com/nba/"  class="iconfont">&#xe624;</a>
                <span>小白</span>
            </div>
            <div class="chat">
                <ul id="ul">
                    <li class="list">
                        <a class="title">我的好友</a>
                        <ul>
                            <li>小明</li>
                            <li>小白</li>
                            <li>小黑</li>
                        </ul>
                    </li>
                    <li class="list">
                        <a class="title">国家领导人</a>
                        <ul>
                            <li>小明</li>
                            <li>小白</li>
                            <li>小黑</li>
                        </ul>
                    </li>
                    <li class="list">
                        <a class="title">黑名单</a>
                        <ul>
                            <li>小明</li>
                            <li>小白</li>
                            <li>小黑</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="block news">
                <div class="content">
                    <ul>
                        <li><a href="">内容</a></li>
                        <li><a href="">内容</a></li>
                        <li><a href="">内容</a></li>
                        <li><a href="">内容</a></li>
                    </ul>
                </div>
                <ul class="ul">
                    <li><a href="">导航</a></li>
                    <li><a href="">导航</a></li>
                    <li><a href="">导航</a></li>
                </ul>
            </div>
            <ul class="list"  >
                <div class="nav"><span>计划</span></div>
                <li>
                    <p class="title">标题</p>
                    <time>时间</time>
                    <p class="cont">内内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容容</p>
                </li>
                <li>
                    <p class="title">标题</p>
                    <time>时间</time>
                    <p class="cont">内内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容容</p>
                </li>
                <p class="iconfont more" >&#xe610;</p>
            </ul>
            <ul class="list"  >
                <div class="nav"><span>重要事件</span></div>
                <li>
                    <p class="title">标题</p>
                    <time>时间</time>
                    <p class="cont">内内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容容</p>
                </li>
                <li>
                    <p class="title">标题</p>
                    <time>时间</time>
                    <p class="cont">内内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容容</p>
                </li>
                <p class="iconfont more" >&#xe610;</p>
            </ul>
            <ul class="list last"  >
                <div class="nav"><span>时间仓</span></div>
                <li>
                    <p class="title">标题</p>
                    <time>时间</time>
                    <p class="cont">内内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容容</p>
                </li>
                <li>
                    <p class="title">标题</p>
                    <time>时间</time>
                    <p class="cont">内内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容容</p>
                </li>
                <p class="iconfont more" >&#xe610;</p>
            </ul>
        </div>
    </div>

    <div id="website-tool">
        <ul>
            <li><span class="iconfont back-to-top" >&#xe613;</span></li>
            <li><a href="/index.php/Home/Jour/create" title="日记/计划/时间仓...."><span class="iconfont create-jour" >&#xe615;</span></a></li>
            <li><a href="/index.php/Home/Plan/create"><span class="iconfont create-jour" >&#xe614;</span></a></li>
        </ul>
    </div>
</div>
<footer>
    <p>©2016 haoshenghuo 使用haoshenghuo必读 文网文[2010]197号</p>
</footer>
<!--JS-->

<script type="text/javascript" src="/include/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/Public/home/base/js/base.js"></script>
<script type="text/javascript" src="/include/simpleWindow/js/simpleWindow.js"></script>
<script type="text/javascript" src="/include/doMove.js"></script>
<!--Juqeryui-->
<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
<script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script type="text/javascript">
    //IE不兼容
//    var WG= WG();
    /*提示
     * */
    $(function() {
        $( document ).tooltip({
            position: {
                my: "center bottom-10",
                at: "center top"
            }
        });
    });
</script>

    <script type="text/javascript" src="/Public/home/Index/index.js" ></script>
    <!--幻灯片-->
    <link rel="stylesheet" href="/include/huandengpian/index.css">
    <script type="text/javascript" src="/include/huandengpian/index.js" ></script>
    <!--好友列表-->
    <link rel="stylesheet" href="/include/ul/index.css">
    <script type="text/javascript" src="/include/ul/index.js" ></script>


</body>
</html>