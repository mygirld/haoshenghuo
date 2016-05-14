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
            <li><a href="/index.php/Home/User/login">登录</a></li><li><a href="/index.php/Home/User/register">注册</a></li>
        </ul>
    </div>
    <!--主题内容main-->
    
    <div class="main">
        <div class="left">
            <div class="block"></div>
        </div>
        <div id="edit">
            <div class="nav">
                <ul>
                    <li><a href="" class="active" >日志</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="">计划</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="">重要事件</a></li>
                    <li class="b"><span></span></li>
                    <li><a href="">时间仓</a></li>
                </ul>
               <div class="title">
                   <input type="text" id="input" placeholder="标题">
                   <a>天气</a>
                   <input type="radio" name="q"> 晴
                   <input type="radio" name="q"> 阴
                   <input type="radio" name="q"> 多云
               </div>
            </div>
            <textarea id="editor_id" name="content" style="background-color: #00b7ee">
                &lt;strong&gt;HTML内容&lt;/strong&gt;
            </textarea>
            <div class="nav"></div>
        </div>
    </div>

    <div id="website-tool">
        <ul>
            <li><span class="iconfont back-to-top" >&#xe613;</span></li>
            <li><a href="/index.php/Home/Jour/create"><span class="iconfont create-jour" >&#xe615;</span></a></li>
            <li><a href="/index.php/Home/Plan/create"><span class="iconfont create-jour" >&#xe614;</span></a></li>
        </ul>
    </div>
</div>
<footer>
    <p>©2016 haoshenghuo 使用haoshenghuo必读 文网文[2010]197号</p>
</footer>
<!--JS-->

<script type="text/javascript" src="/include/jquery.min.js"></script>
<script type="text/javascript" src="/Public/home/base/js/base.js"></script>
<script type="text/javascript" src="/include/jquery.min.js"></script>
<script type="text/javascript" src="/include/simpleWindow/js/simpleWindow.js"></script>
<script type="text/javascript" src="/include/doMove.js"></script>
<script type="text/javascript">
    //IE不兼容
//    var WG= WG();
</script>

    <script charset="utf-8" src="/include/kindeditor/kindeditor.js"></script>
    <!--<script charset="utf-8" src="/include/kindeditor/lang/zh-CN.js"></script>-->
    <script>
        KindEditor.ready(function(K) {
            //创建编辑器
            //#editor_id 是选择器，满足各种css选择器，如果选择到多个textarea,那么只是第一个有效
            //第二个参数是选项
            window.editor = K.create('#editor_id',{
                width:"100%",
                height:"500px",
                items:[
                    'source', '|', 'undo', 'redo'
                ],
//                langType : 'zh-CN',
                filterMode:false,
                //编辑html模式
//                wellFormatMode:true,
                //指定主题风格，可设置”default”、”simple”，指定simple时需要引入simple.css。
                //是否可以拖到变化大小
                //2或1或0，2时可以拖动改变宽度和高度，1时只能改变高度，0时不能拖动。
                resizeType:0
//                themeType : 'default',
                //是否可以编辑 默认是true，可以编辑
//                designMode:false
                //有问题
//                fullscreenMode:true
                //undo/redo文字输入最小变化长度，当输入的文字变化小于这个长度时不会添加到undo记录里。
                //就是说，当前一次保存的输入字符和这次相比小于5的时候，重复和撤销操作无效
                //有问题
//                minChangeSize:5,
                //uploadJson
                //指定上传文件的服务器端程序。

            });
             // 设置HTML内容
            editor.html('HTML内水水水水水水水水容');
            // 取得HTML内容
            html = editor.html();

            // 同步数据后可以直接取得textarea的value
            //KindEditor的可视化操作在新创建的iframe上执行，代码模式下的textarea框也是新创建的，
            // 所以最后提交前需要执行 sync() 将HTML数据设置到原来的textarea。
            //KindEditor在默认情况下自动寻找textarea所属的form元素，找到form后onsubmit事件里添加sync函数，所以用form方式提交数据，
            // 不需要手动执行sync()函数。
            //KindEditor默认采用白名单过滤方式，可用 htmlTags 参数定义要保留的标签和属性。当然也可以用 filterMode 参数关闭过滤模式，
            // 保留所有标签。
            editor.sync();
            value = document.getElementById('editor_id').value; // 原生API

            //            html = K('#editor_id').val(); // KindEditor Node API
            //            html = $('#editor_id').val(); // jQuery
        });
    </script>


</body>
</html>