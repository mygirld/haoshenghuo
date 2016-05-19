/**
 * Created by Administrator on 2016/5/10.
 */
// backChange();
function backChange() {
    var main =$(".main")[0];
    var right=$(".right")[0];
    var red=0;
    var green=0;
    var blue=0;
    var rgb='';
    // window.setInterval(function () {
    //     rgb="rgb("+red+","+green+","+blue+")";
    //     if(right ){
    //         main.style.backgroundColor=rgb;//"rgb("+red+","+green+","+blue+",)";
    //     }
    //     if(right ){
    //         right.style.backgroundColor=rgb;//"rgb("+red+","+green+","+blue+",)";
    //     }
    //     red=red+2;
    //     green=green+1;
    //     blue=blue+5;
    //     if (red>255){
    //         red=0
    //     }
    //     if (green>255){
    //         green=0
    //     }
    //     if (blue>255){
    //         blue=0
    //     }
    //     console.log(rgb);
    // },100);
}

$(".play").click(function () {
    $(this).toggleClass('on');
    if ( $(this).hasClass("on") ){
        $(this).html("&#xe61c;");
        //其他

    }else{
        $(this).html(" &#xe606;");
        //其他
    }
})
$(".music .prev").on("click",function () {
    alert("上一首");
});
$(".music .next").on("click",function () {
    alert("下一首");
})
 
$('.music-list-button').on("click",function () {
    $(this).toggleClass('active');
    if($(this).hasClass('active')){
        $(".music-list").fadeIn();
    }else {
        $(".music-list").fadeOut();
    }
});
$('.loop').on("click",function () {
    $(this).toggleClass('active');
})

$(".music").on("mouseover",function () {
    $(this).find(".toolbar").fadeIn();
    // $(this).find(".tool").fadeIn();
});
$(".music").on("mouseleave",function () {
    $(this).find(".toolbar").fadeOut();
    $(this).find(".music-list").fadeOut();
    // $(this).find(".tool").fadeOut();
});

var aWord=$(".music .music-words p");
console.log(parseInt(getStyle(aWord[1],'top')));

//歌曲的时间长度=60 常量
//播放比例是120px   变化
//长度 自己规定的
//   当前播放比例=长度X（当前时间/总时间）
//播放百分比函数
function palyPercent() {
    return 20/100;
}
// window.setInterval(function () {
//     for(var i=0;i<aWord.length;i++){
//         console.log(aWord[i].style.top= parseInt(getStyle(aWord[i],'top'))-1+"px");
//         if (-parseInt(getStyle(aWord[i],'top'))>= parseInt(getStyle($(".music-words")[0],'height'))){
//             aWord[i].style.top="0px";
//         }
//     }
// },50);


function Fkey(){
    var WsShell = new ActiveXObject('WScript.Shell')
    WsShell.SendKeys('{F11}');
}
Fkey();
 
