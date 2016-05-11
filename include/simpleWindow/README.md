# simpleWindow
一个简单的弹窗（a simple window）

##简介
这是一个简单的浏览器弹窗程序，适用于登录、注册等弹窗程序。
##依赖
本项目依赖于jquery 1.x.x版本
##使用方法
第一步：引入 css,js文件
第二部,html页面添加以下代码：
```
<input type="button" name="" class="window-button" target='myWindow' value="弹出" />
<!--window-->
<div class="window" name='myWindow'>
	<!--dialog-->
    <div class="window-dialog">
    	<!--header-->
        <div class="window-dialog-header">
            <span class="window-dialog-header-close">×</span>
            <p>头部</p>
        </div>
        <!--body-->
        <div class="window-dialog-body">主体</div>
        <!--footer-->
        <div class="window-dialog-footer">底部</div>
    </div>
</div>
<!--滤镜背景-->
<div class="filter"></div>
```
