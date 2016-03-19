<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_L_DELIM'=>'<%',                                                               //左定界符
    'TMPL_R_DELIM'=>'%>',                                                               //右定界符
    'DEFAULT_MODULE'=>'Home',                                                           //默认访问模块
    "URL_MODEL"=>2,                                                                     //url重写模式
    'MODULE_ALLOW_LIST'=>array('Home','Admin'),                                         //允许访问的模块
    'LAYOUT_ON'=>true,                                                                  //开启布局
    'LAYOUT_NAME'=>'Layout/layout',                                                     //布局名字
	'SESSION_AUTO_START'=>true,                                                         //开启session
	'LOAD_EXT_CONFIG'=>'db,redis',                                                      //加载扩展配置
	'TMPL_PARSE_STRING'=>array(
	    '__BACK__'=>'/back'                                                          //定义样式存放目录
	),
);