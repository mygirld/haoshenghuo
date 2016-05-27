/*创建新的计划项
* */
var add=$(".add");
add.i=1;
add.on("click",function () {
    add.i++;
    var str=' <div class="title"> <span>第'+add.i+'步</span> <input type="text" class="input" placeholder="你的计划是什么" title="这是日记的标题"> <span>日期</span> <input type="text" class="datepicker"> </div>';
    $(this).parent().before(str);
    $('#edit .nav').animate({scrollTop:10000000});
    var i=parseInt(add.i/10);
    switch (i){
        //1-9
        case 0:
            console.log(add.i);
            break;
        //100-1000
        case 10:
            $(this).parent().prev('.title').width("462px");
            break;
        case 100:
            $(this).parent().prev('.title').width("468px");
            break;
        //10-100
        default:
            $(this).parent().prev('.title').width("456px");
    }
});
//测试
// window.setInterval(function () {
//     add.click();
// },500);