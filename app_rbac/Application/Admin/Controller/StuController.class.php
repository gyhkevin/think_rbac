<?php 
	namespace Admin\Controller;
	use Think\Controller;

	class StuController extends CommonController{
		//属性 保存数据库操作对象
		private $db = null;


		//初始化方法
		public function _initialize(){
			parent::_initialize();

		

			$this->db = M('s13.stu',"");
		}

		/**
         * 首页 操作
		*/
		public function index(){
			
			//查询数据
			$data = $this->db->select();


			//分配变量
			$this->assign('list',$data);

			//加载模板  控制器/操作
			$this->display("Stu/index");
		}



		//执行添加操作
		public function insert(){

			//数据初始化 数据创建
			$this->db->create();

			//$this->db->data($_POST);
			if($this->db->add() > 0){
			//if($this->db->data($_POST)->add() > 0){

				$this->success("恭喜您，添加成功！",U('Stu/index'));
			}else{

				$this->error("恭喜您，添加失败");
			}
		}


		//删除操作
		public function del(){

			if($this->db->where("id={$_GET['id']}")->delete() > 0){

				$this->success("恭喜您，删除成功！",U('Stu/index'));
			}else{

				$this->error("恭喜您，删除失败",U('Stu/index'));
			}
		}


		//加载 编辑模板
		public function edit(){

			$data = $this->db->find($_GET['id']);

			//分配变量
			$this->assign("data",$data);

			//加载 模板
			$this->display();
		}


		//执行修改
		public function save(){

			if($this->db->save($_POST) > 0){

				$this->success("恭喜您，修改成功！",U('Stu/index'));
			}else{

				$this->error("恭喜您，修改失败");
			}
		}


		/**
         *  自动获得路径
		*/
		public function getURL(){
			echo "<meta charset=utf8>";

			echo U("Index/index")."<br>";
			echo U("add")."<br>";
			echo U("BBS/Menu/add")."<br>";

			echo "<hr>";
		//	echo "传递参数：".U("BBS/Menu/add/id/123")."<br>";
			echo "传递参数：".U("Menu/add?id=123&name=xiaocuicui")."<br>";
			echo "传递参数：".U("add?id=123&name=xiaocuicui")."<br>";
			echo "传递参数：".U("Stu/add",array('id'=>123,'name'=>'yanyan'))."<br>";
		}
	}

 ?>