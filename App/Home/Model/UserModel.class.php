<?php
//自定义Modle类
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    protected $trueTableName = 'sp_user';

    /*修改用户信息
     *  return int :
     *      1 该用户名已经被使用
     *      2   成功
     *      3 该手机号码已经注册
     *      4   无修改
     * */
    public function editUserInfo($option){
//        return $option;
        //该用户名已经被使用
        $data=array(
          "userName"=>$option['userName']
        );
        if($this->where($data)->select()){
            return 1;
        }
        //该手机号已经注册
        $data=array(
            "phoneNumber"=>$option['phoneNumber']
        );
        if($this->where($data)->select()){
            return 3;
        }
        $sql="update sk_user set userName='".$option['userName']."',phoneNumber='".$option['phoneNumber']."' where userName='".$option['oldUserName']."'";
        if ($this->execute($sql)){
            return 2;
        }else{
            return 4;
        }
    }
//注册
    public function register($userInfo)
    {
        $data=array(
            "phoneNumber"=>$userInfo["phoneNumber"],
            "password"=>md5($userInfo["password"].md5('12aa4~!323aad434+)*(&(*&njksd')),
        );
        if($this->data($data)->add()){
            return  0;
        }else{
            return  -1;
        }

    }
    /*登录
     * 调用register接口
     * 登录成功后，生成一个$_SESSION['userName']放着用户名，$_SESSION[['token']放着令牌。这里的令牌用来实现永久登录
     * return inter  。成功返回0，失败返回-1。
     * */
    public  function login($userInfo){
        $SafeModel=D("Safe");
        $phoneInfo=$SafeModel->phoneNumberExits(array('phoneNumber'=>$userInfo['phoneNumber']));
        /*手机不合法
         * */
        if($phoneInfo->errNum==-1){
            return -1;
        }

        $sql="select * from sp_user WHERE phoneNumber='".$userInfo["phoneNumber"]."'";
        $result=$this->query($sql)[0];
        /*用户未注册，用户注册*/
        if(!$result){
           $this->register(array("phoneNumber"=>$userInfo["phoneNumber"],"password"=>$userInfo["password"]));
        }
        //登录
        $token=md5(rand(1,1000000));
        //检查用户密码
        $sql="select * from sp_user WHERE phoneNumber='".$userInfo["phoneNumber"]."'";
        $result=$this->query($sql)[0];
        //这个密码的封装取决于register方法中密码的封装
        if(md5($userInfo["password"].md5('12aa4~!323aad434+)*(&(*&njksd'))  ==  $result['password']){
            if($this->execute("update sp_user set userName='".$userInfo["phoneNumber"]."',token='".$token."',  isOnline=1")){
                //将用户名和本次登录令牌放入session
                $sql="select * from sp_user WHERE phoneNumber='".$userInfo["phoneNumber"]."'";
                $result=$this->query($sql)[0];
                session_start();
                $_SESSION['userName']=$result["username"];
                $_SESSION['token']=$token;
                return 0;
            }
        }else{
            //登录失败
            return -1;
        }
     }

    /*获取用户QQ
     * 1没有qq
     * 2 有qq
     * */
    public function getUserQQ($option){
        $data=array(
            'userName'=>$option['userName']
        );
        $result=$this->where($data)->field(array("qq"))->find();
        if ($result['qq']){
            return 2;
        }else{
            return 1;
        }
    }

    //修改用户的qq号码
    public function updateQQ($option){
        $sql="update sk_user set qq='".$option['qq']."' where userName='".$option['userName']."'";
        if ($this->execute($sql)){
            return 2;
        }else{
            return 1;
        }
    }
}