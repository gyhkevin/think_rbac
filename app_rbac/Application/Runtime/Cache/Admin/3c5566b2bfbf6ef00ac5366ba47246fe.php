<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>后台登陆</title>
	<style type="text/css">
		*{margin:0;padding:0;}
		body{background-color: #ccc}
		#login{position:absolute;width:480px;height:360px;top:50%;left:50%;margin-left: -240px;margin-top: -180px;border:5px solid #888;background-color: #fff;border-radius: 5px;}
		#content{margin:70px auto;}
		#content .input{width:240px;height:30px;border:1px solid #888;}
		#content tr{height:40px;}
		#content #submit{width:200px;height:40px;background-color: #888;color:#eee;font-size: 20px;cursor:pointer;border-radius:5px;border:1px solid #ccc;}

		input:-webkit-autofill {
				-webkit-box-shadow: 0 0 0px 1000px white inset;

			}
	</style> 
</head>
<body>
	<div id="login">
		<form action="<?php echo U('Public/dologin');?>" method="post" autocomplete="off">
			<table id="content">
			<tr>
				<td>管理员：</td>
				<td colspan=2><input type="text" name="username" class="input" autocomplete="off"/></td>
			</tr>
			<tr>
				<td>密码</td>
				<td colspan=2><input type="password" name="pass" class="input" / autocomplete="off"></td>
			</tr>
			<tr>
				<td>验证码</td>
				<td><input type="text" maxlength=4 style="width:100px" class="input" name="code"/></td>
				<td><img src="<?php echo U('Public/verify');?>" style="cursor: pointer" onclick="this.src='<?php echo U('Public/verify');?>?id='+Math.random()"/></td>
			</tr>
			<tr>
				<td colspan=3><input type="submit" id="submit" value="进入管理中心" /></td>
			</tr>
			<tr>
				<td colspan=3><input type="checkbox" name="remember"/>&nbsp;记住我一天</td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>