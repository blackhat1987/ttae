<?php
/**
 * 
 * @authors TTAE (d_cms@qq.com)
 * @date    2016-08-09 10:06:00
 * @version 1.0.0
 */

include_once ROOT_PATH.'inc/api/apiBase.class.php';

class api_lianmeng  extends apiBase{
   
  function __construct(){
      global $_G;

      $this->use_taobaoke();

  }

   /**
    * 获也能淘宝联盟选品库列表
    * http://open.taobao.com/docs/api.htm?scopeId=11655&apiId=26620
    * @return [type] [description]
    */
   function get_cate (){
        global $_G;
        include_once(ROOT_PATH . 'top/tbk/TbkUatmFavoritesGetRequest.php');
       
        $req = new TbkUatmFavoritesGetRequest;
        $req->setPageNo("1");
        $req->setPageSize("200");
        $req->setFields("favorites_title,favorites_id,type");
        $req->setType("-1");
        $resp = $_G['TOP']->execute($req);
        top_check_error($resp, 1);
        $rs  = $this->parse($resp);
        return array('count'=>$resp->total_results,'data'=>$rs);
   }

   function parse($obj){
        $item = $obj->results->tbk_favorites;
        $result = array();
        foreach ($item as $k => $v) {
                $rs = array();
                $rs['id'] = $v->favorites_id;
                $rs['title'] = $v->favorites_title;
                $rs['type'] = $v->type;

                if($rs['type']  ==1){
                    $rs['type_name'] ='普通选品组';
                }else if($rs['type']  ==2){
                    $rs['type_name'] ='高佣选品组';
                }else if($rs['type']  ==3){
                    $rs['type_name'] ='定向招商';
                }

                $result[]  = $rs;
        }
        return $result;
   }

   function get($fd){


   }

   /**
    * 根据选品据ID获取商品列表
    * @param  [type] $id [description]
    * @param  [type] $adzoneId [description]
    * @return [type]     [description]
    */
   function get_list ($id,$adzoneId,$page){
        global $_G;

        include_once(ROOT_PATH . 'top/tbk/TbkUatmFavoritesItemGetRequest.php');
        $req = new TbkUatmFavoritesItemGetRequest;
        $req->setPlatform("1");
        $req->setPageSize("100");

        $req->setAdzoneId($adzoneId);
        $req->setUnid('id'.$id);
        $req->setFavoritesId($id);
        $req->setPageNo($page);
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,item_url,seller_id,volume,nick,shop_title,zk_final_price_wap,event_start_time,event_end_time,tk_rate,status,type,click_url,coupon_click_url,coupon_info,coupon_end_time,coupon_start_time,coupon_total_count,coupon_remain_count");


        $resp = $_G['TOP']->execute($req);


        if($resp->code == 15 && $resp->sub_msg == 'adzone_id不正确') {
          msg('淘宝客appkey和pid非同一个站点,请在联盟检查后重新设置');
        }
    
        top_check_error($resp, 1);
        $rs  = $this->parse_list($resp);

        $rt = array();
        if(count($rs) == 0  || !$resp->results){
            $rt['count'] =0;
        }else{
            $rt['count'] = $resp->total_results;
        }
        $rt['goods'] = $rs;
        return $rt;

   }

   function parse_list($rs){
          $arr = array();
          $item= $rs->results->uatm_tbk_item;

          foreach ($item as $k => $v) {
                  if($v->status != 1 )  continue;  //下架了
                    if($v->type != 1 && $v->type != 2 )  continue;  //活动结束了

                  $tmp = array();
                  $tmp['end_time'] =  $v->event_end_time;
                  $tmp['start_time'] = $v->event_start_time;
                  if($tmp['end_time'] =='1970-01-01 00:00:00')   $tmp['end_time']=0;
                  if($tmp['start_time']=='1970-01-01 00:00:00') $tmp['start_time']=0;


                  $tmp['url'] = $v->click_url;
                  $tmp['nick'] = $v->nick;
                  $tmp['num_iid'] = $v->num_iid.'';
                  $tmp['picurl'] = $v->pict_url;
                  $tmp['price'] = $v->reserve_price;
                  $tmp['images'] = array();
                  foreach ($v->small_images->string as $key => $value) {
                         $tmp['images'][] = $value;
                  }
                  $tmp['images'] = implode(',',$tmp['images']);
                  $tmp['title'] = $v->title;
                  $tmp['sum'] = $v->volume;
                  $tmp['yh_price'] = $v->zk_final_price;
                  $tmp['shop_type'] = $v->user_type;
                  $tmp['bili'] = $v->tk_rate;
                  $tmp['sid'] = $v->seller_id.'';
                 

                  if($v->coupon_info) {
                           $tmp['juan_url'] = $v->coupon_click_url;
                            $tmp['juan_price'] = $v->coupon_info;
                            $juan_price = $v->coupon_info;
                            preg_match("/满([\d\.]{1,6})元减([\d\.]{1,6})元/is",$juan_price,$data);
                            if($data && $data[2]){
                              $tmp['juan_price']    = $data[2];
                            }else if(!$data && strpos($juan_price,'元无条件券') !== false){
                              $tmp['juan_price']    = str_replace('元无条件券','',$juan_price);
                            }
                            //防止无条件券,价格为负数
                            if($tmp['yh_price'] - $tmp['juan_price'] <0) continue;
                  }
                $arr[] = $tmp;
          }

          return $arr;

   }

}