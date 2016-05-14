/**
 * Created by Administrator on 2016/5/10.
 */
backChange();
function backChange() {
    var main =$(".main")[0];
    var right=$(".right")[0];
    var red=0;
    var green=0;
    var blue=0;
    var rgb='';
    window.setInterval(function () {
        rgb="rgb("+red+","+green+","+blue+")";
        if(right ){
            main.style.backgroundColor=rgb;//"rgb("+red+","+green+","+blue+",)";
        }

        if(right ){
            right.style.backgroundColor=rgb;//"rgb("+red+","+green+","+blue+",)";
        }

        red=red+2;
        green=green+1;
        blue=blue+5;
        if (red>255){
            red=0
        }
        if (green>255){
            green=0
        }
        if (blue>255){
            blue=0
        }
        console.log(rgb);
    },100);
}