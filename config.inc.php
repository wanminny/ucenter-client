<?php

define('UC_CONNECT', 'mysql');
define('UC_DBHOST', 'localhost');
define('UC_DBUSER', 'root');
define('UC_DBPW', '');
define('UC_DBNAME', 'ucenter');
define('UC_DBCHARSET', 'utf-8');
define('UC_DBTABLEPRE', '`ucenter`.uc_');
define('UC_DBCONNECT', '0');
define('UC_KEY', '123456');
define('UC_API', 'http://uc.com');
define('UC_CHARSET', 'utf-8');
//尽量设置IP，本地设置成127.0.0.1，服务器上设置为远程IP
define('UC_IP', '127.0.0.1');
define('UC_APPID', '7');
define('UC_PPP', '20');
$database = 'mysql';
$tablepre = 'uc_';


//ucexample_2.php 用到的应用程序数据库连接参数  ///注意此处是全局变量后面include有用到了
$dbhost = 'localhost';			// 数据库服务器
$dbuser = 'root';			// 数据库用户名
$dbpw = '';				// 数据库密码
$dbname = 'ucenter';			// 数据库名
$pconnect = 0;				// 数据库持久连接 0=关闭, 1=打开
$tablepre = 'uc_';   		// 表名前缀, 同一数据库安装多个论坛请修改此处
$dbcharset = 'utf8';			// MySQL 字符集, 可选 'gbk', 'big5', 'utf8', 'latin1', 留空为按照论坛字符集设定
//同步登录 Cookie 设置
$cookiedomain = ''; 			// cookie 作用域
$cookiepath = '/';			// cookie 作用路径