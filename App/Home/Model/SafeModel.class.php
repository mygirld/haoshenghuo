<?php
//自定义Modle类
namespace Home\Model;
use Think\Model;

class SafeModel extends Model{
    protected $trueTableName = 'sp_user';

    /*手机归属地查询
     * 使用的是API Satore的API，所以需要联网才能使用
     * return object ,手机号码合法errNum属性值为0，否则为-1。retMsg属性包含错误信息
     * */
    public function phoneNumberExits($arr){
        $ch = curl_init();
        $url = 'http://apis.baidu.com/apistore/mobilenumber/mobilenumber?phone='.$arr['phoneNumber'];
        $header = array(
            'apikey: 1237205b706c9c41460ffecf6c6d1d6e',
        );
        // 添加apikey到header
        curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);
        $res = curl_exec($ch);

        return json_decode($res);
    }

    /*发送手机短信
     * */
    public function sendMSG(){

    }
}