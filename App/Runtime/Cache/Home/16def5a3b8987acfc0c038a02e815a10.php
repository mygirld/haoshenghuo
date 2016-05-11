<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>好生活</title>
    <title>Document</title>
    <!--CSS-->
    <link rel="stylesheet" href="/include/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/home/base/css/base.css">
    <link rel="stylesheet" href="/include/simpleWindow/css/simpleWindow.css">
    
    <link rel="stylesheet" href="/Public/home/User/login/index.css">

</head>
<body>
<div id="container">
    <div class="header">
        <div id="logo"></div>
        <ul class="index">
            <li><a href="http://www.haoshenghuo.com">主页</a></li><li><a href="http://www.haoshenghuo.com">日记</a></li><li><a href="">计划</a></li><li><a href="">重要事件</a></li><li><a href="">时间仓</a></li>
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
                <p>请填写登录信息</p>
            </div>
            <div class="set_main">
                <form class="form-horizontal" style="margin: 40px 303px;">
                    <div class="form-group">
                        <label for="phone-num" class="col-sm-2 control-label" >手机号</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone-num" placeholder="手机号">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label" >登录密码</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="password" placeholder="登录密码">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" id="submit-save" class="btn btn-primary">登录</button>
                            <a href="#" class="window-button" target='myWindow' style="position: absolute;right: 10px;top: 8px;    font-size: 12px;color: #42cab0;">忘记密码了?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--window 忘记密码-->
    <div class="window myWindow" >
    <!--dialog-->
    <div class="window-dialog">
    <!--header-->
    <div class="window-dialog-header">
    <span class="window-dialog-header-close">×</span>
    <p style="    height: 30px;line-height: 42px;margin-left: 20px;">找回密码</p>
    </div>
    <!--body-->
    <div class="window-dialog-body">
        <form class="form-horizontal" style="padding-top: 20px;padding-left: 90px;">
            <div class="form-group">
                <label for="phone-num" class="col-sm-2 control-label" >手机号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone-num" placeholder="手机号" style=" display: inline-block;
    width: 200px;  ">
                    <button type="submit" id="submit-save" class="btn btn-primary" style="    position: relative;
    top: -1px;">获取验证码</button>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label" > </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" placeholder="验证码" style=" display: inline-block;
    width: 200px;  ">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" id="submit-save" class="btn btn-primary">登录</button>
                </div>
            </div>
        </form>
    </div>
    <!--footer-->
    <!--<div class="window-dialog-footer">SSSSSSSSSSSSS</div>-->
    </div>
    </div>
    <!--滤镜背景-->
    <div class="filter"></div>

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