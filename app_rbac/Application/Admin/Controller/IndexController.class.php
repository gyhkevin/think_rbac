<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {



    public function index(){
      $this->assign("title","后台管理系统");
      $this->display();
    }


}