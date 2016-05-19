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
    
    <link rel="stylesheet" href="/Public/home/User/register/index.css">

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
    
    <div class="main">
        <div class="layout account_main">
            <div class="title">
                <h3>注册</h3>
                <p>请填写注册的基本信息</p>
            </div>
            <div class="set_main">
                <form class="form-horizontal" style="margin: 40px 303px;">
                    <div class="form-group">
                        <label for="account" class="col-sm-2 control-label" >帐号</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="account" placeholder="手机号/ 邮箱">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label" >登录密码</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="password" placeholder="登录密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confrom-password" class="col-sm-2 control-label" >确认密码</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="confrom-password" placeholder="确认密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="/index.php/Home/User/login" style=" float: right; font-size: 12px;color: #42cab0;">已有帐号?</a>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" id="submit" class="btn btn-primary" style="width: 100%;margin-top:4px">注册</button>
                        </div>
                    </div>
                </form>
            </div>
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

    <script type="text/javascript" src="/Public/home/User/register/inde.js" ></script>


</body>
</html>