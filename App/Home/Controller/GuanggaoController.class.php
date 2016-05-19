<?php
namespace Home\Controller;
use Think\Controller;
class GuanggaoController extends Controller {
    public function index(){
        $guanggao=M("sk_guanggao");
        $result=$guanggao->select();
//        print_r($result);
        if ($result){
            $this->assign("guanggao",$result);
        }
        $this->display();
    }
}