<?php
return array(
	//开启分组
	'APP_GROUP_LIST' =>'Index,Admin',
	//设置默认分组
	'DEFAULT_GROUP' => 'Index',
	//配置数据库文件
	'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'AppAdmin',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => 'think_',    // 数据库表前缀

	//减少层级目录的分隔符，下划线左边是控制器名称，右边是模版名称
    'TMPL_FILE_DEPR' => '_',


);
?>