<?php
require ('helper.php');
return array(
    // 添加数据库配置信息
    'DB_TYPE'=>'mysql',// 数据库类型
    'DB_HOST'=>env("MYSQL_PORT_3306_TCP_ADDR", ""),// 服务器地址
    'DB_NAME'=>env("MYSQL_INSTANCE_NAME", ""),// 数据库名
    'DB_USER'=>env("MYSQL_USERNAME", ""),// 用户名
    'DB_PWD'=>env("MYSQL_PASSWORD", ""),// 密码
    'DB_PORT'=>3306,// 端口
    'DB_PREFIX'=>'',// 数据库表前缀
    'DB_CHARSET'=>'utf8',// 数据库字符集
    'URL_HTML_SUFFIX'	=> '.html'
);