$(function() {
    $.datepicker.regional["zh-CN"] = {
        closeText: "关闭",
        prevText: "&#x3c;上月",
        nextText: "下月&#x3e;",
        currentText: "今天",
        monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"], monthNamesShort: ["一", "二", "三", "四", "五", "六", "七", "八", "九", "十", "十一", "十二"], dayNames: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],
        dayNamesShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六"],
        dayNamesMin: ["日", "一", "二", "三", "四", "五", "六"],
        weekHeader: "周", dateFormat: "yy-mm-dd", firstDay: 1, isRTL: !1, showMonthAfterYear: !0, yearSuffix: "年"
    }
    $.datepicker.setDefaults($.datepicker.regional["zh-CN"]);
    var datePicker = $( "#datepicker" ).datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        changeYear: true
    });
    /*自动选择今日
     * */
    $.datepicker._gotoToday = function (id) {
        $(id).datepicker('setDate', new Date()).datepicker('hide').blur();
    };
    $.datepicker._gotoToday("#datepicker");
});
KindEditor.ready(function(K) {
    window.editor = K.create('#editor_id',{
        width:"100%",
        height:"500px",
        items : [
            'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
            'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
            'insertunorderedlist', '|','image'],
        filterMode:false,
        resizeType:2
    });
});
//想要编辑的时候清空
$(".ke-edit-iframe  ").on("click",function () {
    html = editor.html("");
});
//保存
$(".title .save").on("click",function () {
    // html = editor.html("");//
    editor.sync();
    var data={
        "title":$(".title #title").val(),
        "date":$(".title #datepicker").val(),
        "weather":$(".title select option:selected").text(),
        "content":$('#editor_id').val(),
        'userName':sessionStorage.sk_userName?sessionStorage.sk_userName:localStorage.sk_userName
    }
    $.ajax({
        url: 'http://www.haoshenghuo.com/index.php/home/Jour/queryCreate',
        data:data,
        type:"POST",
        dataType:"json",
        error:function () {
            alert("系统繁忙，请稍候再试");
        },
        success:function (res) {
            alert(res);
            location.href='';
        }
    })
});
