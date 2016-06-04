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
    
    <link rel="stylesheet" href="/Public/home/Jour/create/index.css">

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
            <li><a href="/index.php/Home/User/login">登录</a></li>
            <!--<li><a href="/index.php/Home/User/register">注册</a></li>-->
        </ul>
    </div>
    <!--主题内容main-->
    
    <div class="main">
        <div class="left">
            <div class="nav">
                <div class="tool" style="height: 70px">
                    <input type="text"
                           style   ="width: 130px;
    height: 33px;
    line-height: 33px;
    padding-left: 10px;
    position: absolute;
    top: 20px;
    left: 10px;
    border: 1px solid #ccc;
   "
                           placeholder="搜索" title="搜索">
                    <button type="submit" id="" class="btn btn-default"
                            style="position: absolute;right: 10px ;top: 20px;
                            height:35px;
                             *height:37px;
    line-height: 35px;
    padding-top: 0px;"

                >保存</button>
                </div>
            </div>
            <div class="chat">
                <ul id="ul">
                    <li class="list">
                        <a class="title">日记</a>
                        <ul>
                            <?php if(is_array($jourList)): foreach($jourList as $k=>$vo): ?><li><?php echo ($vo["date"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["title"]); ?></li><?php endforeach; endif; ?>
                        </ul>
                    </li>
                    <li class="list">
                        <a class="title">计划</a>
                        <ul>
                            <li>小明</li>
                            <li>小白</li>
                            <li>小黑</li>
                        </ul>
                    </li>
                    <li class="list">
                        <a class="title">重要事件</a>
                        <ul>
                            <li>小明</li>
                            <li>小白</li>
                            <li>小黑</li>
                        </ul>
                    </li>
                    <li class="list">
                        <a class="title">时间仓</a>
                        <ul>
                            <li>小明</li>
                            <li>小白</li>
                            <li>小黑</li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <div id="edit">
            <div class="nav">
                <ul>
                    <!--<li><a href="http://www.haoshenghuo.com">主页</a></li>-->
                    <li class="b"><span></span></li>
                    <li><a href="http://www.haoshenghuo.com/index.php/Home/Jour/create" class="active">日记</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="http://www.haoshenghuo.com/index.php/Home/Plan/create"   >计划</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="http://www.haoshenghuo.com/index.php/Home/ImportantEvent/create"  >重要事件</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="http://www.haoshenghuo.com/index.php/Home/TimeRestory/create">时间仓</a></li>
                    <li style="    float: none;
    position: absolute;
    right: 50px;"><a style="    border: 0px solid #A0A0A0; "><?php echo ($userName); ?></a></li>
                </ul>
                <div class="title">
                    <input type="text" id="title" placeholder="一句话概括今天的事情吧" title="这是日记的标题">
                    <span>日期</span>
                    <input type="text" id="datepicker">
                    <span>天气</span>
                    <select name="weather" >
                        <option value="">晴天</option>
                        <option value="">阴天</option>
                        <option value="">雾霾</option>
                        <option value="">暴雨</option>
                    </select>

                    <button type="submit"   class="btn btn-default save">保存</button>
                </div>
            </div>
            <textarea id="editor_id" name="content" style="background-color: #00b7ee">
               &nbsp; &nbsp;今天真是太棒了....
            </textarea>
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

    <!--编辑器插件-->
    <script charset="utf-8" src="/include/kindeditor/kindeditor.js"></script>
    <!--好友列表-->
    <link rel="stylesheet" href="/include/ul/index.css">
    <script type="text/javascript" src="/include/ul/index.js" ></script>
    <script type="text/javascript" src="/Public/home/Jour/create/index.js" ></script>




</body>
</html>