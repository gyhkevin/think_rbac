<?php
return array(
	//'配置项'=>'配置值'

	//视图配置
	/*
	'DEFAULT_V_LAYER'       =>  'Template',
	'TMPL_TEMPLATE_SUFFIX'=>'.tpl',
	'TMPL_FILE_DEPR'=>'_',
	'VIEW_PATH'=>'./Theme/',
	*/


	//模板主题
	'DEFAULT_THEME'    =>    'Default',

	//'TMPL_DETECT_THEME' => true, // 自动侦测模板主题
	//'THEME_LIST' => 'Lamp,Default',


	//自定义路径提换变量
	'TMPL_PARSE_STRING' => array(
			'__JS__' => __ROOT__.'/Public/Js',
		),


	//开启自动 映射 （查询）
	'READ_DATA_MAP'=>true,
);