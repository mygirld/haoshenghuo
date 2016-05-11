//弹出窗口
$(".window-button").on("click",function(){
	var target='.'+$(this).attr('target');
	$(".filter").fadeIn();
	$(target).fadeIn();
});

//关闭当前窗口
$(".window-dialog-header-close").on("click",function(){
	$(this).parents(".window").fadeOut();
	$(".filter").fadeOut();
});
$(".window").on("click",function(event){
	　$(".window-dialog-header-close").click();
});
	
//阻止window-dialog事件冒泡到.window
$(".window-dialog").on("click",function(event){
	　event.stopPropagation();
});

 