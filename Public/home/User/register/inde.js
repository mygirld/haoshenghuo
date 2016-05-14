//站点对象是否存在，如不存在就new一个
// var WG= WG?WG:new WG();
var WG={};
var account=$('#account')[0];
var password=$('#password')[0];
var confromPassword=$('#confrom-password')[0];
var submit=$('#submit')[0];
window.onload=function () {
    $(submit).on('click',function () {
        WG.checkAccount(account.value);
        WG.checkPasswo(password.value,confromPassword.value);
        return false;
    });
};
//验证手机号码
WG.checkAccount=function (account) {
    alert(account);
}
//验证密码
WG.checkPasswo=function (password,conformPassword) {
    alert(password+":"+conformPassword);
}