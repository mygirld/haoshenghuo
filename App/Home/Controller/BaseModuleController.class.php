<?php
namespace Home\Controller;
use Think\Controller;
class BaseModuleController extends Controller {
    public function create(){
        $this->display();
    }
}