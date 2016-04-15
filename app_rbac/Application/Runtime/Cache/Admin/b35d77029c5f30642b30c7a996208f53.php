<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?></title>
<link href="/think_rbac/app_rbac/Public/Css/admin_style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript"> 
var $=function(id) {
   return document.getElementById(id);
}

function show_menu(num){
for(i=0;i<100;i++){
	if($('li0'+i)){
	$('li0'+i).style.display='none';
	$('f0'+i).className='';
	 }
}
	  $('li0'+num).style.display='block';//触发以后信息块
	  $('f0'+num).className='left02down01_xia_li';//触发以后TAG样式
}

function show_menuB(numB){
	for(j=0;j<100;j++){
		 if(j!=numB){
			if($('Bli0'+j)){
		  $('Bli0'+j).style.display='none';
		  $('Bf0'+j).style.background='url(/think_rbac/app_rbac/Public/images/01.gif)';
		}
		 }
	}
	if($('Bli0'+numB)){   
		if($('Bli0'+numB).style.display=='block'){
		  $('Bli0'+numB).style.display='none';
		 $('Bf0'+numB).style.background='url(/think_rbac/app_rbac/Public/images/01.gif)';
		}else {
		  $('Bli0'+numB).style.display='block';
		  $('Bf0'+numB).style.background='url(/think_rbac/app_rbac/Public/images/02.gif)';
		}
	}
}


var temp=0;
function show_menuC(){
		if (temp==0){
		 document.getElementById('LeftBox').style.display='none';
	  	 document.getElementById('RightBox').style.marginLeft='0';
		 document.getElementById('Mobile').style.background='url(/think_rbac/app_rbac/Public/images/center.gif)';

		 temp=1;
		}else{
		document.getElementById('RightBox').style.marginLeft='222px';
	   	document.getElementById('LeftBox').style.display='block';
		document.getElementById('Mobile').style.background='url(/think_rbac/app_rbac/Public/images/center0.gif)';

	   temp=0;
			}
	 }
</script>
</head>

<body>
<div class="header">
	<div class="header03"></div>
	<div class="header01"></div>
	<div class="header02">用户信息管理系统</div>
</div>
<div class="left" id="LeftBox">
	<div class="left01">
		<div class="left01_right"></div>
		<div class="left01_left"></div>
		<div class="left01_c">管理员：<?php echo ($_SESSION['admin_user']['username']); ?></div>
	</div>
	

	<div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">用户信息管理</div>
		</div>
	  	<div class="left02down">
			<div class="left02down01"><a  onclick="" href="<?php echo U('User/index');?>"><div id="Bf080" class="left02down01_img"></div>用户信息查询</a></div>
			
		    <div class="left02down01"><a onclick="" href="<?php echo U('User/add');?>">
		      <div id="Bf081" class="left02down01_img"></div>
		      添加用户信息</a></div>
			
		</div>
	</div>



	<div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">角色信息管理</div>
		</div>
	  	<div class="left02down">
			<div class="left02down01"><a  onclick="" href="<?php echo U('Role/index');?>"><div id="Bf080" class="left02down01_img"></div>角色信息查询</a></div>
			
		    <div class="left02down01"><a onclick="" href="<?php echo U('Role/add');?>">
		      <div id="Bf081" class="left02down01_img"></div>
		      添加角色信息</a></div>
			
		</div>
	</div>



	<div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">节点信息管理</div>
		</div>
	  	<div class="left02down">
			<div class="left02down01"><a  onclick="" href="<?php echo U('Node/index');?>"><div id="Bf080" class="left02down01_img"></div>节点信息查询</a></div>
			
		    <div class="left02down01"><a onclick="" href="<?php echo U('Node/add');?>">
		      <div id="Bf081" class="left02down01_img"></div>
		      添加节点信息</a></div>
			
		</div>
	</div>





	<div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">学习信息管理</div>
		</div>
		<div class="left02down">
			<div class="left02down01">
				<a  onclick="show_menuB(82)" href="<?php echo U('Stu/index');?>">
				<div id="Bf082" class="left02down01_img"></div>学习信息查询</a></div>
			<div class="left02down01"><a href="<?php echo U('Stu/add');?>"><div class="left02down01_img"></div>学生信息添加</a></div>
			
		</div>
	</div>
	<div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">用户过滤</div>
		</div>
		<div class="left02down">
			<div class="left02down01"><a href="#"><div class="left02down01_img"></div>过滤IP(段)</a></div>
			<div class="left02down01"><a href="#"><div class="left02down01_img"></div>过滤用户名</a></div>
		</div>
	</div>
	<div class="left02">
		<div class="left02top">
			<div class="left02top_right"></div>
			<div class="left02top_left"></div>
			<div class="left02top_c">系统管理</div>
		</div>
		<div class="left02down">
			<div class="left02down01"><a href="#"><div class="left02down01_img"></div>权限管理</a></div>
			<div class="left02down01"><a href="#"><div class="left02down01_img"></div>用户组管理</a></div>
			<div class="left02down01"><a href="#"><div class="left02down01_img"></div>操作日志</a></div>
		</div>
	</div>
	<div class="left01">
		<div class="left03_right"></div>
		<div class="left01_left"></div>
		<div class="left03_c"><a href="<?php echo U('Public/logout');?>">安全退出</a></div>
	</div>
</div>
<div class="rrcc" id="RightBox">
	<div class="center" id="Mobile" onclick="show_menuC()"></div>
	<div class="right" id="li010">
		<div class="right01"><img src="/think_rbac/app_rbac/Public/Images/04.gif" />
		 	角色信息管理 &gt; <span>浏览角色信息</span>
		 </div>
		<div style="padding:20px">

			

	<center>
		<table width=90% cellpadding="5" cellspacing="3">
			<tr align='left' bgcolor="#ccc">
				<th>ID</th>
				<th>角色名</th>
				<th>说明</th>
				<th>状态</th>
				<th>拥有权限</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><?php echo ($vo["remark"]); ?></td>
					<td><?php if($vo["status"] == 1): ?>启用<?php else: ?>禁用<?php endif; ?></td>
					<td width=200>
						<!-- <?php if(is_array($vo["node"])): $i = 0; $__LIST__ = $vo["node"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i; echo ($va); ?>&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?> -->
					</td>
					<td>
						<a href="<?php echo U('Role/del',array('id'=>$vo['id']));?>">删除</a>
						<a href="<?php echo U('Role/edit',array('id'=>$vo['id']));?>">修改</a>
						<a href="<?php echo U('Role/nodelist',array('id'=>$vo['id']));?>">分配权限</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</table>
	</center>

		</div>
	</div>
	
	
</div>



	

</body>
</html>