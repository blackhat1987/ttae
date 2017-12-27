<?php
include ROOT_PATH ."fetch/BaseWeixin.php";
class WeixinApi extends BaseWeixin{
	private $size = 30;

	public $debug = true;
	public $url  = '';
	public $web_url = '';
	public $default_tag_id = 100;

	function init(){
			global $_G;
			$_G['siteurl'] = str_replace(array("/fetch",'index.php'),'',$_G['siteurl']);
			$this->url = $_G['siteurl'];
			$this->test_open_id =$_G['setting']['weixin_test_openid'];
			$this->default_text =$_G['setting']['weixin_default_text'];

			if(!empty($_GET['a']) ){
				$a = $_GET['a'];
				if($a =='test' && method_exists($this,$a)){
					$this->test();
					exit;
				}else if($a=='get_token'  && method_exists($this,$a)){
					$this->get_token();
					exit;
				}
			}
			
			parent::init();
	}
	
	function search($kw = ''){
				if(empty($kw)){
					$this->send_default_text();
					return ;
				}

				$kw = safe_output($kw);
				$rt = get_keywords($kw,'',0);
				$and = '';
				if($rt){
					$str = explode(',',$rt);
					foreach ($str as $k => $v) {
						$and .=" AND title like '%$v%' ";
					}
				}else{
					$and .=" AND title like '%$string%' ";
				}

				//$and.="  AND `check`=1 AND `hide`=0 ";
				//$and .= " AND ( end_time = 0 or  end_time > ".TIMESTAMP.")";	
				$rs = D(array('and'=>$and,'order'=>'aid DESC','limit'=>8));
				
				if(empty($rs)) {
					$this->send_default_text();
					return ;
				}

				$data = array();
				foreach($rs as $k=>$v){
					$url = $this->get_url('/?itemid='.$v['num_iid']);
					$data[] = array('Title'=>$v['title'],'PicUrl'=>$v['picurl'],'Description'=>$v['ly'],'Url'=>$url);
				}
				
				if(count($data) == 8) {
					$data = array_slice($data,0,7);
					$url = $this->get_url('/?m=index&a=search&kw='.$kw);
					$data[] = array('Title'=>'查看更多','PicUrl'=>'','Description'=>'','Url'=>$url);
				}
				$this->news($data)->send();
	}
	

	// abstract		function from_text() {}
	// abstract		function from_event() {}
	// function from_image() {}
	// function from_location() {}
	// function from_link() {}
	// function from_music() {}
	// function from_news() {}
	// function from_voice() {}
	// function from_video() {}



	//检查用户发来文字内容
	function from_text(){
		$text = $this->getRevContent();
		$text = strtolower($text);

		$sub = cutstr($text,2,'');
		if($sub == '找'){
				$curent_text = str_replace('找','',$text);
				$this->search($curent_text);
				return ;
		}
		switch ($text) {
			case '我的id':
				$user_id = $this->getRevFrom();
				$this->send_text($user_id);
			break;
			case 'bind_tag':
					$rt = $this->bind_tag();
					$this->send_debug($rt);
			break;
			default:
				$this->send_default_text();
				break;
		}
	}

//关注成功
protected function event_subscribe($event){
			global $_G;

			
			if($event['Ticket']){
					//扫描带参数二维码事件	用户未关注时，进行关注后的事件推送
					$key = $this->getRevSceneId();	//事件KEY值，qrscene_为前缀，后面为二维码的参数值
					$Ticket = $this->getRevTicket();	//二维码的ticket，可用来换取二维码图片
					$this->send_text($key);
			}else{
				//直接关注
				$this->bind_tag();
				$this->send_default_text($_G['setting']['weixin_gaunzhu_text']);
			}
}
//取消关注
protected function event_unsubscribe(){
			
}

//扫描带参数二维码事件 用户已关注时的事件推送
protected function event_scan($event){
		$key = $this->getRevSceneId();	//事件KEY值，qrscene_为前缀，后面为二维码的参数值
		$Ticket = $this->getRevTicket();	//二维码的ticket，可用来换取二维码图片
		$this->send_text($key);
}


//点击菜单
protected function event_click($event){
		$key = $event['key'];	//自定义菜单接口中KEY值
		$this->send_text('您点击了'.$key);
}
//点击菜单跳转链接
// protected function event_view($event){
// 			$url = $event['key'];	//跳转的链接地址
// 			$this->send_text($url);
// }
//上报地理位置事件
protected function event_location(){
			$geo = $this->getRevEventGeo();
			//x地理位置纬度 y地理位置经度 precision地理位置精度
			$this->send_debug($geo);
}


//模版消息发送任务完成后，微信服务器会将是否送达成功作为通知
protected function event_templatesendjobfinish(){
			$status = $this->getRevStatus();
			$this->send_text($status);
}

//群发推送完成
protected function event_masssendjobfinish(){
				$data = parent::event_masssendjobfinish();
				if($data == false) {
					$this->log($this->error(true));
					return ;
				}
				$update =array('msg_status'=>$data['text']); 
				DB::update('weixin_news_list',$update,"msg_id='".$data['id']."'");
}


	 protected function log($msg){
			global $_G;
			if(!is_string($msg)) $msg = "array=> ".json_encode($msg);
			$msg .="\r\ndateline:".date('Y-m-d H:i',TIMESTAMP)."\r\n";
			$msg .="--------------------------------------------------------\r\n";
			$name = 'fetch/weixin_'.date('Y-m-d').'.txt';
			file_put_contents(ROOT_PATH.$name,$msg,FILE_APPEND);
			//dump($msg);
			//include_once libfile('class/error');
			// $msg .="\r\n weixin log";
			// $msg .="\r\ndateline:".date('Y-m-d H:i',TIMESTAMP)."\r\nIP:".$_G[clientip];
			// $msg .= "\r\nMSG:".json_encode($msg);
			// $msg .= "\r\nMSG:".json_encode($_GET);
			// $msg.="\r\n".$_SERVER['REQUEST_METHOD'].':'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?'.$_SERVER['QUERY_STRING'];
			// $msg.="\r\nReferer:".$_SERVER[HTTP_REFERER]."\r\n";
			// Error::writeErrorLog($msg,'weixin');

	}
	
	 function get_url($url){
			global $_G;
			if(!$url) return '';

			if(strpos($url,'http') === false){
				if(substr($url,0,2) == '//'){
					$url = 'http:'.$url;
				}elseif(substr($url,0,1) == '/'){
					$url = $_G['siteurl'].'/'.trim($url,'/');
				}else{
					$url = str_replace('index.php','',$url);
					$url = $_G['siteurl'].'/'.URL. ltrim($url,'?');
				}
			}
			return $url;
	}
  

	function addMenu(){
		
		$buttom  = array(
					  array(
					  	  "type"=>"view",
				          "name"=>"首页",
				          "url"=>"/index.php"
					  ),array(
					  	 "name"=>"商品分类",
					  	 "sub_button"=>array(
					  	 		     array(
					  	 		     	 "type"=>"view",
							              "name"=>"女装",
							              "url"=>"/index.php?fid=1"
					  	 		     ),array(
					  	 		     	 "type"=>"view",
							              "name"=>"男装",
							              "url"=>"/index.php?fid=19"
					  	 		     ),array(
					  	 		     	 "type"=>"view",
							              "name"=>"鞋包",
							              "url"=>"/index.php?fid=4"
					  	 		     ),array(
					  	 		     	 "type"=>"view",
							              "name"=>"母婴",
							              "url"=>"/index.php?fid=3"
					  	 		     ),array(
					  	 		     	 "type"=>"view",
							              "name"=>"美食",
							              "url"=>"/index.php?fid=11"
					  	 		     )
					  	 )

					  ),array(
			               "name"=>"特价秒杀",
			               "sub_button"=>array(
			               				array(
						  	 		     	 "type"=>"view",
								              "name"=>"九块九包邮",
								              "url"=>"/index.php?a=all&price=10"
						  	 		     ),array(
						  	 		     	 "type"=>"view",
								              "name"=>"十九块九包邮",
								              "url"=>"/index.php?a=all&price=10_20"
						  	 		     ),array(
						  	 		     	 "type"=>"view",
								              "name"=>"今日新品",
								              "url"=>"/index.php?a=today"
						  	 		     ),array(
						  	 		     	 "type"=>"view",
								              "name"=>"app下载",
								              "url"=>"/index.php?m=apps"
						  	 		     ),array(
						  	 		     	 "type"=>"view",
								              "name"=>"会员中心",
								              "url"=>"/index.php?m=home"
						  	 		     )
				 			 )
					  )
		);
		foreach ($buttom as $k1 => $v1) {
				if(!empty($v1['url'])){
				 $v1['url'] = $this->get_url($v1['url']);
				}
				if($v1['sub_button']){
					foreach ($v1['sub_button'] as $k => $v) {
						if(!empty($v['url'])){
						 	$v1['sub_button'][$k]['url'] = $this->get_url($v['url']);
						}
					}
				}
				$buttom[$k1] = $v1;
		}
		
		$rs = $this->createMenu(array('button'=>$buttom));
		if($rs == false ) $this->error(false,true);
		 dump($rs);

	}

	//是否本地,如果是本地,则从线上获取token
	function is_location (){
		if(strpos($_SERVER['HTTP_HOST'],'app.com') !== false ) return true;
		return false;
	}

	//从正式环境获取access_token
	function get_web_token (){
		$query_url = $this->web_url .URL.'a=get_token';
		$rs = fetch($query_url);
		$rs = json_decode($rs,1);
		return $rs['data'];
	}
	
	function test(){
		//echo  $this->get_access_token(1);
		//$this->addMenu();
// $rs= $this->upload_image('http://img.alicdn.com/tps/i2/791105148/TB29zHQvH4npuFjSZFmXXXl4FXa_!!791105148.jpg');
// if($rs == false) $this->error(null,true);
// dump($rs);
	//	dump($_SERVER['HTTP_HOST']);
	//	$this->log(array("您今日特价商品即将下架，请您注意"));

		// $this->errCode = 41002;
		// $this->errMsg='未知错误消息';
		// $this->error();
	//	$this->search('女装');
		//$this->log(123123);
		// $str = $_GET['text'];
		// $this->text_send($str);
		
		// $config = array(
		// 		'user_id'=>'oS3sU1MoMuA4_F-y3lE5kT2BFe-s',
		// 		'open_url'=>$this->url,
		// 		'template_id'=>'Nx6z9sr8niVYu3OFJVcXGv2p2Bm3JoLymYaSK4CR9zM',
		// 		'title'=>'您好，您今日特价商品即将下架，请您注意。',
		// 		'end_time'=>date('Y-m-d H:i',strtotime('+1 day')),
		// 		'name'=>'九块九包邮特价商品',
		// 		'desc'=>'现在可点击我查看',
		// );
		// $this->send_tpl_xiajia($config);
		//$this->send_tpl_reg_user();
		// $tk = $this->get_access_token();
		// if(!$tk)$this->error();
		// dump($tk);

		// $this->resetAuth();
		// $this->get_access_token();

		// $res = $this->upload('/assets/uploads/123123.jpg',true);
		// if($res == false ) $this->error();
		// dump($res);

		// $upload = array('media'=>'@'.ROOT_PATH."assets/uploads/123123.jpg");
		// $res = $this->uploadImg($upload);
		// if($res == false ) $this->error();
		// echo $str;


		// $data = array(
		// 	'touser'=>$this->test_open_id,
		// 	'msgtype'=>'news',
		// 	'text'=>
		// 		array ( "content" => "第一次见到张暄妮，是在湖南中小企业创业分享会上，当时她作为80后成功女性企业家的代表给台下数千位观众分享她的创业经历。后面再次见面，是在2017年3月份香港举办的amfAR慈善晚宴上，当时她跟关之琳等嘉宾在聊天合影。对于这位成功的80后女企业家，我充满了好奇。后面经过多方联系，总算有机会对张暄妮本人进行采访。"
		// 		)
		// );
		// $rs = $this->previewMassMessage($data);
		// if($rs == false ) $this->error('',true);
		// dump($rs);

// 		$pic1 = '/assets/uploads/1.jpg';
// 		$pic2 = '/assets/uploads/2.jpg';
// 		$pic3 = '/assets/uploads/3.jpg';
// $res1 = $this->upload_thumb($pic1,true,false);
// if(!$res1 ) $this->error(null,true);
// $res2 = $this->upload_thumb($pic2,true,false);
// $res3 = $this->upload_thumb($pic3,true,false);
// dump($res1);
// dump($res2);
// dump($res3);


// $res1 = "46ThofD79g-ru1T9XyOTxy6GxxetcRFPM0XD4IUPUYo";
// $res2 = "46ThofD79g-ru1T9XyOTx36XODVqvUokeQVTGbYH_ig";
// $res3 = "46ThofD79g-ru1T9XyOTx6OgMxQvgntDdCOnZKy7QHw";


// $res1 = "46ThofD79g-ru1T9XyOTxxp-ASx7NCe_nExx668wYzo";
// $res2 = "46ThofD79g-ru1T9XyOTx3tZ4-9P94i9fCvYZCxPWVo";
// $res3 = "46ThofD79g-ru1T9XyOTx_z_h1aIQuogX3qBD7-zPqI";

// $res1 = "46ThofD79g-ru1T9XyOTxwCI9eJ-35lMCqf04GiIGOQ";
// $res2 = "46ThofD79g-ru1T9XyOTx1q4wi6Vx8YJZHa24_f_3Hs";
// $res3 = "46ThofD79g-ru1T9XyOTxxjIOxFwaQ5dqeDrhU5tDNA";

// $res1 = "A7gSMhLZA8Kjpl_xSMNJGZ2q8KIpt2zGkJELCN_dVP-L_o_isxGyngu1TJL_fZYW";
// $res2 = "e9TcudkmkDFEJTTfAIrHxc28T8AJWkC_4ZVpCtHrgTU6N94eMGMT_Qze7WwM4vGU";
// $res3 = "GKB1pWCZ-XERRDQq7_ay1cwlNlceCk8myBEXxawkUud58v_2g4xIRjCGTaMMYToO";


// 		$articles = array();
// 		$articles[] = array(
// 			'thumb_media_id'=>$res1,
// 			//'author'=>'',
// 			'title'=>'第一次见到张暄妮，是在湖南中小企业创业分享会上',
// 			'content_source_url'=>'http://pangxiebang.com/',
// 			'content'=>'当时她作为80后成功女性企业家的代表给台下数千位观众分享她的创业经历。后面再次见面，是在2017年3月份香港举办的amfAR慈善晚宴上，当时她跟关之琳等嘉宾在聊天合影。对于这位成功的80后女企业家，我充满了好奇。后面经过多方联系，总算有机会对张暄妮本人进行采访',
// 			'digest'=>'当时她作为80后成功女性企业家的代表给台下数千位观众分享她的创业经历',
// 			'show_cover_pic'=>1,
// 		);
// $articles[] = array(
// 			'thumb_media_id'=>$res2,
// 			//'author'=>'',
// 			'title'=>'销量不佳：iPhone 7 Plus红色特别版大降价！',
// 			'content_source_url'=>'http://pangxiebang.com/?itemid=554991990792',
// 			'content'=>'然苹果推出了红色特别版iPhone 7来重振销量，但事实证明，消费者似乎并不买账，预料中的一机难求局面并非出现，反倒是价格很快跳水。

// <p class="font-size:24px;">苏宁易购天猫旗舰店iPhone 7 Plus</p>

// <b style="color:#f00;">目前在苏宁易购天猫旗舰店，iPhone 7 Plus红色特别版128GB的价格已经从7188元下调到了6388元，降幅高达800元。</b>

// <span>这一降幅已经和此前普通版iPhone 7 Plus的优惠幅度差不多了，算是一个非常值得入手的价格。</span>',
// 			'digest'=>'iPhone 7 Plus红色特别版128GB的价格已经从7188元下调到了6388元',
// 			'show_cover_pic'=>1,
// 		);

// $articles[] = array(
// 			'thumb_media_id'=>$res3,
// 			//'author'=>'',
// 			'title'=>'雷克萨斯为何不在中国建厂？看它的日本工厂就明白',
// 			'content_source_url'=>'http://pangxiebang.com/?itemid=554991990792',
// 			'content'=>'当奔驰、宝马等豪华车品牌纷纷把全球最好的工厂建在中国，甚至连最晚进入中国的林肯都公布了国产计划后，日系豪华车品牌LEXUS雷克萨斯还是迟迟未动。

// 2016年，中国豪华车市场新车（含进口）销量达208.9万辆，同比增长15.6%，继续超越车市平均增幅，每年销量的高增长更让豪车国产化趋势愈演愈烈。奔驰、奥迪、宝马、沃尔沃、捷豹路虎，林肯纷纷选择在华新建工厂、扩充产能。数据显示，除2019年实现国产的林肯尚未公布产能情况外，其余五家在华新增总产能已达到107万辆。

// 在这种形势下，对于雷克萨斯中国执行副总经理江积哲也来说，雷克萨斯何时国产？肯定是这几年被外界问到最多的一个问题。<p style="text-align: center"></p><p style="text-indent: 2em; text-align: left;">而他回答这个问题的方式之一，是自2015年起每年组织两次“匠心之旅”，其中，雷克萨斯位于日本福冈的九洲工厂，是必去的一站。</p>',
// 			'digest'=>'自2015年起每年组织两次“匠心之旅”，其中，雷克萨斯位于日本福冈的九洲工厂，是必去的一站。',
// 			'show_cover_pic'=>1,
// 		);


// 	$rs = 	$this->uploadArticles(array('articles'=>$articles));
// 	if(!$rs ) $this->error(null,true);
// 	$id = $rs['media_id'];
// 	dump($id);


		// $rs = $this->preview($this->test_open_id,'news',"Q0UjhsdMIX1uz9Eur02SyUp1mWlYiX0TgSBACDMBL0MZLKehFkXcS44Y3th6rQqX");
		// if(!$rs ) $this->error(null,true);
		// dump($rs);
	
// $img = $this->download_image('https://img.alicdn.com/imgextra/i4/874130808/TB2FyFcXXIkyKJjy0FgXXX0mFXa-874130808.jpg_300x300.jpg');
// dump($img);
// $img = $this->thumb('/assets/tmp/j7q4cc19a3i33q9.jpg');
// dump((ROOT_PATH.$img));
	
// 	$url = '/a/domains/pangxiebang.com/public_html/assets/tmp/ubnlzw2b63z9w3i_300x300.jpg';
// 	$rs = $this->upload($url,false,true);
// dump($rs);
	
//$content = DB::result_first("SELECT content FROM ".DB::table('weixin_news')." WHERE id = 1");
// $this->replace_images($content);
// dump($content);

// $this->errCode =  'news_20001';
// $this->errMsg = '审核失败';
// $rs = $this->error(true);
// dump($rs);



	}

	//private $test_open_id  = 'oS3sU1MoMuA4_F-y3lE5kT2BFe-s';
	

}


?>
