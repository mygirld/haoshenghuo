//站点对象是否存在，如不存在就new一个
// var WG= WG?WG:new WG();
var WG={};
/*登录
* */
var account=$('#account')[0];
var password=$('#password')[0];
var remenber=$('#remenber')[0];
var submit=$('#submit')[0];
/*找回密码
* */
var targetAccount=$('#target-account')[0];
var verifyCode=$('#verify-code')[0];
var getVrifyCode=$('#get-verify-code')[0];
var conformSubmit=$('#conform-submit')[0];

window.onload=function () {
    $(submit).on('click',function () {
        // WG.checkAccount(account.value);
        // WG.checkPasswo(password.value);
        // alert(remenber.checked);
        var data={
            "phoneNumber":account.value,
            "password":password.value
        };
        $.ajax({
            url: 'http://www.haoshenghuo.com/index.php/Home/User/queryLogin',
            data:data,
            type:"POST",
            dataType:"json",
            error:function () {
                alert("系统繁忙，请稍候再试");
            },
            success:function (res) {
                //登录失败
                if(window.parseInt(res.status) ==-1 ){
                    alert(res.errMSG);
                }
                //登录成功
                if(window.parseInt(res.status) ==0 ){
                    //永久登录
                    if(remenber.checked){
                        if (localStorage){
                            localStorage.sk_userName=res.userName;
                            localStorage.sk_token=res.token;
                        }
                    }else{
                        //将用户名和token放在,临时存储
                        sessionStorage.sk_userName=res.userName;
                        sessionStorage.sk_token=res.token;
                    }
                    window.location.href="http://www.haoshenghuo.com/";
                }
            }
        })
        return false;
    });
    $(getVrifyCode).on('click',function () {
        getVrifyCode.i=60;
        window.clearInterval(getVrifyCode.timer);
        getVrifyCode.timer=window.setInterval(function () {
            getVrifyCode.i--;
            if( getVrifyCode.i <=0){
                $(getVrifyCode).html("获取验证码");
                window.clearInterval(getVrifyCode.timer);
            }else{
                $(getVrifyCode).html('('+getVrifyCode.i+')');
            }
        },100);
        var data={
            "targetAccounValuet":targetAccount.value
        };
        $.ajax({
            url: 'http://www.haoshenghuo.com/index.php/home/User/sendMessage',
            data:data,
            type:"POST",
            dataType:"json",
            error:function () {
                alert("系统繁忙，请稍候再试");
            },
            success:function (res) {
                // 失败
                if(window.parseInt(res.returnStatus) ==-1 ){
                    alert(res.returnMessage);
                }
                // 成功
                if(window.parseInt(res.returnStatus) ==0 ){
                    alert(res.returnStatus);
                }
            }
        })
        return false;
    });
    $(conformSubmit).on('click',function () {
        alert(targetAccount.value);
        alert(verifyCode.value);
        return false;
    });
};
//验证手机号码
WG.checkAccount=function (account) {
    // alert(account);
}
//验证密码
WG.checkPasswo=function (password) {
    alert(password);
}
/*
 * IE,6,7,8的获取元素和绑定事件方式跟标准不一样
 * */