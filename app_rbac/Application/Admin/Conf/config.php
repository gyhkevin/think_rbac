<?php
return array(
	//'配置项'=>'配置值'

		//url 普通模式 配置
		//'VAR_MODULE'            =>  'module',     // 默认模块获取变量
		//	'VAR_CONTROLLER'        =>  'controller',    // 默认控制器获取变量
		//	'VAR_ACTION'            =>  'action',    // 默认操作获取变量

		//pathinfo模式配置
		//'URL_PATHINFO_DEPR'=>'-', 

		//开启路由
		'URL_ROUTER_ON'   => true, 

		//路由规则
		'URL_ROUTE_RULES'=>array(
				"Menu/test" => array("http://www.lampbrother.net"),
				"Menu/:year\d/:month\d/:day\d" =>array("Menu/read"),
				"Menu/:num\d" =>array("Menu/read"),
				'Menu/gogogo'  =>    function(){     
				        echo 'just gogogo';       
				   },

			),

		//'URL_PARAMS_BIND_TYPE'  =>  1, //操作 按照属性接受参数
		//'URL_PARAMS_BIND'       =>  false,


		//伪静态
		'URL_HTML_SUFFIX'=>'html', //如果设置为空 ，都行
		'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg|rar',



		'READ_DATA_MAP'=>true,


		//数据库驱动
		//'DB_TYPE' => 'pdo',
		//'DB_USER'   => 'root', // 用户名
		//'DB_PWD'    => '123456', // 密码
		//'DB_PREFIX' => '', // 数据库表前缀 
		//'DB_DSN'    => 'mysql:host=localhost;dbname=s13;charset=utf8',
);