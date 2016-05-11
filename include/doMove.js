/*往前
 * obj 执行动画的DOM，
 * attr
 * dir 当前的位置小于目标点，就是正，否则，就是负值。总之，会移动到目标位置
 * target 距离
 * */
function doMove(obj,attr, dir, target,endFn) {
    dir=parseInt(getStyle(obj,attr)) < target? dir:-dir;
    window.clearInterval(obj.timer);
    obj.timer=window.setInterval(function () {
        obj.distance=parseInt(getStyle(obj,attr))+dir;
        //往前走,超过边界
        if ( obj.distance > target && dir >0){
            obj.distance=target;
        }
        //往后走，超过边界
        if ( obj.distance <  target && dir < 0){
            obj.distance=target;
        }
        obj.style[attr]= obj.distance+'px';
        //回事定时器资源
        if (obj.distance == target){
            window.clearInterval(obj.timer);
            endFn && endFn();
        }
    },14);
}
//获取属性
function getStyle(obj, attr) {
    return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj,'')[attr];
}