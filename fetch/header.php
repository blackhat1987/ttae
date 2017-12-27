<?php
$dir = dirname (__FILE__);
define('ROOT_PATH',dirname($dir).'/');		//上级目录为根目录
$basename = basename($_SERVER['SCRIPT_FILENAME']);
$basename = explode('.',$basename );
define('CURSCRIPT', reset($basename));
define('URL','/fetch/'.CURSCRIPT.'.php?');

include ROOT_PATH.'inc/class/application.class.php';
$cache_list = array('setting','channels','cate');

application::init(false);
application::_init_global();
application::_init_db();
application::_init_web();
application::_init_cache();

if(function_exists('error_reporting')) error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR);//E_ALL
//error_reporting(E_ALL);//E_ALL
ob_clean();

?>
