<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 

class apps extends app{
	public function main(){		
				seo('手机app');
				$this->show();			
		}
		
		function help(){
			seo('帮助中心 '.$_G[setting][title]);
			$this->show();
		}
		function about(){
			seo('关于'.$_G[setting][title]);
			$this->show();
		}
		
		
		function download(){
			global $_G;
			if($_GET['type'] == 1) {		//ios
				if(empty($_G['setting']['app_iphone_url']))  msg('ios版本不存在');
				@header("Location:".$_G['setting']['app_iphone_url']);
			}else if($_GET['type'] == 2){	//android
				if(empty($_G['setting']['app_andorid_url']))  msg('android版本不存在');
				if(strpos($_G['setting']['app_andorid_url'],'http') !== false) {
						@header("Location:".$_G['setting']['app_andorid_url']);
				}else{
					$file = ROOT_PATH . ltrim($_G['setting']['app_andorid_url'],'/');
					$this->load($file);
				}
			}
			
		}


		function load($path_name){
	         ob_end_clean();
	         $hfile = fopen($path_name, "rb") ;
	         Header("Content-type: application/octet-stream");
	         Header("Content-Transfer-Encoding: binary");
	         Header("Accept-Ranges: bytes");
	         Header("Content-Length: ".filesize($path_name));
	         Header("Content-Disposition: attachment; filename=".basename($path_name));
	         while (!feof($hfile)) {
	            echo fread($hfile, 32768);
	         }
	         fclose($hfile);
		}
		
		
		
}
?>