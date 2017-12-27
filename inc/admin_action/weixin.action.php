<?php
if(!defined('IN_ADMIN')) exit('Access Denied'); 



class weixin extends app{
	private $weixin = null;
	function main(){
				global $_G;
				
				$and = '';
				$url = '';

				if(isset($_GET['status'])){
					$status = intval($_GET['status']);
					$and .=" AND status = ".$status;
					$url .="&status=".$status;
				}

				$rs = D(array('table'=>'weixin_news_list','and'=>$and,'order'=>'id DESC'),array('size'=>40,'url'=>$url));
				$this->add($rs);
				$this->show();
	}
	
	function post(){
				global $_G;
			


				if($_GET['onsubmit'] && check()){

						$data = get_filed('weixin_news',$_GET['postdb'],$_GET['id']);
						if(!empty($_FILES['file'])){	
							$src = upload();
							if($src)$data['picurl'] = $src;
						}
						$text = '';
						if(!$data['list_id']) $text = '(但是文章没有设定专题,无法发布,设定专题才能推送本文章)';
						if($_GET['id']){
							DB::update('weixin_news',$data,'id='.intval($_GET['id']));
							msg('修改成功'.$text,'success');
						}else{
							$data['dateline'] = TIMESTAMP;
							DB::insert('weixin_news',$data);
							msg('发布成功'.$text,'success');
						}
						msg('发布成功');
				}else if($_GET['goods_id']){
					 $goods_id =get_goods_id($_GET['goods_id']);
					  if(!$goods_id)   cpmsg('商品ID或链接不正确或填写错误');

					  $goods = D(array('and'=>" AND num_iid = ".$goods_id,'limit'=>1,'all'=>true)); 
					  if(empty($goods)) msg('商品不存在');

					  $goods['url'] = $goods['id_url'];
					  $goods['desc'] = $goods['ly'];
					  $this->add(array('goods'=>$goods));

				}else if($_GET['id']){
					$and = ' AND id = '.intval($_GET['id']);
					$rs = D(array('table'=>'weixin_news','and'=>$and,'order'=>'id DESC'));

					$this->add(array('goods'=>$rs));
				}

				$news_list = D(array('table'=>'weixin_news_list','and'=>'AND status in ( 0,2)','order'=>'id DESC','limit'=>300));
				$this->add(array('news_list'=>$news_list));
				$this->show();
	}

	function news_main(){
				global $_G;
				
				$and = '';
				$url = '';

				if(isset($_GET['status'])){
					$status = intval($_GET['status']);
					$and .=" AND status = ".$status;
					$url .="&status=".$status;
				}

				if(isset($_GET['list_id'])){
					$list_id = intval($_GET['list_id']);
					$and .=" AND list_id = ".$list_id;
					$url .="&list_id=".$list_id;
				}

				$rs = D(array('table'=>'weixin_news','and'=>$and,'order'=>'id DESC'),array('size'=>40,'url'=>$url));
				$this->add($rs);
				$this->show();
	}

	function list_post(){
				global $_G;
				
				if($_GET['onsubmit'] && check()){
					$data = get_filed('weixin_news_list',$_GET['postdb'],$_GET['id']);
					if($_GET['id']){
						DB::update('weixin_news_list',$data,'id='.intval($_GET['id']));
						msg('修改成功','success');
					}else{
						$data['dateline'] = TIMESTAMP;
						DB::insert('weixin_news_list',$data);
						msg('发布成功','success');
					}
				}else if($_GET['id']){
					$and = ' AND id = '.intval($_GET['id']);
					$rs = D(array('table'=>'weixin_news_list','and'=>$and,'order'=>'id DESC'));
					$this->add(array('data'=>$rs));
				}

				
				$this->show();
	}
	function list_del(){
					global $_G;
					if(!$_GET['id']){ 
						cpmsg('抱歉,要删除的ID不存在','error',"m=weixin&a=main");
						return false;
					}
					$id = intval($_GET['id']);
					if(!$_GET['ok']){
						cpmsg('您确定要删除当前专题吗?删除后不可恢复?','error',"m=weixin&a=list_del&ok=1&id=".$id,'确定删除',"<p><a href='".URL."m=weixin&a=main'>取消</a></p>");
					}else{
						DB::delete('weixin_news_list',"id=".$id);
						cpmsg('删除成功','success',"m=weixin&a=main");
						return false;
					}

	}


	//步骤1 上传
	function upload(){
		global $_G;
		if(!$_GET['id']) msg('抱歉,要上传的专题ID不存在');
		$id = intval($_GET['id']);
		$and = ' AND id = '.$id;
		$rs = D(array('table'=>'weixin_news_list','and'=>$and,'order'=>'id DESC'));

		if($rs['count'] == 0)  msg('当前专题没有任何文章,无法预览');
		if($rs['status']  >2 )  msg('当前专题已全网推送,无法再次上传');
		
		$data  = DB::fetch_all("SELECT * FROM ".DB::table('weixin_news')." WHERE list_id = ".$id);

		$this->load_weixin();
		foreach($data as $k=>$v){
			if(!empty($v['picurl'])) {
				$url = $v['picurl'];
				$pic = DB::result_first("SELECT weixin_url FROM ".DB::table('weixin_images')." WHERE url = '$url'  AND is_thumb = 1");
				if($pic){
						$v['picurl'] = $pic;
				}else{
						$src = $this->weixin->download_image($url);
						if($src !== false) {
							$usrc = $this->weixin->upload_thumb($src);
							if($usrc != false){
								$tmp = array('url'=>$url,'weixin_url'=>$usrc,'is_thumb'=>1,'dateline'=>TIMESTAMP,'news_id'=>$v['id']);
								DB::insert('weixin_images',$tmp);
								$v['picurl'] = $usrc;
							}
						}
				}
			}


			$content = $v['content'];
			$reg="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/"; 
			preg_match_all($reg,$content,$arr);
			if(!empty($arr[1]) && count($arr[1]) > 0) {
				$replace = array();
				foreach ($arr[1] as $k1=>$v1) {
					
					$pic2 = DB::result_first("SELECT weixin_url FROM ".DB::table('weixin_images')." WHERE url = '$v1' AND is_thumb = 0");
					if(strpos($v1,'qpic.cn') !== false) {
							$replace[$k1] = $v1;
					}else if($pic2){
						$replace[$k1] = $pic2;

					}else{
							$src = $this->weixin->download_image($v1);
							if($src !== false) {
								$usrc = $this->weixin->upload_image($src);
								if($usrc != false){
									$replace[$k1] = $usrc;
						$tmp = array('url'=>$v1,'weixin_url'=>$usrc,'is_thumb'=>0,'dateline'=>TIMESTAMP,'news_id'=>$v['id']);
						DB::insert('weixin_images',$tmp);
								}else{
									$replace[$k1] = $src;
								}
							}else{
								$replace[$k1] = $v1;
							}
					}
				}
				$content = str_replace($arr[1],$replace,$content);
			}
			 $v['content'] = $content;
			$v['url'] = $this->get_url($v['url']);
			$data[$k] = $v;
		}
	
		$res = $this->weixin->post_news($data);
		if($res == false) msg($this->weixin->error(true));

		$update = array('mediaid'=>$res);
		if($rs['status'] == 0) $update ['status'] = 1;

		DB::update('weixin_news_list',$update,'id='.$id);
		msg('上传成功,您现在可以预览信息了');

	}

	//步骤2 预览
	function preview(){
					global $_G;
					if(!$_GET['id']) cpmsg('抱歉,要预览的专题ID不存在','error',"m=weixin&a=main");
					$id = intval($_GET['id']);
					$and = ' AND id = '.$id;
					$rs = D(array('table'=>'weixin_news_list','and'=>$and,'order'=>'id DESC'));

					
					if($rs['count'] == 0)  msg('当前专题没有任何文章,无法预览');
					if($rs['status'] == 0)  msg('当前专题没有上传,无法预览');
					if(!$_G['setting']['weixin_test_openid'])  msg('没有设置测试者openid 无法预览');

					$res = $this->load_weixin()->preview('news',$rs['mediaid']);
					if($res == false) msg($this->weixin->error(true));
				
					if($rs['status'] == 1)DB::update('weixin_news_list',array('status'=>2),'id='.$id);
					msg('预览成功,请用手机查看测试员微信收到的消息');
	}

	//步骤3 全网推送
	function post_weixin (){
		global $_G;
			if(!$_GET['id']) msg('抱歉,要上传的专题ID不存在');
			$id = intval($_GET['id']);
			$and = ' AND id = '.$id;
			$rs = D(array('table'=>'weixin_news_list','and'=>$and,'order'=>'id DESC'));

			if($rs['count'] == 0)  msg('当前专题没有任何文章,无法预览');
			if($rs['status'] >2 ){
				  msg('当前专题已全网发布成功,无法重复推送');
			}else if($rs['status']  ==1 ){
				 msg('当前专题没有预览,无法重复推送');
			}else if($rs['status']  ==0 ){
				 msg('当前专题没有上传,无法重复推送');
			}
			if(empty($rs['mediaid'])) msg('当前专题没有上传,无法全网推送');
			if(!empty($rs['msg_id'])) msg('当前专题已全网发布成功,无法再次推送');

			$res = $this->load_weixin()->send_news($rs['mediaid'],$rs['post_groupid']);
			if($res == false) msg($this->weixin->error(true));

			$update =array('status'=>3,'post_time'=>TIMESTAMP,'msg_id'=>$res['msg_id'],'msg_data_id'=>$res['msg_data_id']); 
			DB::update('weixin_news_list',$update,"id=".$id);
			msg('全网发布成功','success');

	}

	// 检查推送结果
	function check_news(){
			if(!$_GET['id']) msg('抱歉,要上传的专题ID不存在');
			$id = intval($_GET['id']);
			$and = ' AND id = '.$id;
			$rs = D(array('table'=>'weixin_news_list','and'=>$and,'order'=>'id DESC'));
			if($rs['status'] != 3 )  msg('抱歉,当状妆态无法检查状态');
			if(empty($rs['msg_id'])) msg('当前专题不存在msg_id,可能是没有全网推送或推送失败');
			$res =$this->load_weixin()->check_news($rs['msg_id']);
			if($res == false) msg($this->weixin->error(true));

			if($res =='SEND_SUCCESS') $res = '全网推送成功';
			msg('查询成功,结果为:'.$res,'success');

	}

	private function load_weixin (){
		global $_G;
		if(!empty($this->weixin)) return $this->weixin;

		include_once ROOT_PATH ."fetch/WeixinApi.php";
		$options = array(
			'token'=>$_G['setting']['weixin_token'], //第一次绑定是要
 			'encodingaeskey'=>$_G['setting']['weixin_aeskey'], //如果是加密型就需要
 			'appid'=>$_G['setting']['weixin_appid'], //填写高级调用功能的app id
 			'appsecret'=>$_G['setting']['weixin_secret_key'], //填写高级调用功能的密钥

		);

		 $wexin_api = new WeixinApi($options);
		 $wexin_api->test_open_id =$_G['setting']['weixin_test_openid'];
		// $wexin_api->init();

		 $this->weixin = &  $wexin_api;
		 return $this->weixin;
	}
 private	function get_url($url){
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

	


	function download(){

//		json(array('status'=>'success','data'=>'/assets/tmp/a0bgo49zaces4jv.jpg'));

		if(empty($_GET['pic'])) json('图片不能为空');
		$pic  = urldecode($_GET['pic']);
		$is_thumb = false;
		$and = '';
		if($_GET['type'] == 'thumb') {
			$is_thumb = true;
			$and = ' AND is_thumb = 1 ';
		}else{
			$and = ' AND is_thumb = 0 ';
		}

		$rs = DB::fetch_first("SELECT * FROM ".DB::table('weixin_images')." WHERE url='$pic' ".$and);
		if(!empty($rs) && $rs['id']) json(array('status'=>'success','data'=>$rs['weixin_url']));


		$weixin = $this->load_weixin();
		$url = $weixin->upload($pic,false,$is_thumb);
		if($url == false) json($weixin->error(true));

		$data = array('url'=>$pic,'weixin_url'=>$url,'is_thumb'=>$is_thumb ? 1 : 0,'dateline'=>TIMESTAMP);
		DB::insert('weixin_images',$data);
		json(array('status'=>'success','data'=>$url));


	}

	function news_del(){
					global $_G;
					if(!$_GET['id']){ 
						cpmsg('抱歉,要删除的ID不存在','error',"m=weixin&a=news_main");
						return false;
					}
					$id = intval($_GET['id']);
					if(!$_GET['ok']){
						cpmsg('您确定要删除当前文章吗?删除后不可恢复?','error',"m=weixin&a=news_del&ok=1&id=".$id,'确定删除',"<p><a href='".URL."m=weixin&a=news_main'>取消</a></p>");
					}else{
						DB::delete('weixin_news',"id=".$id);
						cpmsg('删除成功','success',"m=weixin&a=news_main");
						return false;
					}

	}

	function setting(){
			global $_G;

			parent::seo_setting();
		}
	
}
?>

