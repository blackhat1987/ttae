<?php
if(!defined('ROOT_PATH')) {
	include "./header.php";
	define('CURMODULE',"weixin");
}

include ROOT_PATH ."fetch/WeixinApi.php";
$options = array(
		'token'=>$_G['setting']['weixin_token'], //第一次绑定是要
		'encodingaeskey'=>$_G['setting']['weixin_aeskey'], //如果是加密型就需要
		'appid'=>$_G['setting']['weixin_appid'], //填写高级调用功能的app id
		'appsecret'=>$_G['setting']['weixin_secret_key'], //填写高级调用功能的密钥

);
$wexin_api = new WeixinApi($options);
$wexin_api->init();




?>
