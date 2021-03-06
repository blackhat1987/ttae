<?php
if(!defined('IN_TTAE')) exit('Access Denied');

function urlencode_utf8($str){
	$str = iconv(CHARSET,'utf-8',$str);
	$str = urlencode($str);
	return $str;
}

function urldecode_utf8($str){
	$str = urldecode($str);
	$str = iconv('utf-8',CHARSET,$str);
	return $str;
}

function delete_cache($cache_name){

	if(!$cache_name) return false;
	if(is_array($cache_name)){
		foreach($cache_name as $k=>$v){
			@unlink(ROOT_PATH.'web/cache/cache_'.$v.'.php');
		}
	}else{
		return @unlink(ROOT_PATH.'web/cache/cache_'.$cache_name.'.php');
	}
	return true;
}

function writetocache($script, $cachedata, $dir='') {
	global $_G;
	if(!$dir)$dir = 'web/cache/';
	$dir = ROOT_PATH.$dir;
	if(!is_dir($dir)) {
		dmkdir($dir, 0777);
	}
	$prefix = 'cache_';
	file_put_contents("$dir$prefix$script.php","<?php\nif(!defined('IN_TTAE')) exit('Access Denied');\n //UZ-SYSTEM! cache file, DO NOT modify me!\n//Identify: ".md5($prefix.$script.'.php'.$cachedata.$_G['authkey'])."\n\n return $cachedata \n?>");

}


function getcachevars($data, $type = 'VAR') {
	$evaluate = '';
	foreach($data as $key => $val) {
		if(!preg_match("/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/", $key)) {
			continue;
		}
		if(is_array($val)) {
			$evaluate .= "\$$key = ".arrayeval($val).";\n";
		} else {
			$val = addcslashes($val, '\'\\');
			$evaluate .= $type == 'VAR' ? "\$$key = '$val';\n" : "define('".strtoupper($key)."', '$val');\n";
		}
	}
	return $evaluate;
}


function arrayeval($array, $level = 0) {
	if(!is_array($array)) {
		return "'".$array."'";
	}
	if(is_array($array) && function_exists('var_export')) {
		return var_export($array, true);
	}

	$space = '';
	for($i = 0; $i <= $level; $i++) {
		$space .= "\t";
	}
	$evaluate = "Array\n$space(\n";
	$comma = $space;
	if(is_array($array)) {
		foreach($array as $key => $val) {
			$key = is_string($key) ? '\''.addcslashes($key, '\'\\').'\'' : $key;
			$val = !is_array($val) && (!preg_match("/^\-?[1-9]\d*$/", $val) || strlen($val) > 12) ? '\''.addcslashes($val, '\'\\').'\'' : $val;
			if(is_array($val)) {
				$evaluate .= "$comma$key => ".arrayeval($val, $level + 1);
			} else {
				$evaluate .= "$comma$key => $val";
			}
			$comma = ",\n$space";
		}
	}
	$evaluate .= "\n$space)";
	return $evaluate;
}



function remove_dir($dir,$del_self_dir=false) {
	if(!$dir) return false;
	$dir = ltrim($dir,'/');
	$dir = ROOT_PATH.str_replace(ROOT_PATH,'',$dir);
	if(!is_dir($dir))return ;
	$tpl = dir($dir);
	$path = array('.','..');
	while($entry = $tpl->read()) {
		if(!in_array($entry,$path)){
			$d = $dir.'/'.$entry;
			if(is_dir($d)){
				if (!is_writable($d))@chmod($d, 0777);
				remove_dir($d);
				@rmdir($d);
			}else{
				@unlink($d);
			}
		}
	}
	$tpl->close();
	if($del_self_dir)@rmdir($dir);
}

function dmkdir($dir, $mode = 0777, $makeindex = TRUE){
	if(!is_dir($dir)) {
		dmkdir(dirname($dir), $mode, $makeindex);
		@mkdir($dir, $mode);
		if(!empty($makeindex)) {
			@touch($dir.'/index.html'); @chmod($dir.'/index.html', 0777);
		}
	}
	return true;
}


function logout(){
	global $_G;
	$_G['uid'] =0;
	$_G['username'] ='';
	$_G['member'] =array();
	$_G['groupid'] =0;
	$_G['adminid'] =0;
	dsetcookie("auth",'',-1);
	unset($_COOKIE[auth]);
	unset($_SESSION[auth]);

}
function login($onauth){
		global $_G;

			if(!$onauth){
				 $auth = (getcookie('auth'));

			}else{
				 $auth = $onauth;
			}
			if($auth){
									  $decode_auth = authcode($auth,'decode');

									  if(!$decode_auth && $onauth){
										   $decode_auth = authcode(urldecode_utf8($onauth),'decode');
									  }


									  $auth = $decode_auth;
									  $tmp_user = 	explode('|',$decode_auth);


									  if(is_array($tmp_user) && count($tmp_user) ==3){
										$login_name= $tmp_user[0];
										$uid = $tmp_user[1];
										$username = $tmp_user[2];

										 if($login_name && $username && $uid){
											 if(in_array($login_name,array('qq','weibo','taobao','baidu','weixin','wx'))){
											      $user = getuser($uid,'uid');
												   if($username == $user[username] && $uid==$user[uid] && $login_name == $user[login_name]){
													   		if(!$user[picurl])$user[picurl] = avatar($user[username],$user['uid']);
															$_G[member] = $user;
															$_G[member][group] = $_G[group][$user[groupid]];
															$_G[uid] = intval($user[uid]);
															$_G[groupid] =$user[groupid];
															 if($user[groupid] ==1) $_G[adminid] = 1;
															$_G[username] =  $user[username];



													$_G[login_img] = '<img src="/assets/global/images/login_'.$login_name.'.png" class="_login_img"/>';

													}
											}
										 }
									  }else if(is_array($tmp_user) && count($tmp_user)==2){
										$uid = $tmp_user[0];
										$password = $tmp_user[1];

											  if($uid && $password){
													  $uid = intval($uid);
													  $user = getuser($uid,'uid');



													  if($user[uid] && $user[groupid]!=3){
														  if($password == $user[password] ){

															  // && $_G['clientip'] == $user['login_ip']
															  if(!$user[picurl])$user[picurl] = avatar($user[username],$user['uid']);
															  $_G[member] = $user;
															  $_G[member][group] = $_G[group][$user[groupid]];
															  $_G[uid] = intval($user[uid]);
															  $_G[groupid] =$user[groupid];
															  if($user[groupid] ==1) $_G[adminid] = 1;
															  $_G[username] =  $user[username];

															   $_G[login_img] ='';

														  }
													  }
											  }
									  }

				if($_G[uid]>0 && $user[uid]>0){
						if($user[groupid] ==3){
							logout();
							msg('??????,?????????????????????,????????????,????????????,???????????????','error','?');
							return false;
						}elseif($user[check] ==0){
							logout();
							msg('??????,?????????????????????,????????????','error','?');
							return false;
						}elseif($user['end_time'] >0 && $user['end_time']<TIMESTAMP){
							logout();
							msg('????????????,????????????????????????,????????????');
						}
				}

			 }

			 if(defined('IN_ADMIN')){
				$id  = $_G[member][groupid];
				if(($_G[adminid]!=1 || ($auth && authcode($_SESSION['auth'],'decode') != $auth))  && $_GET['m']!='login' && $_G[group][$id]['login_admin'] != 1 ){
						$url = URL.'m=login';
						header("Location:".$url);
						echo '<script type="text/javascript">window.location.href = "'.$url.'";</script>';
						exit;
				}


			}

}

function web_upload($file,$path='uploads',$is_img=true){
			global $_G;
			if(!class_exists('upload')) include ROOT_PATH.'web/upload.class.php';
			if(!$file) $file =$_FILES[file];
			if(!$file || !$file[tmp_name]) return false;

			$upload = new upload();
			$img_arr= $attach = array();
			$upload_path = '/assets/'.$_G[setting][template].'/';
	  		$rs = $upload->init($file,$upload_path.$path);
			if(!$rs) return false;

			$attach  = & $upload->attach;

			if($attach['extension'] == 'attach' && $attach['isimage']!=1) {
				@unlink($attach['tmp_name']);
				return false;	//?????????????????????,??????????????????
			}

			$upload_max_size  =$_G['setting']['upload_max_size'] ? intval($_G['setting']['upload_max_size']): intval(ini_get('upload_max_filesize'));
			if($attach['size']>1024*1024*$upload_max_size) msg ('??????????????????,??????????????????????????????:'.$upload_max_size.'MB');
			if($attach['errorcode'])return $upload->errormessage();

			$target = $path.'/'.dgmdate(TIMESTAMP,'Y').'/'.dgmdate(TIMESTAMP,'m').'/'.dgmdate(TIMESTAMP,'j').'/';
			$lang_path = ROOT_PATH.$upload_path.$target;
			if(!is_dir($lang_path)) dmkdir($lang_path);
			$name = dgmdate(TIMESTAMP,'Y').dgmdate(TIMESTAMP,'m').dgmdate(TIMESTAMP,'j').strtolower(random(14));
			$attach['target'] = $lang_path.$name.'.'.$attach['ext'];
			$upload->save();
			$insert_path  = $target.$name.'.'.$attach['ext'];
			$pic = $upload_path.$insert_path;

			return $attach['target'] ;
			//return  taobao_upload_img($pic);

}

function taobao_upload_img($file){
	global $_G;
	//???????????????????????? new =1 ?????????  ??????????????????
	$new = 1;
	if(!$_G[setting][upload_url] || strpos($_G[setting][upload_url],'http://') === false) return $file;
	$_G[upload_index]  = intval($_G[upload_index])+1;
	$url = trim($_G[setting][upload_url],'/').'/upload.php';
	if($new == 1)$url.='?new=1';
	$file_path ='@'.realpath(ROOT_PATH.$file).'';
	$data = array('token'	=>'1','file'=>	$file_path);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true );
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($ch, CURLOPT_REFERER, $_G[setting][upload_url]);
	curl_setopt($ch, CURLOPT_REFERER, $_G[siteurl]);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:110.75.74.69','CLIENT-IP:110.75.74.69'));//IP
	$rs = curl_exec($ch);
	curl_close($ch);

if($new == 1 && strpos($rs,'img_url') !==false && strpos($rs,"var resp = {}") === false){
	$json = json_decode(trim($rs),true);
	if(is_array($json)){
		if($json[img_url] && $json[status] == 'success') {
			@unlink(ROOT_PATH.$file);
			return $json[img_url];
		}else{
			$msg =  "??????????????????????????????:".$json[msg];
			L($msg);
		}
	}
}elseif(strpos($rs,"var resp = {}")!== false){
		$json  = '{'.sub_str($rs,'"{','}"').'"}';
		$json = stripslashes($json);
		$json = json_decode($json,1);

		if(!is_array($json)){
			$json  = '{'.sub_str($rs,'"{','}"').'"}';
			$json = iconv('GBK','UTF-8',$json);
			$json = stripslashes($json);
			$json = json_decode($json,1);
		}
		if(!is_array($json)){
			$json  = '{'.sub_str($rs,    '"{' ,      '"msg' )  ;
			$json = rtrim($json,',"') .'"}';
			$json = stripslashes($json);
			$json = json_decode($json,1);
		}
		if(is_array($json)){
			if($json[img_url] && $json[status] == 'success') {
				@unlink(ROOT_PATH.$file);
				return $json[img_url];
			}else{
				$msg =  "??????????????????????????????:".$json[msg];
				L($msg);
			}
		}
}elseif (strpos($rs,"??????????????????")!== false && $_G[upload_index]<5){
			return  taobao_upload_img($file);
}else{
			$rs = trim_html($rs,1);
			L('????????????????????????????????????'.$rs);
			echo	'???????????????????????????';
}
	return $file;


}



function dsetcookie($var, $value = '', $life = 0, $prefix = 1) {
	global $_G;

	$config =array('cookiepre'=>'ttae_','cookiedomain'=>'','cookiepath'=>'/');
	$_G['cookie'][$var] = $value;
	$var = ($prefix ? $config['cookiepre'] : '').$var;
	$_COOKIE[$var] = $value;
	if($value == '' || $life < 0) {
		$value = '';
		$life = -1;
	}
	if(defined('IN_MOBILE')) {
		$httponly = false;
	}
	$life = $life > 0 ? TIMESTAMP + $life :TIMESTAMP - 31536000 ;
	$secure = $_SERVER['SERVER_PORT'] == 443 ? 1 : 0;

	$rt = setcookie($var, $value, $life,$config['cookiepath'], $config['cookiedomain'],$secure);
	return 	$rt;

}
function return_bytes($val) {
    $val = trim($val);
    $last = strtolower($val{strlen($val)-1});
    switch($last) {
        case 'g': $val *= 1024;
        case 'm': $val *= 1024;
        case 'k': $val *= 1024;
    }
    return $val;
}
function getcookie($key) {
	global $_G;
	return isset($_G['cookie'][$key]) ? $_G['cookie'][$key] : '';
}




function D($arr,$page){
	global $_G;
	if(!is_array($arr)) return false;
	$and		= 		$arr['and'] 	?  $arr['and']: '';
	$limit		= 		$arr['limit'] 	?  $arr['limit'] : 1;
	$field 		= 		$arr['field']	?  $arr['field'] : '*';
	$table 		= 		$arr['table']	?  $arr['table']: 'goods';
	if($arr['time']){
		$time = intval($arr['time']) * 60;
	}else if(isset($_G['setting']['cache_time'])){
		$time =intval($_G['setting']['cache_time']) * 60;
	}

	if($arr['key']){
		$key = $arr['key'].'_'.$_G['page'].'_'.$table;
		$key .= http_build_query($arr) ;
		if($page) $key .= http_build_query($page) ;
		$key = substr(md5($key),0,12);

	}
	$order = '';
	if($arr['order']){
		$order 		= 		$arr['order'] ;
	}else{
		if($table =='goods'){
			if($_G['setting']['goods_sort'] == 1){
				$order = ' `sort` DESC ';
			}else{
				$order = ' aid DESC ';
			}
		}else{
			$tb = table($table);
			if(array_key_exists('sort',$tb)){
				$order .= ' `sort` DESC';
				if(array_key_exists('id',$tb))$order .= ",";
			}
			if(array_key_exists('id',$tb)){
				$order .= ' id DESC';
			}
		}
	}

	if($order) $order = " ORDER BY ".$order;
	if($key && $_G['setting']['cache_time']>0){
		$key.="";
		$rs = memory('get',$key);

		if( $rs && is_array($rs) && count($rs)>0) return $rs;
	}

	if($table == 'goods'){
		
		if(!isset($arr['all']) || !$arr['all']){
			$filter = $_G['setting']['goods_filter'];
			if(!$filter) $filter = 1;
			$and .=" AND status in ( ".$filter." )";
		}

	}


	if($_G[mobile] && $limit>1) {
		if($limit>100) $limit = 100;
	}
	if($page){
					if($page[url]){
						$url =  URL.preg_replace("/.*?\?/is",'',$page[url]);
					}else{
						$url=URL;
					}
					$showpage = '';
					$size= $page[size] ? intval($page[size]) : 120;

					if($_G[mobile] && $size>100)  $size = 100;
					if($_G['inajax'] ==1 && $_G['setting']['ajax_goods_list'] && !defined('APP')) $size = 30;
					$start = ($_G['page']-1)*$size;
					$count = getcount($table,$and);
					$limit = " $start,$size ";
					if($count >0) $showpage = multi($count,$size,$_G[page],$url);
	}
	$and = preg_replace("/^(\s*)AND/is",'',$and);
	$and = trim($and) ? ' WHERE '.$and : '';
	$sql = "SELECT $field FROM ".DB::table($table)." $and $order LIMIT $limit";
	$goods=DB::fetch_all($sql);

	if($goods){
		foreach($goods as $k=>$v){
			if(isset($arr['cut'])|| isset($arr['cutstr'])){
				$cut = explode('|',($arr['cut'] ? $arr['cut'] : $arr['cutstr']));
				if(isset($v[$cut[0]]) && $v[$cut[0]]) $v[$cut[0]] = cutstr($v[$cut[0]],$cut[1],($cut[2]? $cut[2]:''));
			}

			if(isset($arr['parse'])){
				if(is_string($arr['parse']) && function_exists($arr['parse'])){
					$fun = $arr['parse'];
					$result = $fun($v);
					if($result)$goods[$k] = $result;
				}
			}else{
				$result  =parse($table,$v);
				if($result)$goods[$k] = $result;
			}
		}
	}

	if($limit==1 && !$page) $goods = $goods[0];

	if($page){
		$result =   array('goods'=>$goods,'showpage'=>$showpage,'count'=>$count);
	}else{
		$result =    $goods;

	}

	if(!empty($key) && $time>0) {
		$ok = memory('set',$key,$result,$time);
		if(isset($goods['aid'])) memory('set','goods_'.$goods['num_iid'],$result,$time);
	}
	return $result;

}


//?????????????????????
function creat_url($juan_url='',$num_iid ='',$bili_type = 0){
	global $_G;

	if($juan_url &&  strpos($juan_url,'m.taobao.com') !== false && strpos($juan_url,'uland.taobao.com') === false){
			$param = getUrlParam($juan_url);
			$activity_id = $param['activity_id'] ? $param['activity_id'] : $param['activityId'];
			$sid = $param['seller_id'] ? $param['seller_id'] : $param['sellerId'];
			
			if($activity_id){
				$pid = $_G['setting']['pid'] ? $_G['setting']['pid'] : 'mm_13204895_15412677_59200383';
				$quan_url =  'https://uland.taobao.com/coupon/edetail?activityId='.$activity_id;	
				$quan_url .= "&itemId=".$num_iid."&pid=".$pid."&src=kfz_utao";
				if($sid)$quan_url .= "&sid=".$sid;
				$juan_url =$quan_url;
			}
	}
	if($bili_type ==2 ) $juan_url.="&dx=1";
	return $juan_url;
}


function get_tkl($aid,$iid){
				global $_G;
				
			
				if(!$aid && !$iid) return array('status'=>'error','data'=>'','msg'=>'??????id????????????');
				$where = $aid ? " aid = ".$aid : "num_iid = '$iid'";
				$goods = DB::fetch_first("SELECT aid,num_iid,url,juan_url,title,tkl,picurl FROM ".DB::table('goods')." WHERE ".$where);
				if($goods['tkl']){
						return array('status'=>'success','data'=>$goods['tkl'],'msg'=>'');
				}

				$url = '';
				if( $goods['juan_url']){
					$url = creat_url($goods['juan_url'],$goods['num_iid'],$goods['bili_type'] );
				}else if($goods['url'] && strpos($goods['url'],'s.click.taobao.com') !== false){
					$url =$goods['url'];
				}else {
					return array('status'=>'error','data'=>'','msg'=>'?????????????????????????????????,??????????????????????????????????????????,?????????????????????');
				}

				$mama = top('tbk');
				$text=$goods['title'];
				$logo = $goods['picurl'];
				$tkl = $mama->tkl($url,$text,$logo);
				 if($tkl){
				 	DB::update('goods',array('tkl'=>$tkl),'aid='.$goods[aid]);
				 	return array('status'=>'success','data'=>$tkl,'msg'=>'?????????????????????');
				 }else{
				 	return array('status'=>'error','data'=>'','msg'=>'?????????????????????');
				 }

		}





function qrcode($url='',$logo=''){
	global $_G;
	if(empty($url)) return false;
	if(strpos($url,'http') === false ) $url =$_G['siteurl']  .$url;
	

	$val = md5($url);
	$val = substr($val,0,20);
	$path = 'assets/qrcode/'.date('Y/m/');
	$name = $val.'.png';
	$fullname=  $path.$name;
	if(!is_dir(ROOT_PATH . $path)) dmkdir(ROOT_PATH.$path);
	if(is_file(ROOT_PATH.$fullname)) return $_G['siteurl'] . '/' . $fullname;

	if(!class_exists('QRcode'))include_once libfile('class/qrcode');

	QRcode::png($url,ROOT_PATH. $fullname, "L",8, 1);

	if (!empty($logo)) {
		if(strpos($logo,ROOT_PATH) === false)  $logo = ROOT_PATH. ltrim($logo,'/');

		//?????????????????????????????????logo
		if(strpos($logo,'http') !== false && strpos($logo,$_G['siteurl']) === false)  return ;
	    $QR = imagecreatefromstring(file_get_contents(ROOT_PATH. $fullname));
	    $logo = imagecreatefromstring(file_get_contents($logo));
	    $QR_width = imagesx($QR);//?????????????????????
	    $QR_height = imagesy($QR);//?????????????????????
	    $logo_width = imagesx($logo);//logo????????????
	    $logo_height = imagesy($logo);//logo????????????
	    $logo_qr_width = $QR_width / 5;
	    $scale = $logo_width/$logo_qr_width;
	    $logo_qr_height = $logo_height/$scale;
	    $from_width = ($QR_width - $logo_qr_width) / 2;
	    //?????????????????????????????????
	    imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,
	        $logo_qr_height, $logo_width, $logo_height);
	    imagepng($QR,ROOT_PATH. $fullname);
	}

	return $_G['siteurl'] .'/' . $fullname;
}


function get_my_qrcode($logo = ''){
		global $_G;
		$url = $_G['siteurl'];
		if($_G['uid']>0) $url.="/?u=".$_G['uid'];
		return qrcode($url,$logo);
}



?>
