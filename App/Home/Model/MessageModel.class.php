<?php
//自定义Modle类
namespace Home\Model;
use Think\Model;

class MessageModel extends Model{
    protected $trueTableName = 'sp_user';

    /*给手机发送短信
     * 使用的是http://apistore.baidu.com/apiworks/servicedetail/1018.html 平台进行短信发送
     *  return:
     *
     *      0 成功
     *      -1 发送验证码失败
     * */
    public function sendMessage($phoneNumber){
        header("Content-Type:text/html;charset=utf-8");
        $ch = curl_init();
        $rand=mt_rand(100000,999999);
        $mobile=$phoneNumber;
        $message="【搜课】您的验证码是：".$rand;
        $url = 'http://apis.baidu.com/kingtto_media/106sms/106sms?mobile='.$mobile.'&content='.$message.'&tag=2';
        $header = array(
            'apikey: 1237205b706c9c41460ffecf6c6d1d6e',
        );

        // 添加apikey到header
        curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 执行HTTP请求
        curl_setopt($ch , CURLOPT_URL , $url);
        $res = curl_exec($ch);
        $res=json_decode($res);
        if ($res->returnstatus=='Success'){
            //创建文件，这个会产生很多临时文件，因此，要有一个crontable定时去清理
            // 这个文件的文件名是手机号，文件内容是验证码
            $filePath=dirname(APP_PATH ).'/Public/tempFile/'.$mobile;
            file_put_contents($filePath,$rand);
            $response=array(
                "returnStatus"=>0,
                "returnMessage"=>'ok'
            );
            echo json_encode($response);
        }
        if ($res->returnstatus=='Faild'){
            $response=array(
                "returnStatus"=>-1,
                "returnMessage"=>'false'
            );
            echo json_encode($response);
        }
    }
}