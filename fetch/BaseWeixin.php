<?php
include_once ROOT_PATH ."web/lib/weixin/wechat.class.php";
abstract class BaseWeixin extends Wechat{
	public $debug = false;
	public $default_text = '竟然被您发现了！
			这里每天都有最新的淘宝内部优惠券！
			先领券 在购物 最高可省80% 已经超过100万人在享受我们送出的福利了！
			【省钱我们是认真的！】
			找商品直接回复：找XXx！';
	public $test_open_id  = '';
	public $_appid = '';
	public $_appsecret = '';
	public $_access_token = '';

	public $web_url = '';	//网站地址
	public $default_tag_id = 0;	//默认用户组ID

	public function __construct($options){
		$this->_appid = isset($options['appid'])?$options['appid']:'';
		$this->_appsecret = isset($options['appsecret'])?$options['appsecret']:'';
		parent::__construct($options);
		$this->get_access_token();
	}

	function init(){

			if(isset($_GET['echostr']) || isset($_POST['echostr'])) {
					//明文或兼容模式可以在接口验证通过后注释此句，但加密模式一定不能注释，否则会验证失败
					$data = $this->valid(true);
					ob_clean();
					if(!$data ) {
						echo '签名失败';
					}else{
						echo $data;
					}
					exit;
			}

			$type = $this->getRev()->getRevType();
			$method = 'from_'.$type;
			if(method_exists($this,$method)){
				$this->$method();
			}else{
				$this->send_default_text();
			}
			
	}

	//是否本地,如果是本地,则从线上获取token
	abstract function is_location (); 

	//从正式环境获取access_token
	abstract function get_web_token (); 

	public function get_token(){
			echo json_encode(array('status'=>'success','data'=>$this->_access_token));
	}
	
	//文字消息
protected	function from_text() {
				 	$text = $this->getRevContent();
				 	$this->send_text($text);
			}

	//事件消息
protected	function from_event() {
					$event = $this->getRevEvent();
					if(!is_array($event)) {
						$this->send_debug($event);
						return ;
					}
					
					$this->log('收到事件消息'.json_encode($event));
					$name  = strtolower($event['event']);
					$method  = 'event_'.$name;
					if(method_exists($this,$method)) {
						$this->$method($event);
					}else {
						$this->send_debug($event);
					}
			}

	//接收地理位置
protected	function from_location() {	
					$geo = $this->getRevGeo();
					$this->send_text('您当前位置:  '.$geo['label']);
			}

	//语音信息
protected	function from_voice() {
					$rs = $this->getRevVoice();
					$this->send_debug($rs);
			}


	//视频信息
protected	function from_video() {
					$rs = $this->getRevVideo();
					$this->send_debug($rs);
			}


	//图片信息
protected	function from_image() {
					$rs = $this->getRevPic();
					$url = $rs['picurl'];
					$this->send_text($url);
					//$this->send_debug($rs);
			}

	//链接信息
protected	function from_link() {
					$rs = $this->getRevLink();
					$this->send_debug($rs);
			}

	//小视频
protected	function from_shortvideo() {
					$rs = $this->getRevVideo();
					$this->send_debug($rs);
			}

	//回复默认消息
public	function send_default_text($msg){
				$nickname = $this->get_nick();
				if(empty($msg))  $msg = $this->default_text;
				return $this->send_text($nickname .'  '.$msg);
			}

	//直接回复文字内容给用户
public	function send_text($msg){
				return $this->text($msg)->send();
			}

 	//调式输出. json输出原文
public	function send_debug($msg=''){
				if(empty($msg))$msg = $this->getRevContent();
				$this->send_text('您的内容->'.self::json_encode($msg));
				exit;
	}




//群发推送完成  返回数组,结果描述和ID
protected function event_masssendjobfinish(){
				$data = $this->getRevResult();
				if($data == false ) {
					$this->errCode = -100017;
					$this->errMsg = '收到推送消息解析失败';
					return false;
				}

				$id= $this->getRevTplMsgID();
				$status = $this->getRevStatus();
				$text = '';
				if($status == 'send success'){
					$text = '推送总数'.$data['TotalCount'].'条,';
					$text .='过滤'.$data['FilterCount'].'条,';
					$text .='成功'.$data['SentCount'].'条,';
					$text .='失败'.$data['ErrorCount'].'条';
				}else if($status == 'send fail'){
					$text = '推送失败';
				}else if(strpos($status,'err(') !== false){
					$code = str_replace(array('err','(',')'),'',$status);
					$this->errCode =  'news_'.$code;
					$text = $this->error(true);
					if(!$text) $text = '推送结果:审核失败';
				}else{
					$text = '推送结果:'.$status;
				}
				return array('text'=>$text,'id'=>$id);
}


	//把错误输出给用户
public	function error($return = false,$dump = false){
		$code = $this->errCode;
		if($code == 40001) {
			//取access_token时AppSecret错误，或者access_token无效  强制刷新
			$this->get_access_token(true);
		}
		$msg = '错误码: '.$code;
		if(!class_exists('WxError') ) include_once ROOT_PATH ."fetch/WxError.php";

		if(WxError::check($code)){
			$msg = '错误信息:'. WxError::check($code);
		}else{
			$msg .=', 错误信息:'.$this->errMsg;
		}

		if($return)return $msg ;
		if($dump) dump($msg,1);
		$this->send_text($msg);
		exit;
	}

	//获取access_token
public function get_access_token($focus = false){
					$appid = $this->_appid;
					$authname = 'wechat_access_token'.$appid;
					$token = $this->getCache($authname);
				
					if ($token ==false  || $focus)  {
							//如果是本地,则从线上获取token
							if($this->is_location()) {
								$token =  $this->get_web_token();
								$this->setCache($authname,$token,7200-100);
							}else{
								$this->resetAuth();
								$token_new = $this->checkAuth();
								if($token_new === false) {
									$token= false;
								}else{
									$token= $token_new ;
								}
							}
					}
					$this->_access_token = $token;
					return $token ;

		}


		//获取用户昵称
public	function get_nick(){
			$user_id = $this->get_user_id();
			$info = $this->getUserInfo($user_id);
			if(!$info) return false;
			return $info['nickname'];
		}
		/**
		 * 获取当前用户ID
		 * @return [type] [description]
		 */
protected function get_user_id(){
		return $this->getRevFrom();
	}
	//所有回复消息,全走send不走reply
	//重写,防止是空的话微信出现 "该公众号暂时无法提供服务请稍后再试"
public	function send($msg=array(),$return = false){
		if(empty($msg)) {
			$msg = $this->Message(true);
			if(empty($msg)) $msg = '抱歉,没有找到内容哦';
		}

		return $this->reply($msg,$return);
	}


	//重写,防止内容长度大于8条 或内容是空的
public function news($newsData=array()){
			if(empty($newsData)) {
				$this->send_debug('抱歉,没有找到内容哦');
			}
			if(count($newsData) > 8 ) {
				$newsData=array_slice($newsData,0,8);
			}
			return parent::news($newsData);

	}


//上传图片download_image
//永久图 只能5000个
//(文章图片) 非永久,非缩略图 不占用5000个限制  返回URL
// 缩略图,自动会生成小于64KB的图
public function upload($url = '',$forever=false,$is_thumb=false){
		
		if(empty($url)){
				$this->errCode = -10001 ;
				$this->errMsg = '上传的图片地址不能为空';
				return false;
		}
		$down_load_file = false;
		//检查图片是否是微信官方的,是就不用下载了
		if(strpos($url,'http') !== false){
			if(strpos($url,'qpic.cn') !== false && $forever==false && $is_thumb==false )  return $url;
			$url = $this->download_image($url);

			if($url == false) {
				$this->errCode =  -10002 ;
				$this->errMsg = '远程图片下载失败';
				return false;
			}

			$down_load_file = true;
		}else if(strpos($url,'/') === false){
				if($forever ||  $is_thumb ) return $url;
				$this->errCode = -10003 ;
				$this->errMsg = '当前图片为mediaid不是url';
				return false;
		}


		$url = str_replace(array('@',ROOT_PATH),'',$url);
		$url = ROOT_PATH.trim($url,'/');
	
		if(!is_file($url))  {
			$this->errCode = -10004 ;
			$this->errMsg = '本地图片不存在';
			return false;
		}
		$size = intval( filesize($url) / 1024 );

		if($size > 2048 || (!$forever && $size > 1024) ){
			$url = $this->thumb($url,0,0,1024);
			$url = ROOT_PATH. trim($url,'/');
			// $this->errCode = -10005 ;
			// $this->errMsg = '图片大小超过限制';
			// return false;
		}else if($is_thumb && $size > 64 ){
			$thumb = $this->thumb($url,0,0,64);
			if($thumb == false) return false;
			$url = ROOT_PATH. trim($thumb,'/');
		}

		$data = array('media'=>'@'.$url);
		if($is_thumb){
				$rs =   $this->uploadMedia($data,'thumb');

				if($rs ==false) return false;
				if($down_load_file) @unlink($url) ;
				return $rs['thumb_media_id'];
		}else if($forever){
			$rs =   $this->uploadForeverMedia($data,'image');
			if($rs ==false) return false;
			if($down_load_file) @unlink( ROOT_PATH . $url) ;

			return $rs['media_id'];
		}else{
			$rs =   parent::uploadImg($data);


			if($rs ==false) return false;
			if($down_load_file) @unlink( ROOT_PATH . $url) ;
			return $rs['url'];
		}
}

//发布文章类,必须用临时缩略图才行
public function upload_thumb($url){
	if(strpos($url,'/') === false ) return $url;
	return $this->upload($url,false,true);
}

//发布文章类,不占用5000个素材限制
public function upload_image($url){
	return $this->upload($url,false,false);
}



/**
 * 发布新闻
 * @param  array  $news_list [description]
 *	
 *	array(
 *		'title'=>'',
 *		'picurl'=>'',
 *		'url'=>'',
 *		'content'=>'',
 *		'desc'=>'',
 *		'username'=>'',
 *		'show_pic'=>'',
 *	),....
 *	
 * @return [type]            [description]
 */
public	function post_news($news_list = array()){
			$list = array();


			$field = array('title','picurl','url','content','desc','username','show_pic');
			foreach($news_list as $k=>$v){
				if(empty($v['picurl']) ){
					$this->errCode = -10006 ;
					$this->errMsg = '缩略图不能为空';
					return false;
				}else if(empty($v['title'])){
					$this->errCode = -10007 ;
					$this->errMsg = '标题不能为空';
					return false;
				}else if(empty($v['content'])){
					$this->errCode = -10008 ;
					$this->errMsg = '内容不能为空';
					return false;
				}
				foreach($v as $k1=>$v1){
					if(!in_array($k1,$field)) unset($v[$k1]);
				}
				$rs = array();
				$thumb =   $this->upload_thumb($v['picurl']);
				$content = $this->replace_images($v['content']);
				if($thumb == false) return false;
				$rs['thumb_media_id'] =   $thumb;
				$rs['title'] =   $v['title'];
				$rs['content_source_url'] =  $v['url'];
				$rs['content'] =   $content;
				$rs['digest'] =   $v['desc'];
				$rs['author'] =   $v['username'];
				$rs['show_cover_pic'] =   $v['show_pic'];
				$list []  = $rs;
			}

			$rs = 	$this->uploadArticles(array('articles'=>$list));

			if(!$rs ) return $rs;
			$id = $rs['media_id'];
			$_SESSION['last_news_id'] = $id;
			return $id;
		}

/**
 * 全网推送文章
 * @param  string $mediaid [description]
 * @return [type]          [description]
 */
public function send_news($mediaid='',$groupid=''){
		// 注意原接是group_id,微信官方是tag_id
		
		if(empty($mediaid)) {
			$this->errCode = -100015 ;
			$this->errMsg = '专题所属的mediaid不能为空';
			return false;
		}
		$signid = 'id_'.substr($mediaid,0,15);
		$signid = strtolower($signid);
		$data = array(
			'filter'=>array('is_to_all'=>empty($groupid),'tag_id'=>$groupid),
			'msgtype'=>'mpnews',
			'mpnews'=> array( "media_id"=>$mediaid),
			'send_ignore_reprint'=>1,
			'clientmsgid'=>$signid,
		);
		$rt = $this->sendGroupMassMessage($data);
		if($rt == false) return false;
		return array('msg_id'=>$rt['msg_id'],'msg_data_id'=>$rt['msg_data_id']);
}

/**
 * 查询专题推送结果
 * @param  string $msg_id [description]
 * @return [type]         [description]
 */
function check_news($msg_id = ''){
		if(empty($msg_id)) {
			$this->errCode = -100016 ;
			$this->errMsg = '要查询推送结果的ID不能为空';
			return false;
		}
		$rt = $this->queryMassMessage($msg_id);
		if($rt == false) return false;
		return $rt['msg_status'];
}


		/**
		 * 预览内容
		 * @param  [type] $open_id [description]
		 * @param  [type] $type     mpnews | voice | image | mpvideo | text | wxcard
		 * @param  [type] $data  	media_id |  content |    wxcard = array('card_ext'=>'','card_id'=>'')
		 * @return [type]           boolean
		 */
public	function preview($type='',$data='',$open_id=''){
		if(empty($open_id)) $open_id = $this->test_open_id ; 
		if(empty($open_id)) {
					$this->errCode = -10009 ;
					$this->errMsg = 'open_id不能为空';
					return false;
			return false;
		}
		$rs = array('touser'=>$open_id,'msgtype'=>'');
		if($type == 'text'){
			$rs[$type] = array( "content" => $data);
		}else if($type == 'wxcard'){
			//$data = array('card_ext'=>'','card_id'=>'');
			$rs[$type] =$data;
		}else{
			if($type =='news' || $type == 'video'){
				 $type = 'mp'.$type;
			}
			$rs[$type] = array( "media_id" => $data);
		}
		$rs['msgtype'] = $type;
		
		$rt = $this->previewMassMessage($rs);
		if($rt == false) return $rt;
		return true;
}


    protected function setCache($cachename, $value, $expired) {
        return  memory('set',$cachename, $value, $expired);

    }
    
    protected function getCache($cachename) {
         return memory('get',$cachename);
    }
    
    protected function removeCache($cachename) {
        return memory('delete',$cachename);
    }


private function dmkdir($dir, $mode = 0777, $makeindex = TRUE){
			if(!is_dir($dir)) {
				dmkdir(dirname($dir), $mode, $makeindex);
				@mkdir($dir, $mode);
				if(!empty($makeindex)) {
					@touch($dir.'/index.html'); @chmod($dir.'/index.html', 0777);
				}
			}
			return true;
	}

public	function download_image($url,$filename='',$curl=false){

			if(empty($url)) {
					$this->errCode = -10010 ;
					$this->errMsg = '待下载的图片地址不能为空';
					return false;
			}else if(strpos($url,'http') === false){
				return $url;
			}

			$filename_bak  = $filename;
			
			if(empty($filename)){
				$ext=strrchr($url,'.');
				$ext = '.jpg';
				$name = md5($url);
				$name = substr($name,0,15);
				$filename=$name.$ext;
				$filename = strtolower($filename);
				$filename =  ROOT_PATH . 'assets/tmp/'.$filename;
			}
			
			if(!is_dir(dirname($filename))) $this->dmkdir(dirname($filename));
			if(is_file($filename)) return  '/'. str_replace(ROOT_PATH,'',$filename);

			//文件保存路径
			if(!empty($curl)){
				  $ch=curl_init();
				  $timeout=3;
				  curl_setopt($ch,CURLOPT_URL,$url);
				  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
				  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
				  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
       			  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); // 从证书中检查SSL加密算法是否存在
				  $img=curl_exec($ch);
				  curl_close($ch);
			}else{
				 ob_start();
				 readfile($url);
				 $img=ob_get_contents();
				 ob_end_clean();
			}
			$size=strlen($img);

			if($size ==0) {
				if($curl){
					return false;
				}else{
					return $this->download_image($url,$filename_bak,true,$upload);	
				}
			}

			//文件大小
			$fp2=@fopen($filename,'a');
			fwrite($fp2,$img);
			fclose($fp2);
			$filename = '/'. str_replace(ROOT_PATH,'',$filename);
			return $filename;

	}

/**
 * 将文章详情中的图片链接替换成微信官方链接
 * 先下载到本地,然后上传到微信服务器,再替换,换回替换后的内容
 * @param  string $content [description]
 * @return [string]     
 */
public function replace_images($content=''){
		if(empty($content)) return $content;
		$reg="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/"; 
		preg_match_all($reg,$content,$arr);
		if(!empty($arr[1]) && count($arr[1]) > 0) {
			$replace = array();
			foreach ($arr[1] as $k=>$v) {
				if(strpos($v,'qpic.cn') !== false) {
						$replace[$k] = $v;
				}else{
						$src = $this->download_image($v);
						if($src !== false) {
							$usrc = $this->upload_image($src);
							if($usrc != false){
								$replace[$k] = $usrc;
							}else{
								$replace[$k] = $src;
							}
						}else{
							$replace[$k] = $v;
						}
				}
			}
			$content = str_replace($arr[1],$replace,$content);
		}
		return $content;
}





/** 
 * 生成缩略图函数（支持图片格式：gif、jpeg、png和bmp） 
 * @author ruxing.li 
 * @param  string $src      源图片路径 
 * @param  int    $width    缩略图宽度（只指定高度时进行等比缩放） 
 * @param  int    $width    缩略图高度（只指定宽度时进行等比缩放） 
 * @param  因微信缩略图大小限制 图片会自动生成小于64KB的图片
 * @return bool 
 */  

public function thumb($src = '', $width = 300, $height = 300,$max_size = 0){
			if($width <1) $width = 300;
			if($height <1) $height = 300;
			if(empty($src)){
					$this->errCode = -100011;
					$this->errMsg = '缩图片图片地址不能为空';
					return false;
			}else if(strpos($src,'http') !== false){
					$this->errCode = -100012;
					$this->errMsg = '远程图片请先下载到本地后再重生成缩略图';
					return false;
			}

			$src = str_replace(ROOT_PATH,'',$src);
			$src = ROOT_PATH. trim($src,'/');
		 
		    $size = getimagesize($src);  
		    if (!$size)  {
		    	$this->errCode = -100013;
				$this->errMsg = '图片不存在';
		        return false;  
		    }
		    $ext = explode('.',$src);
		    $ext = '.'.array_pop($ext);
		    $filename = str_replace($ext,'_'.$width.'x'.$height.$ext,$src);

		    list($src_w, $src_h, $src_type) = $size;  
		    $src_mime = $size['mime'];  
		    switch($src_type) {  
		        case 1 :  
		            $img_type = 'gif';  
		            break;  
		        case 2 :  
		            $img_type = 'jpeg';  
		            break;  
		        case 3 :  
		            $img_type = 'png';  
		            break;  
		        case 15 :  
		            $img_type = 'wbmp';  
		            break;  
		        default :  
		        	//默认为jpg
		            $img_type = 'jpeg';  
		            break;  
		    }  
		  
		    if (!isset($width))   $width = $src_w * ($height / $src_h);  
		    if (!isset($height))    $height = $src_h * ($width / $src_w);  
		  
		    $imagecreatefunc = 'imagecreatefrom' . $img_type;  
		    $src_img = $imagecreatefunc($src);  
		    $dest_img = imagecreatetruecolor($width, $height);  
		    imagecopyresampled($dest_img, $src_img, 0, 0, 0, 0, $width, $height, $src_w, $src_h);  
		  
		    $imagefunc = 'image' . $img_type;  
		    $imagefunc($dest_img, $filename);   
		    imagedestroy($src_img);  
		    imagedestroy($dest_img);
		    if(!is_file($filename)){
		    	$this->errCode = -100014;
				$this->errMsg = '生成缩略图失败,可能是目录无限制写入文件';
		        return false;  
		    }

		    if($max_size > 0) {
				    $size = filesize($filename) / 1024;
				    if($size > $max_size){
				    	@unlink($filename);
				    	return $this->thumb($src,$width-50,$height-50,$max_size);
				    }
		    }

		    $file = str_replace(ROOT_PATH,'/',$filename);
		    return $file;  
}

/*
	  发送模板消息	商品/服务到期提醒 	
		$config = array(
				'user_id'=>'oS3sU1MoMuA4_F-y3lE5kT2BFe-s',						//用户ID
				'open_url'=>'',											//点击打开的URL
				'template_id'=>'Nx6z9sr8niVYu3OFJVcXGv2p2Bm3JoLymYaSK4CR9zM',	//模板ID
				'title'=>'您好，您今日特价商品即将下架，请您注意。',			//标题
				'end_time'=>date('Y-m-d H:i',strtotime('+1 day')),				//到期时间
				'name'=>'九块九包邮特价商品',									//商品名称
				'desc'=>'现在可点击我查看',										//详情描述
		);
	 
	 * @param  array  $rs [description]
	 * @return [type]    成功返回true 失败返回错误信息
	 */
	function send_tpl_xiajia($rs=array()){
			
			$arr = array(
				'touser'=>$rs['user_id'],
				'template_id'=>$rs['template_id'],
				'url'=>$rs['open_url'],
				'topcolor'=>'#FF0000',
				'data'=>array(
						'first'=>array('value'=>$rs['title'],'color'=>'#666'),
						'name'=>array('value'=>$rs['name'],'color'=>'#666'),
						'expDate'=>array('value'=>$rs['end_time'],'color'=>'#333'),
						'remark'=>array('value'=>$rs['desc'],'color'=>'#666'),
						)
				);
				$rs= $this->sendTemplateMessage($arr);
				if($rs && $rs['errcode'] == 0 && $rs['errmsg'] == 'ok'){
					//推送成功
					return true;
				}else{
					$this->log($rs);
					return $rs['errmsg'];
				}
	}

	/*
	 发送模板消息	成为会员通知
	 $config = array(
				'user_id'=>'oS3sU1MoMuA4_F-y3lE5kT2BFe-s',			//用户ID
				'open_url'=>'',										//点击打开的URL
				'template_id'=>'Nx6z9sr8niVYu3OFJVcXGv2p2Bm3JoLymYaSK4CR9zM',	//点击打开的URL
				
				'title'=>'您好，您已成为微信某某店会员',			//模板ID
				'uid'=>'5122',										//用户ID
				'type'=>'店铺',										//商户类型
				'phone'=>'13855555555',								//用户电话
				'address'=>'微信某某店【9店通用】',					//地址
				'end_time'=>2014年9月30日,							//到期时间
				'name'=>'张三',										//会员名
				'desc'=>'如有疑问，请咨询13912345678。',			//详情描述
		);
	  * @param  array  $rs [description]
	 * @return [type]    成功返回true 失败返回错误信息
	 */

	function send_tpl_reg_user($rs = array()){
			$arr = array(
				'touser'=>$rs['user_id'],
				'template_id'=>$rs['template_id'],
				'url'=>$rs['open_url'],
				'topcolor'=>'#FF0000',
				'data'=>array(
						'first'=>array('value'=>$rs['title'],'color'=>'#666'),
						'cardNumber'=>array('value'=>$rs['uid'],'color'=>'#666'),
						'type'=>array('value'=>$rs['type'],'color'=>'#666'),
						'address'=>array('value'=>$rs['address'],'color'=>'#333'),
						'VIPName'=>array('value'=>$rs['name'],'color'=>'#666'),
						'VIPPhone'=>array('value'=>$rs['phone'],'color'=>'#666'),
						'expDate'=>array('value'=>$rs['end_time'],'color'=>'#666'),
						'remark'=>array('value'=>$rs['desc'],'color'=>'#666'),
						)
				);
				$rs= $this->sendTemplateMessage($arr);
				if($rs && $rs['errcode'] == 0 && $rs['errmsg'] == 'ok'){
					//推送成功
					return true;
				}else{
					$this->log($rs);
					return $rs['errmsg'];
				}
	}


/******************************************************************************************************************************/
/******************************************************************************************************************************/
/******************************************************************************************************************************/
/************************************************新增加接口***********************************************************************/
/******************************************************************************************************************************/
/******************************************************************************************************************************/
/******************************************************************************************************************************/
/******************************************************************************************************************************/
	
	
	const BATCHUNTAGGING = '/tags/members/batchtagging?';

	protected function _http_post($url,$param,$post_file=false){
		$oCurl = curl_init();
		if(stripos($url,"https://")!==FALSE){
			curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($oCurl, CURLOPT_SSLVERSION, 1); //CURL_SSLVERSION_TLSv1
		}
	        if (PHP_VERSION_ID >= 50500 && class_exists('\CURLFile')) {
	            	$is_curlFile = true;
	        } else {
	        	$is_curlFile = false;
	            	if (defined('CURLOPT_SAFE_UPLOAD')) {
	                	curl_setopt($oCurl, CURLOPT_SAFE_UPLOAD, false);
	            	}
	        }
		if (is_string($param)) {
	            	$strPOST = $param;
	        }elseif($post_file) {
	            	if($is_curlFile) {
		                foreach ($param as $key => $val) {
		                    	if (substr($val, 0, 1) == '@') {
		                        	$param[$key] = new \CURLFile(realpath(substr($val,1)));
		                    	}
		                }
	            	}
			$strPOST = $param;
		} else {
			$aPOST = array();
			foreach($param as $key=>$val){
				$aPOST[] = $key."=".urlencode($val);
			}
			$strPOST =  join("&", $aPOST);
		}
		curl_setopt($oCurl, CURLOPT_URL, $url);
		curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($oCurl, CURLOPT_POST,true);
		curl_setopt($oCurl, CURLOPT_POSTFIELDS,$strPOST);
		$sContent = curl_exec($oCurl);
		$aStatus = curl_getinfo($oCurl);
		curl_close($oCurl);
		if(intval($aStatus["http_code"])==200){
			return $sContent;
		}else{
			return false;
		}
	}



	/**
	 * 给用户打标签
	 * @param  [type] $data [description]
	 * array(
	 * 		"openid_list"=>array( openid,openid2,openid3......),
	 *   	"tagid"=> int tagid
	 * )
	 * @return [type]       [description]
	 */
	public function member_bind_tag($data){
		if (!$this->_access_token && !$this->get_access_token()) return false;
		$result = $this->_http_post(self::API_URL_PREFIX.self::BATCHUNTAGGING.'access_token='.$this->_access_token,self::json_encode($data));
		if ($result)
		{
			$json = json_decode($result,true);
			if (!$json || !empty($json['errcode'])) {
				$this->errCode = $json['errcode'];
				$this->errMsg = $json['errmsg'];
				return false;
			}
			return $json;
		}
		return false;
	}

	/**
	 * 给当前用户绑定标签
	 * @param  string  $userid [description]
	 * @param  integer $tagid  [description]
	 * @return [type]          [description]
	 */
	function bind_tag($userid='',$tagid = 0){

				if(!$tagid && !$this->default_tag_id) {
					$this->log('默认tagid没有设置');
					return false;
				}

				$user_id = $userid ? $userid : $this->get_user_id();
				$id = $tagid ? $tagid : $this->default_tag_id;
				$arr = array(
					'openid_list'=>array($user_id),
					'tagid'=>$id
				);
				$rt = $this->member_bind_tag($arr);
				if(!$rt) $rt = $this->error(true);
				$this->log($rt);
				return $rt;
}
	 
}



?>
