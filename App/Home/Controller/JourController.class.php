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
    public function selectJourContent(){
        $jourId=$_GET['jourId'];
        session_start();
        if($_SESSION['userName']){
            //日记列表
            $jourModel=D("Jour");
            $jourList=$jourModel->selectJourList($_POST);
            $selectJourContent=$jourModel->selectJourContent($jourId);
            $selectJourContent[0]['contentFile'];
            $this->assign('jourList',$jourList);
            $this->assign('userName',$_SESSION['userName']);
            $this->assign('selectJourContent', $selectJourContent);
            $this->assign('contentfile',file_get_contents($selectJourContent[0]['contentfile']));
//            print_r(file_get_contents($selectJourContent[0]['contentfile']));
            

//            print_r($jourModel->selectJourContent($jourId) );
            $this->display();
        }else{
            header("Location:http://www.haoshenghuo.com");
        }
    }
}