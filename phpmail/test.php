<?php 


error_reporting(E_ALL);
require_once dirname(__FILE__).'/send.class.php';

date_default_timezone_set('PRC');
$sendMail = new Util_Mail_Send();
if($sendMail->send('wanminweixin@163.com','helxxlo','goodtest','hibox'))
{
 echo "success";
}
else
{
	echo "error";
}