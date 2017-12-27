<?php
/**
 * 
 * @authors TTAE (d_cms@qq.com)
 * @date    2016-08-09 10:06:00
 * @version 1.0.0
 */



class api_alimama {
  private $query_count = 0;
  public $size = 30;
  public $page = 1;
  public $kw = '';          //搜索的关键字
  public $sum = 0;          //月销量
  public $shop_type = -1; // 店铺类型   淘宝=0  天猫=1
  public $fid = 0; // 频道,对应下面的cates 中的id

  public $start_bili = 10;   //收入比例
  public $end_bili = 0;     //结果比例

  public $start_price = 0;  //起始价格范围
  public $end_price = 0;    //结束价格范围
 
  public $get_quan = true;  //是否强制获得店铺优惠券
  public $gaoyong = true;  //是否走鹊桥高佣
  public $hot_user = false;  //金牌卖家
  public $yxjh = true;  //营销计划
  public $no_niupixuan = false;  //过滤牛皮鲜
  

  //高佣分类  必须gaoyong为true时才可以
  //'1'=>'女装',  '2'=>'男装',  '3'=>'鞋包',  '4'=>'珠宝配饰',  '5'=>'运动户外', 
  //'6'=>'美妆',  '7'=>'母婴',  '8'=>'食品',  '9'=>'内衣',  '10'=>'数码',  '11'=>'家装',  '12'=>'家居用品',
  //'13'=>'家电',  '14'=>'汽车',  '15'=>'生活服务',  '16'=>'图书音像',  '17'=>'游戏话费',  '64'=>'其它' 

   public $sort = 1;//默认按佣金比例来排;
   private  $sorts =  array(
          'bili'=>1,
          'price_desc'=>3,
          'price_asc'=>4,
          'month_sum'=>5, //近30天累计被推广的笔数
          'month_money'=>7,//近30天累计支出的佣金
          'start_time'=>13,//活动开始时间从近到远
          'end_time_desc'=>11,//活动剩余时间从长到短
          'end_time_asc'=>11,//活动剩余时间从短到长
          'sum'=>9,         //销量
    );

   function get($query=array()){
        $rs = $this->get_list($query);
        if($rs['status'] =='error')   return $rs;
        if(empty($rs['data'])) return $rs;
        $list = $rs['data'][0];
        return $this->success($list);
   }

private   function success($data = null,$msg=''){
    return (array('status'=>'success','msg'=>$msg,'data'=>$data));
  }

 private function error($msg=''){
    return(array('status'=>'error','msg'=>$msg,'data'=>null));
  }

  //设置查询参数
   function set_params ($param = array()){
        if($this->query_count > 1) return $this;
        if(empty($param)) {
       
            if(!empty($this->kw) && dstrlen($this->kw) >= 20 )  $this->start_bili = 0 ;
    
           
           return $this;
        }else if(is_string($param)) {
            $this->kw = $param;
        }else if(is_array($param)){
            foreach($param as $k=>$v){
              $this->$k = $v;
            }
        }

        if(!empty($this->kw) && dstrlen($this->kw) >= 20 )  $this->start_bili = 0 ;

         return $this;
   }

   function set_get(){
          foreach($_GET as $k=>$v){
              if(isset($this->$k)) $this->$k = trim_html($v);
          }
   }

   function get_list ($query = array()){
      global $_G;
        $this->query_count++;

        $this->set_params($query);

        if($this->query_count > 5 )  return $this->error('没有找到商品');

        $url = "http://pub.alimama.com/items/search.json?";
        if($this->gaoyong){
            $url = "http://pub.alimama.com/items/channel/qqhd.json?channel=qqhd";  
           if( $this->fid > 0 ) $url .="&level=1&catIds=".$this->fid;
        }else{
           // if(!empty($this->yxjh) ) $url .="&shopTag=yxjh";
             $url .= "&yxjh=" . (empty($this->yxjh) ?  -1 : 1);
        }

        if(!empty($this->kw)) $url .="&q=". urlencode($this->kw);

        if(($this->no_niupixuan)) $url .=  '&npxType=1';
        $url .="&_t=".TIMESTAMP."&toPage=".$this->page;
        $url .="&perPageSize=".$this->size."&t=".TIMESTAMP."&_tb_token_=&pvid=";

        if($this->get_quan)$url .="&dpyhq=1";
        
        if($this->sum > 0 ) $url .="&startBiz30day=".$this->sum;
        if($this->start_bili > 0 ) $url .="&startTkRate=".$this->start_bili;
        if($this->end_bili > 0 ) $url .="&endTkRate=".$this->end_bili;    
        if($this->start_price > 0 ) $url .="&startPrice=".$this->start_price;
        if($this->end_price > 0 ) $url .="&endPrice=".$this->end_price;
        if($this->shop_type> -1) $url .="&userType=".$this->userType;
        if($this->hot_user) $url .="&jpmj=1";

        $query = fetch($url);
        if(empty($query))  return $this->error($_G['msg']  ? $_G['msg']  : '没有更多了');
        $data = json_decode($query, true);
        $status = $data['data']['head']['status'];

        //if ($status == 'NORESULT')  return $this->error('您搜索的商品不存在');
        $goods = $data['data']['pageList'];

        if(empty($goods) && !empty($this->kw)) {
     
          //没找到,再换个参数找
          if($this->gaoyong) {
              $this->gaoyong = false;
              if(isset($query['gaoyong'])) unset($query['gaoyong']);
          }else if($this->yxjh){
               $this->yxjh = false;
          }else {
            //没有找到,就降低要求
              $this->yxjh = false;
              $this->start_bili = 0;
              if($this->sum > 0 )  $this->sum = 0;
              if($this->shop_type > -1 )  $this->shop_type = -1;
              if($this->get_quan)  $this->get_quan = false;
          }
           return $this->get_list();
        }


        $list = $this->parse_list($goods);
        return $this->success($list);
   }

   function parse_list($goods){
      global $_G;
         $rs = array();
        foreach($goods as $k=>$v){
          $tmp = array();
          $tmp['title'] = strip_tags($v['title']);
          $tmp['nick'] = $v['nick'];
          $tmp['sid'] = $v['sellerId'];
          $tmp['picurl'] = 'http:'.$v['pictUrl'];
          $tmp['num_iid'] = $v['auctionId'];
          if($this->gaoyong) {
              $tmp['bili'] = $v['eventRate'];
          }else{
              $tmp['bili'] = $v['tkRate'];
          }
        
          $tmp['yongjin'] = $v['tkCommFee'];
          $tmp['url'] = $v['auctionUrl'];
          $tmp['sum'] = $v['biz30day'];
          $tmp['price'] = $v['reservePrice'];
          $tmp['yh_price'] = $v['zkPrice'];
          
          if(!empty($v['couponEffectiveEndTime'])) {
            $tmp['start_time'] = dmktime($v['couponEffectiveStartTime']) + 86399;
            $tmp['end_time'] = dmktime($v['couponEffectiveEndTime']) + 86399;
          }else if(!empty($v['dayLeft'])){
            $tmp['end_time'] = strtotime('+'.$v['dayLeft']);
          }

          $tmp['juan_price'] = $v['couponAmount'];
          $tmp['juan_url'] = $v['couponLink'];


          $tmp['fid'] =$tmp['cate'] =$tmp['flag'] = 0;
          $tmp['images'] = array();
          //$tmp['shop_type'] = ;
          $tmp['tkl'] ='';
          $tmp['bili_type'] = 1;
          $tmp['status'] = 1;
          $tmp['url'] =$_G['siteurl'].'/?a=go_pay&num_iid='.$tmp['num_iid'];
          $tmp['id_url'] =  $_G['siteurl'].'/?itemid='.$tmp['num_iid'].'&ma=1';
          $tmp['share_url'] = $_G['siteurl'].'/?itemid='.$tmp['num_iid'].'&ma=1';
          $rs[] = $tmp;
        }
        return $rs;
   }





}