<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	private $theme = null; //主题

	public function _initialize(){

		//读取 数据库中配置
		 $theme = M('config')->getFieldByName('DEFAULT_THEME','value');

		 $this->theme = $theme;

		 //动态修改配置文件
	//	 echo C('DEFAULT_THEME')."<br>";
		// C("DEFAULT_THEME",$theme);

		 // echo C('DEFAULT_THEME')."<br>";


		 //另一种配置设置方式
		  $theme = M('config')->where("name='DEFAULT_THEME'")->getField("name,value");
		 // var_dump($theme);
		  C($theme);

	}

    public function index(){
    	$this->assign('title',"首页");
    	//$this->theme($this->theme)->display();
    	$this->display();
    }


    public function add(){

    	echo "Home IndexContrlller add";

    }

    public function getParam(){
    	$this->assign('title','给模板分配变量');

    	$this->username = "hello，翠翠，我宣你";


    	echo "模板路径：".T('Index/getParam')."<br>";
    	echo "模板路径：".T('Admin@Index/getParam')."<br>";
    	echo "<hr>";
    	//批量 分配
    	$data = array(
    			'content'=>"hello,我宣你，你造吗,翠翠",
    			'age'=>18,
    		);

    	$this->assign($data);


    	echo $this->fetch();

    	//加载模板
    	//$this->display("Index:index","utf-8","text/xml");
    //	$this->display("Admin@Stu:add");
    	//$this->display("");
    	//$this->display("./Application/Admin/View/Stu/add.html");
    }



    //模板 变量输出操作
    public function template(){
    	echo "当前模块:".MODULE_NAME."<br>";
    	echo __APP__."<hr>";
    	echo __ROOT__."<hr>";
    	echo "<hr>";

    	$_SESSION['username'] = "admin";

    	$this->assign('title',"模板变量");
    	$this->assign('content','hello,iloveyou shanghai1 cuiuic');

    	$this->display();
    }
}