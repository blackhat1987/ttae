<?php
if(!defined('IN_TTAE')) exit('Access Denied');

class tui {
    public function main(){
        //global $_G;
        // $name = date("Y-m-d").'_ip.txt';
        // file_put_contents(ROOT_PATH.$name,$_G['clientip']."\r\n",FILE_APPEND);
        $src = ROOT_PATH."assets/global/images/11.png"; //空图片
        $size = getimagesize($src); //获取mime信息 
        ob_clean();
        $fp=fopen($src, "rb"); //二进制方式打开文件 
        header("Content-type: ".$size['mime']); 
        fpassthru($fp); // 输出至浏览器 
        //header("Location:/assets/app_img/index_biqiang.png");
    }
    
}

?>