<?php
namespace Home\Controller;
use Think\Controller;
class JourController extends Controller {
    public function create(){
        session_start();
        if($_SESSION['userName']){
            //日记列表
            $jourModel=D("Jour");
            $jourList=$jourModel->selectJourList($_POST);
            $this->assign('jourList',$jourList);
            //用户名
            $this->assign('userName',$_SESSION['userName']);

            $this->display();
        }else{
            header("Location:http://www.haoshenghuo.com");
        }
    }
    public function queryCreate(){
        $jourModel=D("Jour");
        $jourModel->create($_POST);
    }
    public function selectJourList(){
        $jourModel=D("Jour");
        echo "<pre>";
        print_r($jourModel->selectJourList($_POST));
    }
}