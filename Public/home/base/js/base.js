(function (window) {
    var haoshenghuo=function () {
        return haoshenghuo.fn.init();
    };
    haoshenghuo.fn = haoshenghuo.prototype = {
        //初始化方法
        init:function () {
          
        },
        //站点基础地址
        base:{
            baseRoot:'',
            baseModule:'',
            baseController:'',
        },
        //ajax参数
        ajax:{
            ajaxUrl:'',
            ajaxType:'',
            ajaxDataType:'',
            ajaxData:null,
            ajaxError:null,
            ajaxSuccess:null,
        },
        //用户相关
        user:{
            userId:'',
            userName:''
        },
    };
    if(window && window.document){
        return window.WG=haoshenghuo;
    }
})(window);

$(function(){
    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    $(function () {
        $(window).scroll(function(){
            var windowPos=parseInt($(window).scrollTop());
            console.log(windowPos);
            if (windowPos>100 ){
                $("#website-tool").fadeIn(1500);
            }else {
                $("#website-tool").fadeOut(1500);
            }
        });
        //当点击跳转链接后，回到页面顶部位置
        $(".back-to-top").click(function(){
            $('body,html').animate({scrollTop:0});
            return false;
        });
    });
});