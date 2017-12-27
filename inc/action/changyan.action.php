<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 

class changyan extends app{
	
		//畅言获取用户信息
	function get_user_info(){
		global $_G;
		$arr = array('is_login'=>0,'user'=>array());
		
		$arr['is_login'] = 1;
		$arr['user']['img_url']     = 	'/assets/global/images/avatar.png';
		$arr['user']['nickname']    = 	$_G['clientip'];
		$arr['user']['profile_url'] = 	'';	
		$arr['user']['user_id']     = 	str_replace(".",'_',$_G['clientip']);
		$arr['user']['sign']        = 	"no";
		

		$data = json_encode($arr);
		if(!empty($_GET['callback']) && preg_match("/^[a-zA-Z0-9_]+$/is",$_GET['callback'])) {
			$data = $_GET['callback'].'('.$data.')';
		}
		echo $data;
		exit;
	}

	//畅言退出登录
	function logout(){
		global $_G;
		$arr = array('code'=>1,'reload_page'=>1,'js_src'=>'{}');
		echo json_encode($arr);
		exit;
	}


}
?>