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
        WG.checkAccount(account.value);
        WG.checkPasswo(password.value);
        alert(remenber.checked);
        return false;
    });
    $(getVrifyCode).on('click',function () {
        alert(targetAccount.value);
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
    alert(account);
}
//验证密码
WG.checkPasswo=function (password) {
    alert(password);
}
/*
 * IE,6,7,8的获取元素和绑定事件方式跟标准不一样
 * */