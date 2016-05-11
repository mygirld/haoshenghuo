<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QQ好友列表</title>
    <link rel="stylesheet" href="/include/simpleWindow/css/simpleWindow.css">
    <style type="text/css" rel="stylesheet">
        li{  list-style:none;}
        ul{margin: 0;padding: 0}
        .chat{
            position: fixed;
            top: 50px;
            right:0px;
            border: 1px solid #42cab0;
            background-color: #FFFFFF;
            width: 200px;
        }
        .chat .tool{
            overflow: hidden;
            border-bottom: 1px solid #42cab0;
        }
        .chat .tool img{
            width:100%;
            height: 150px;
        }
        .chat .tool p{
            text-align: center;
            height: 30px;
            line-height: 30px;
        }
        #ul a.title{
            height: 30px;
            line-height: 30px;
            text-align: left;
            font-size: 18px;
            background-image: url("/Public/home/Chat/images/ico1.gif");
            background-repeat: no-repeat;
            background-position: 10px 50%;
            padding-left: 30px;
            /*padding-right: 100px;*/
            margin: 0px;
            display: block;
        }
        #ul a.title:hover{
            cursor: pointer;
            background-color: #42cab0;
            color: #FFFFFF;
        }
        #ul a.active{
            background-image: url("/Public/home/Chat/images/ico2.gif");
        }
        #ul ul{display: none}
        #ul ul.open{display: block}
        #ul ul li{
            height: 24px;
            line-height: 24px;
            text-indent: 30px;
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #ffffff;
        }
        #ul ul li:hover{
            border-top: 1px solid #dddddd;
            border-bottom: 1px solid #dddddd;
            cursor: pointer;
        }
        #ul ul li.active{
            border-top: 1px solid #dddddd;
            border-bottom: 1px solid #dddddd;
        }

    </style>
</head>
<body>
<div class="chat">
    <div class="tool">
        <img src="/Public/home/base/images/2.jpg" alt="">
        <p>用户名</p>
    </div>

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

<!--<input type="button" name="" class="window-button" target='myWindow' value="弹出" />-->
<!--&lt;!&ndash;window&ndash;&gt;-->
<!--<div class="window myWindow" >-->
    <!--&lt;!&ndash;dialog&ndash;&gt;-->
    <!--<div class="window-dialog">-->
        <!--&lt;!&ndash;header&ndash;&gt;-->
        <!--<div class="window-dialog-header">-->
            <!--<span class="window-dialog-header-close">×</span>-->
            <!--<p>hhhhhhhhhhhhhh</p>-->
        <!--</div>-->
        <!--&lt;!&ndash;body&ndash;&gt;-->
        <!--<div class="window-dialog-body">SSSSSSSS</div>-->
        <!--&lt;!&ndash;footer&ndash;&gt;-->
        <!--<div class="window-dialog-footer">SSSSSSSSSSSSS</div>-->
    <!--</div>-->
<!--</div>-->
<!--滤镜背景-->
<!--<div class="filter"></div>-->
<script type="text/javascript" src="/include/jquery.min.js"></script>
<script type="text/javascript" src="/include/simpleWindow/js/simpleWindow.js"></script>
<script type="text/javascript">
    var oUl=document.getElementById('ul');
    var aTitle=oUl.getElementsByTagName('a');
    var aUl=oUl.getElementsByTagName('ul');
    var aLi=null;
    var arrLi=[];
    //绑定标题栏的东西
    for(var i=0;i<aTitle.length;i++){
        aTitle[i].index=i;
        aTitle[i].onclick=function () {
            if(this.className=='title'){
                this.className +=' active';
                aUl[this.index].className='open';
            }else{
                this.className='title';
                aUl[this.index].className='';
            }
            //所有爱他的分组关闭
            for(var j=0;j<aTitle.length;j++){
                if(j !=this.index){
                    aUl[j].className='';
                    aTitle[j].className='title';
                }
            }
        };
    }
    //将全部的内层Li放到arrLi
    for(var i=0;i<aUl.length;i++){
        aLi=aUl[i].getElementsByTagName('li');//每个分组的Li
        for(var j=0;j<aLi.length;j++){
            arrLi.push(aLi[j]);
        }
    }
    //给所有的内层Li绑定事件
    for(var i=0;i<arrLi.length;i++){
        arrLi[i].onclick=function () {
            for(var j=0;j<arrLi.length;j++){
                arrLi[j].className='';
            }
            this.className='active';
        }
    }
</script>
</body>
</html>