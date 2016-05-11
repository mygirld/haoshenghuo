/*抖函数
 * obj DOM对象
 * attr left 或者 top
 * endFn 回调函数
 * 注意，obj的attr不能是默认的，否则错误
 * */
function shake(obj,attr,endFn) {
    obj.pos=parseInt(getStyle(obj,attr));//注意，obj的attr不能是默认的，否则错误
    obj.num=0;
    obj.arr=[];
    for(var i=10;i>0;i -=1){
        obj.arr.push(i);
        obj.arr.push(-i);
    }
    obj.arr.push(0);

    window.clearInterval(obj.timer);
    obj.timer=window.setInterval(function () {
        obj.style[attr]=obj.pos+ obj.arr[ obj.num]+'px';
        obj.num++;
        //结束，重置
        if( obj.num== obj.arr.length){
            obj.num=0;
            window.clearInterval(obj.timer);
            endFn&& endFn();
        }
    },50);
}
//获取属性
function getStyle(obj, attr) {
    return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj,'')[attr];
}