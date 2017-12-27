<?php

include_once ROOT_PATH.'inc/class/push/BasePush.php';
include_once ROOT_PATH.'web/lib/jpush/JPush.php';
class jpush_push extends BasePush{

	private $client = null;
	private $extar =  null;
	private $SUCCESS_CODE = 100000;
	public $data = array(
		'title'=>'',
		'content'=>'',
		'type'=>'',
		'userIds'=>'',
		'platform'=>'',
		'version'=>'',
		'title'=>'',
		'picurl'=>'',
	);

	public function __construct($appid,$appkey){
		if($appid && $appkey){
			$this->app_id = $appid;
			$this->app_key = $appkey;
		}
		$this->data['platform'] = array();
		//$obj = new JPush($this->app_id,$this->app_key);
		//$this->client  = $obj->push();

	}

	public function set($key,$val){
		$this->data[$key] = $val;
	}

	public  function set_type($val){
		$this->set('type',$val);
	}

	public  function set_content($val){
		$this->set('content',$val);
	}
	public  function set_title($val){
		$this->set('title',$val);
	}
	public  function set_extar($val){
		$this->extar = $val;
	}
	public  function set_android($val){
		// if($this->data['platform'] ==1 || $this->data['platform'] ==0){
		// 	$this->data['platform'] = 0;
		// }else{
		// 	$this->set('platform',2);
		// }
		if($val)$this->data['platform'][] = 'android';
	}
	public  function set_ios($val){
		// if($this->data['platform'] ==2 || $this->data['platform'] ==0){
		// 	$this->data['platform'] = 0;
		// }else{
		// 	$this->set('platform',1);
		// }
		if($val)$this->data['platform'][] = 'ios';
	}

	public  function set_header($val){
		$this->header = array(
			  'X-APICloud-AppId'=>$this->app_id,
              'X-APICloud-AppKey'=>$this->get_key(),
		 );
	}

	public  function set_data($val){
		$this->data = $val;
	}
	
	public  function set_picurl($val){
		$this->data['picurl'] = $val;
	}


	public   function send(){



		try{

					$client = new JPush($this->app_id,$this->app_key);
					$result = $client->push();
					$result->addAllAudience();
					if($this->data['version'])$result->addTag(array('version', $this->data['version']));
					$result->setNotificationAlert($this->data['title']);
					$result->setPlatform($this->data['platform']);

					//$result->addAlias('alias1');
					if($this->data['type'] == 0){
							//通知
							if(in_array('android', $this->data['platform'])){
								$result->addAndroidNotification($this->data['content'], $this->data['title'],  
									null, $this->extar,$this->data['picurl']);
							}

							if(in_array('ios', $this->data['platform'])){
								$con = array(
									'title'=>$this->data['title'],
									'body'=>$this->data['content'],
									// 'launch-image'=>'https://img.alicdn.com/imgextra/i4/1740834326/TB21X.hspXXXXbOXpXXXXXXXXXX_!!1740834326.jpg_300x300.jpg'
									);
								if(!empty($this->data['picurl'])) $con['launch-image'] = $this->data['picurl'];
								$result->addIosNotification($con, null, null,  null,  null, $this->extar);
							}

					}else if($this->data['type'] == 1){
						//消息
						$result->setMessage($this->data['content'], $this->data['title'], null,$this->extar);
					}

					//这里的option中的$this->SUCCESS_CODE 就是成功标记
					$result->setOptions($this->SUCCESS_CODE, 86400, null, true);
					//$result->addTag('uid_6');

					$rs = $result->send();
					$msg = ',未知错误';
					if(is_object($rs)){
						$code = $rs->data->sendno;
						if($code == $this->SUCCESS_CODE){
							return '推送成功,消息id:'.$rs->data->msg_id;
						}
						$msg = ",错误码:".$code;
					}
					return '推送失败'.$msg;

		}catch(Exception $e){
				return ($e->getMessage());
		}
	}






	


// include ROOT_PATH .'inc/class/push/jpush_push.class.php';
// $push = new jpush_push();
// $msg = $push->test(array(
// 		'title'=>'测试标题111',
// 		'content'=>'测试内容111',
// 		'picurl'=>'https://img.alicdn.com/imgextra/i4/1740834326/TB21X.hspXXXXbOXpXXXXXXXXXX_!!1740834326.jpg_300x300.jpg',
// 		'type'=>0,	//0 = '通知' 1 = 消息
// 		'ext'=>array('type'=>4,'data'=>'&flag=1&fid=6','title'=>'今晚吃饭吗'),
// 		'tags'=>'uid_6',
// 		'android'=>false,
// 		'ios'=>true,
// 		'all'=>false,
// ));


	/**
	 * 测试推送
	 * @param  array  $rs [description]
	 * @return [type]     [description]
	 */
	// array(
	// 	'title'=>'',
	// 	'content'=>'',
	// 	'picurl'=>'',
	// 	'type'=>0,	//0 = '通知' 1 = 消息
	// 	'ext'=>'',
	// 	'tags'=>'',
	// 	'android'=>false,
	// 	'ios'=>false,
	// 	'all'=>false,
	// );
	function test($rs=array()){
		global $_G;

		$client = new JPush($_G['setting']['push_appkey'],$_G['setting']['push_secret_key']);
		$result = $client->push();
		if(!empty($rs['all']))  $result->addAllAudience();
	
		$platform = array();
		if($rs['type'] == 0){		//通知
				if(!empty($rs['android'])){
					$result->addAndroidNotification($rs['content'], $rs['title'],  null, $rs['ext'],$rs['picurl']);
					$platform[] = 'android';
				}

				if(!empty($rs['ios'])){
					$con = array(
							'title'=>$rs['title'],
							'body'=>$rs['content'],						
						);
					if(!empty($rs['picurl']))  	$con['launch-image'] = $rs['picurl'];
					$result->addIosNotification($con, null, null,  null,  null,  $rs['ext']);
					$platform[] = 'ios';
				}

		}else if($rs['type'] == 1){	//消息
			$result->setMessage($rs['content'], $rs['title'], null,$rs['ext']);
		}

		$result->setPlatform($platform);
		$result->setOptions($this->SUCCESS_CODE, 86400, null, true);
		if(!empty($rs['tags'])) $result->addTag($rs['tags']);
//dump($result,1);
		$rs = $result->send();
		$msg = ',未知错误';
		if(is_object($rs)){
			$code = $rs->data->sendno;
			if($code == $this->SUCCESS_CODE ){
				return '推送成功,消息id:'.$rs->data->msg_id;
			}
			$msg = ",错误码:".$code;
		}
		return '推送失败'.$msg;

	}



}



?>
