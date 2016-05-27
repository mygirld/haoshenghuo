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
    
    <link rel="stylesheet" href="/Public/home/BaseModule/create/index.css">

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
                             *height:37px;line-height: 35px;padding-top: 0px;"
                    >保存</button>
                </div>
            </div>
            <div class="chat">
                <ul id="ul">
                    <li class="list">
                        <a class="title">日记</a>
                        <ul>
                            <li>小明</li>
                            <li>小白</li>
                            <li>小黑</li>
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
                    <li><a href="http://www.haoshenghuo.com">主页</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="http://www.haoshenghuo.com/index.php/Home/Jour/create" class="active" >日记</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="http://www.haoshenghuo.com/index.php/Home/Plan/create">计划</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="">重要事件</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="">时间仓</a></li>
                    <li><a href="http://www.haoshenghuo.com/index.php/Home/BaseModule/create">基础模块</a></li>
                </ul>
                    <div class="title">
                        <input type="text" id="title" placeholder="一句话概括今天的事情吧" title="这是日记的标题">
                        <span>日期</span>
                        <input type="text" id="datepicker">
                        <span>天气</span>
                        <select name="" id="">
                            <option value="">晴天</option>
                            <option value="">阴天</option>
                            <option value="">雾霾</option>
                            <option value="">暴雨</option>
                        </select>

                        <button type="submit"   class="btn btn-default"
                                style="position: absolute;right: 50px ;top: 6px;    height: 35px;
    line-height: 35px;
    padding-top: 0px;"

                        >保存</button>
                    </div>

            </div>
            <block name="sas">
                 <textarea id="editor_id" name="content" style="background-color: #00b7ee">
                    &nbsp; &nbsp;写点什么吧....
                 </textarea>
            
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

    <!--好友列表-->
    <link rel="stylesheet" href="/include/ul/index.css">
    <script type="text/javascript" src="/include/ul/index.js" ></script>
    <script>
        $(function() {
            $.datepicker.regional["zh-CN"] = {
                closeText: "关闭",
                prevText: "&#x3c;上月",
                nextText: "下月&#x3e;",
                currentText: "今天",
                monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"], monthNamesShort: ["一", "二", "三", "四", "五", "六", "七", "八", "九", "十", "十一", "十二"], dayNames: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],
                dayNamesShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六"],
                dayNamesMin: ["日", "一", "二", "三", "四", "五", "六"],
                weekHeader: "周", dateFormat: "yy-mm-dd", firstDay: 1, isRTL: !1, showMonthAfterYear: !0, yearSuffix: "年"
            }
            $.datepicker.setDefaults($.datepicker.regional["zh-CN"]);
            var datePicker = $( "#datepicker" ).datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                changeYear: true
            });
        });
    </script>
    <script charset="utf-8" src="/include/kindeditor/kindeditor.js"></script>
    <!--<script charset="utf-8" src="/include/kindeditor/lang/zh-CN.js"></script>-->
    <script>
        KindEditor.ready(function(K) {
            //创建编辑器
            window.editor = K.create('#editor_id',{
                width:"100%",
                height:"500px",
                items:[
                    'source', '|', 'undo', 'redo'
                ],
                filterMode:false,
                resizeType:0
            });
            html = editor.html();
            editor.sync();
            value = document.getElementById('editor_id').value; // 原生API
        });
    </script>


</body>
</html>