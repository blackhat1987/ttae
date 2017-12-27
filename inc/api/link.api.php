<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 

include_once ROOT_PATH.'inc/api/apiBase.class.php';
class api_link  extends apiBase{

    //高佣转链API
    function get($iid='',$active_id='') {
        global $_G;
            if(empty($iid)) return '商品id不能为空';
    		$taoke_token = $_G['setting']['tk_token'];
            if(empty($taoke_token)) return 'token不能为空';
            if(empty($_G['setting']['tk_pid'])) return  'tk_pid不能为空';

            $url = 'http://tbapi.00o.cn/highapi.php';
            $pid = explode('_',$_G['setting']['tk_pid']);
            $req_data = array('item_id'=>$iid,'adzone_id'=>$pid[3],'site_id'=>$pid[2],'token'=>$taoke_token,'platform'=>1);
            $rs = fetch($url,$req_data);
            if(empty($rs)) return '转换的信息返回为空';
            $rs = json_decode($rs,1);
            if(empty($rs) )return '数据格式化失败';
            if(isset($rs['code']))  return str_replace("淘客",'推广',$rs['sub_msg']);
            if(empty($rs['result']['data'])) return '数据转换失败';
            $data = $rs['result']['data'];
            $url = $data['coupon_click_url'];
            if(!empty($active_id))  $url .='&activityId='.$active_id;
            return $url;
    }

    function parse($arr){
        return $arr;
    }

}