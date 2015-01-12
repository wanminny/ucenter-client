<?php
require_once dirname(__FILE__).'/config/config.php';
 include dirname(__FILE__)."/Phpmailer.class.php";

echo dirname(__FILE__)."/Phpmailer.class.php";

class Util_Mail_Send
{
    /**
     * @var object
     */
    private static $mMailer = null;
        
    /**
     * 发送邮件消息
     * 
     * @param string $toAddress
     * @param string $subject
     * @param string $content
     * @param string $fromAlias
     * @return boolean
     */
    public static function send($toAddress = '', $subject, $content, $fromAlias = 'yoho')
    {
        self::init();
        $emailMatch = "/^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$/i";
        //正确的邮箱
        $rightEmail = '';
        if(preg_match($emailMatch,$toAddress) && strlen($subject))
        {
            $rightEmail = $toAddress;
        }
        else
        {
            return false;
        }
        //收件人地址,格式是AddAddress("收件人email","收件人姓名")
        self::$mMailer->AddAddress($rightEmail,'');
        //发送者别名
        self::$mMailer->FromName = $fromAlias;
        //邮件标题,设置标题编码
        self::$mMailer->Subject = "=?UTF-8?B?".base64_encode($subject) ."?=";
        //邮件内容
        self::$mMailer->Body = $content;
        //邮件发送成功
        if(self::$mMailer->Send())
        {
		ECHO 66;
            return true;
        }
        else
        {
		ECHO 77;
            return false;
        }
    }
    
    /**
     * 添加附件
     * 
     * @param string $filename
     */
    public static function addAttachment($filename)
    {
        if(file_exists($fileName) && strlen($filename))
        {
            //添加附件
            self::$mMailer->AddAttachment($filename);
        }
    }
    
    /**
     * 初始化
     */
    private static function init()
    {
        self::$mMailer = new Util_Mail_Phpmailer();
        // 邮局用户名(请填写完整的email地址)
        self::$mMailer->Username = MAILLOGINNAME; 
        //邮局密码
        self::$mMailer->Password = MAILLOGINPASSWORD;
        //邮件发送者email地址
        self::$mMailer->From = MAILLOGINNAME; 
        //使用SMTP方式发送
        self::$mMailer->IsSMTP();
        //企业邮局域名
        self::$mMailer->Host = MAILHOST; 
        // 启用SMTP验证功能
        self::$mMailer->SMTPAuth = true; 
        //设置邮件编码
        self::$mMailer->CharSet = 'utf-8';
        //是否使用HTML格式
        self::$mMailer->IsHTML(true); 
    }
}