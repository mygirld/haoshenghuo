<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        $this->display();
    }
    public function queryLogin(){
        $userModel=D("User");
        $arr=$_POST;
        if($userModel->login($arr) == 0){
            $_SESSION['status']=0;
            $_SESSION['errMSG']="";
            echo json_encode($_SESSION);
        }else{
            $_SESSION['status']=-1;
            $_SESSION['errMSG']="账号不合法或者密码错误";
            echo json_encode($_SESSION);
        }
    }
    /*发送
     * */
    public function sendMessage(){
        $MessageModel=D("Message");
//        $MessageModel->sendMessage("13205516161");
        echo json_encode(array("returnStatus"=>0));
    }
}