var oPrev=document.getElementById('prev');
var oNext=document.getElementById('next');
var oTitle=document.getElementById('title');
var oImg=document.getElementById('img');
var oUl=document.getElementById('oUl');
var aSelect=oUl.getElementsByTagName('a');
var oSmallUl=document.getElementById('oSmallUl');
var aSmallImg=oSmallUl.getElementsByTagName('img');
//数据
var arrUrl=['/include/huandengpian/img/1.png','/include/huandengpian/img/2.png','/include/huandengpian/img/3.png','/include/huandengpian/img/4.png'];
var arrText=['a','b','c','d'];
var num=0;

//生成按钮,缩略图
for(var i=0;i<arrUrl.length;i++){
    oUl.innerHTML+=' <a class="selected"></a>';
    oSmallUl.innerHTML+='<img  class="aSmallImg" />';
}
//初始化
init(num)
//按钮绑定
for(var i=0;i<aSelect.length;i++){
    aSelect[i].index=i;
    aSelect[i].onmouseover=function (event) {
        aSmallImg[this.index].src= arrUrl[this.index];
        aSmallImg[this.index].style.top=(event.clientY-75)+'px';
        aSmallImg[this.index].style.left=(event.clientX-50)+'px';
        aSmallImg[this.index].style.display='block';
    };
    aSelect[i].onmouseleave=function (event) {
        aSmallImg[this.index].style.display='none';
    }
    aSelect[i].onclick=function () {
        init(this.index);
    }
}
//上一张
oNext.onclick=function () {
    num++;
    if(num === aSelect.length){
        num=0;
    }
    init(num);
}
//下一张
oPrev.onclick=function () {
    num--;
    if(num === -1){
        num=aSelect.length-1;
    }
    init(num);
}

function init(num) {
    oTitle.innerHTML=arrText[num];
    oImg.src=arrUrl[num];
    oImg.parentNode.href=arrUrl[num];
    for(var i=0;i<aSelect.length;i++){
        aSelect[i].className='selected';
    }
    aSelect[num].className='selected active';
}
function toNexte() {
    window.setInterval(function () {
        oNext.onclick();
    },3000)
}
toNexte();
