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
//��������IP���������ó�127.0.0.1��������������ΪԶ��IP
define('UC_IP', '127.0.0.1');
define('UC_APPID', '7');
define('UC_PPP', '20');
$database = 'mysql';
$tablepre = 'uc_';


//ucexample_2.php �õ���Ӧ�ó������ݿ����Ӳ���  ///ע��˴���ȫ�ֱ�������include���õ���
$dbhost = 'localhost';			// ���ݿ������
$dbuser = 'root';			// ���ݿ��û���
$dbpw = '';				// ���ݿ�����
$dbname = 'ucenter';			// ���ݿ���
$pconnect = 0;				// ���ݿ�־����� 0=�ر�, 1=��
$tablepre = 'uc_';   		// ����ǰ׺, ͬһ���ݿⰲװ�����̳���޸Ĵ˴�
$dbcharset = 'utf8';			// MySQL �ַ���, ��ѡ 'gbk', 'big5', 'utf8', 'latin1', ����Ϊ������̳�ַ����趨
//ͬ����¼ Cookie ����
$cookiedomain = ''; 			// cookie ������
$cookiepath = '/';			// cookie ����·��