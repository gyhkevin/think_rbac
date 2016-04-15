<?php 
	namespace Admin\Controller;
	use Think\Controller;

	class PublicController extends Controller{




		//验证码的操作
		public function verify(){
			$config = array(
					'length' => 4,
				);

			$Verify = new \Think\Verify($config);
			$Verify->entry();
		}


		//执行登陆
		public function dologin(){
			//验证码
			 $verify = new \Think\Verify();  
			 if(!$verify->check(I('code'))){
			 	//$this->error("验证码错误！",U('Public/login'));
			 }

			 //执行登陆
			 $admin = M("user");

			 $users = $admin->where(array('username'=>I('username')))->find();

			 if(!$users){
			 	$this->error("用户名不存在",U('Public/login'));
			 }

			 
			// var_dump(md5(I('pass')));
			 //var_dump($users);
			 
			 if($users['userpass'] != md5(I('pass'))){
			 	$this->error("密码错误",U('Public/login'));
			 }

			 //把登陆信息放到sesson
			 $_SESSION['admin_user'] = $users;





			 //根据用户id获取对应的节点信息
			//$sql = "select n.mname,n.aname from lamp_user u join lamp_user_role ur on u.id=ur.uid join lamp_role_node rn on ur.rid=rn.rid join lamp_node n on rn.nid=n.id where u.id={$users['id']}";
			//$list = M()->query($sql);

			$list = M('node')->field('mname,aname')->where('id in'.M('role_node')->field('nid')->where("rid in ".M('user_role')->field('rid')->where(array('uid'=>array('eq',$users['id'])))->buildSql())->select(false))->select();



			
			
			
			$nodelist = array();
			$nodelist['Index'] = array('index');
			//遍历重新拼装
			foreach($list as $v){
				$nodelist[$v['mname']][] = $v['aname'];
				//把修改和执行修改 添加和执行添加 拼装到一起
				if($v['aname']=="edit"){
					$nodelist[$v['mname']][]="save";
				}
				if($v['aname']=="add"){
					$nodelist[$v['mname']][]="doadd";
				}
			}

			
			

			//将权限信息放置到session中
			$_SESSION['admin_user']['nodelist'] = $nodelist;



			//V($_SESSION);
			//exit;






			//V($_SESSION);
			 $this->success("登陆成功！",U("Index/index"));

		}



		//执行退出
		public function logout(){

			//清除session
			unset($_SESSION['admin_user']);

			$this->redirect("Index/index");

		}

	}

 ?>