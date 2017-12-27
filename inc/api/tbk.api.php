<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 
//http://open.taobao.com/apidoc/api.htm?path=scopeId:11655-apiId:24515	taobao.tbk.item.get 淘宝客基础API
//http://open.taobao.com/apidoc/api.htm?path=scopeId:11260-apiId:22569	obao.tbk.items.get 淘宝客推广商品查询

//阿里妈妈 申请网站后对应淘宝客api
include_once ROOT_PATH.'inc/api/apiBase.class.php';
class api_tbk  extends apiBase{
	public $get_ext = true;

    function __construct(){
        $this->use_taobaoke();
    }
    
   /*
   
   用初级包,则需要用基础包来扩展信息字段
   用基础包,就必须用初级包来扩展信息字段
   
   */
   
   //淘宝客基础API
	//http://open.taobao.com/doc2/apiDetail.htm?spm=0.0.0.0.D8quLk&scopeId=11655&apiId=24515
    function get($arr) {
        global $_G;
		
        include_once(ROOT_PATH . 'top/tbk/TbkItemGetRequest.php');
        $req = new TbkItemGetRequest;
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
		if(!$arr['keyword'] && !$arr['cid']){
			return array('count'=>0,'goods'=>array());
		}
		
		if($arr['keyword'])$req->setQ($arr['keyword']);
		if($arr['cid'])$req->setCat($arr['cid']);
		$req->setItemloc($arr['area']);
		//$req->setSort($arr['sort']);
		$req->setIsTmall($arr['mall_item']);
		if($arr['start_price'])$req->setStartPrice($arr['start_price']);
		if($arr['end_price'])$req->setEndPrice($arr['end_price']);
		if($arr['start_commission_rate'])$req->setStartTkRate($arr['start_commission_rate']*100);
		if($arr['end_commission_rate'])$req->setEndTkRate($arr['end_commission_rate'] * 100);

		$req->setPageNo($arr['page_no']);
		$req->setPageSize($arr['page_size']);

        $resp = $_G['TOP']->execute($req);

        top_check_error($resp, $this->show_error);
		$rt = array();
		$rt['count'] = $resp->total_results;
		
		if($rt['count']==0) return array('count'=>0,'goods'=>array());
		$rt['goods'] =  $this->parse($resp);

        return $rt;
    }
	
	
	
    function parse($resp) {
        $items=$resp->results->n_tbk_item;
		$goods_list = array();
	
		foreach($items as $k=>$item){
				$arr = array();
				
				$num_iid = $arr['num_iid'] =		(string)$item->num_iid ;						//商品ID
				$arr['title'] = 		trim_html($item->title,1);							//商品标题
				
				$arr['picurl'] = 		$item->pict_url;						//商品缩略图
				$arr['url'] = 			$item->item_url;						//商品链接地址
				$arr['price'] =			fix($item->reserve_price,1);			//原价
				$arr['yh_price'] =			fix($item->zk_final_price,1);			//原价
				$arr['images'] =	$item->small_images->string;
				$arr['shop_type'] =		$item->user_type ==1 ?'1':'2';	
				$arr['sid'] =		$item->seller_id."";	
				
				//所有淘客API不返回这些字段
				 $arr['nick'] =      $item->nick;    
                $arr['sum'] =       $item->volume;  
                $arr['bili']  = '';
				
							
			$goods_list[$num_iid] = $arr;
		}

		//if(!$this->get_ext)return $goods_list;

		foreach($data as $k=>$v){
			$iid = $v['num_iid'];
			$goods_list[$iid] = array_merge($goods_list[$iid],$v);
		}
		return $goods_list;

    }
	
	
	
	


    /*
     * 淘宝客商品关联推荐查询
     * @paremt relate_type 推荐类型，
     * 1:同类商品推荐，
     * 2:异类商品推荐，
     * 3:同店商品推荐，此时必须输入num_iid;
     * 4:店铺热门推荐，此时必须输入user_id，这里的user_id得通过taobao.tbk.shop.get这个接口去获取user_id字段;
     * 5:类目热门推荐，此时必须输入cid
     *
     * */

 	function get_shop($uid,$nick,$size =20) {
        global $_G;

        include_once(ROOT_PATH . 'top/tbk/TbkShopsDetailGetRequest.php');
        $req = new TbkShopsDetailGetRequest;
        $req->setFields("user_id,seller_nick,shop_title,pic_url,shop_url");
		if($uid)$req->setSids($uid);
		if($nick)$req->setSellerNicks($nick);

        $resp = $_G['TOP']->execute($req);
        top_check_error($resp,$this->show_error);
		
		$rs = $this->parse_shop($resp);
        return $rs;
    }
	
	function parse_shop($resp){
		$item = (array)$resp->tbk_shops->tbk_shop[0];
		
		$shop = array();
		$shop['picurl'] = $item['pic_url'] ;
		$shop['nick'] = $item['seller_nick'] ;
		$shop['title'] = $item['shop_title'] ;
		$shop['url'] = $item['shop_url'] ;
		$shop['sid'] = $item['user_id'].'';
		
		return $shop;
		
	}


	function get_goods($num_iid){
			return $this->get_info($num_iid);
			
	}


	 /*
     * 淘宝客商品详情（简版）
     * taobao.tbk.item.info.get
     * $ids 商品num_iid列表,最多40个
     * */
    function get_info($ids) {
        global $_G;
        include_once(ROOT_PATH . 'top/tbk/TbkItemInfoGetRequest.php');
        if (is_array($ids)) {
            $ids = implode(",", $ids);
        }

        $req = new TbkItemInfoGetRequest;
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,nick,volume,seller_id");
        $req->setPlatform(1);
        $req->setNumIids($ids);

        $req->setPlatform(1);
        $resp = $_G['TOP']->execute($req);

        top_check_error($resp, $this->show_error);
        $rs = $this->parse_info($resp);

		if(count($rs) ==1 && $rs){
			sort($rs);
			$rs = $rs[0];
		}
        return $rs;
    }

    function parse_info($resp) {
        $item = $resp->results->n_tbk_item;
        $arr = array();

        foreach ($item as $k => $v) {
            $tmp = array();
            $tmp['url'] = $v->item_url;
			$tmp['nick'] = $v->nick;
			$tmp['sum'] = $v->volume;	//30天销量
            $num_iid = $tmp['num_iid'] =''. $v->num_iid;
            $tmp['picurl'] = $v->pict_url;

            $tmp['price'] = $v->reserve_price;
            $tmp['yh_price'] = $v->zk_final_price;
            $tmp['images'] = $v->small_images->string;
            $tmp['title'] = $v->title;
            $tmp['shop_type'] = $v->user_type == 1 ? 1 : 2;
            $tmp['sid'] = $v->seller_id."";

            //if( $tmp['yh_price'] != $tmp['price'] ) {
              //  $tmp['zk']	= sprintf("%.1f",($tmp['yh_price']/$tmp['price']*10));
              //  $tmp['zk']	= 	str_replace('.0','',$tmp['zk']);
            //}
            $arr[$num_iid] = $tmp;
        }

        return $arr;
    }





    /*
     * 淘宝客商品关联推荐查询
     * @paremt relate_type 推荐类型，
     * 1:同类商品推荐，
     * 2:异类商品推荐，
     * 3:同店商品推荐，此时必须输入num_iid;
     * 4:店铺热门推荐，此时必须输入user_id，这里的user_id得通过taobao.tbk.shop.get这个接口去获取user_id字段;
     * 5:类目热门推荐，此时必须输入cid
     *
     * */

    function get_recommend($relate_type, $id,$size =20) {
        global $_G;

        include_once(ROOT_PATH . 'top/tbk/TbkItemRecommendGetRequest.php');
        $req = new TbkItemRecommendGetRequest;
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
        $req->setRelateType($relate_type);

        if ($relate_type == 4) {
            $req->setUserId($id);
        } else if ($relate_type == 5) {
            $req->setCat($id);
        }else{
            $req->setNumIid($id);
        }
        $req->setCount($size);
        $req->setPlatform(1);
        $resp = $_G['TOP']->execute($req);
        top_check_error($resp,$this->show_error);
        $rs  = $this->parse_info($resp);
        return $rs;
    }

//http://open.taobao.com/docs/api.htm?spm=a219a.7395905.0.0.6aGd7i&apiId=31127
//2017.10.11 已升级
public    function tkl($url,$text,$logo_url,$user_id = 1,$ext=""){
                global $_G;

                    include_once(ROOT_PATH . 'top/tbk/TbkTpwdCreateRequest.php');
                    $req = new TbkTpwdCreateRequest;
                    $req->setUserId($user_id );
                    $req->setText($text);
                    $req->setUrl( $url);
                    $req->setLogo($logo_url);
                    if(!empty($ext) && is_array($ext))  $ext = json_encode($ext);

                    $resp = $_G['TOP']->execute($req);
                    top_check_error($resp,$this->show_error);
                    $tkl=  $resp->data->model;
                    return $tkl;

    }


    //taobao.tbk.privilege.get (单品券高效转链API)
    //http://open.taobao.com/docs/api.htm?spm=a1z6v.8204065.c3.32.1nC2UY&apiId=28625#
    //一般用户无权限
    function quan($iid,$pid){
             global $_G;
             if(!$pid) $pid = $_G['setting']['pid'];
             include_once(ROOT_PATH . 'top/tbk/TbkPrivilegeGetRequest.php');
             
             $req = new TbkPrivilegeGetRequest;
            $req->setItemId($iid);
            $pid = explode('_',$pid);
            $req->setAdzoneId($pid[3]);
            $req->setPlatform("2");
            $req->setSiteId($pid[2]);
            // $req->setMe("");

            $resp = $_G['TOP']->execute($req, $_SESSION['user']['refresh_token']);
          
            top_check_error($resp,$this->show_error);

    }


    function get_quan_list($keyword  = '',$cate=0,$pid=''){
            global $_G;
            if(!$pid) $pid = $_G['setting']['tk_pid'];
            include_once(ROOT_PATH . 'top/tbk/TbkDgItemCouponGetRequest.php');
         $pid = explode('_',$pid);
        $req = new TbkDgItemCouponGetRequest;
        $req->setAdzoneId($pid[3]);
        $req->setPlatform(2);
        if(!empty($cate)){
            if(is_numeric($cate)) {
                $req->setCat($cate);
            }else{
                $req->setQ($cate);
            }
        }
        $req->setPageSize(30);
        if(!empty($keyword))$req->setQ($keyword);
        $req->setPageNo($_G['page']);

        $resp = $_G['TOP']->execute($req);
        top_check_error($resp,$this->show_error);
   
        return $this->parse_quan_list($resp->results->tbk_coupon);
    }

    function parse_quan_list($list = array()){
        $rs = array();
        foreach($list as $k=>$v){
            $tmp = array();
             $tmp['title'] = $v->title;
            $tmp['cid'] = $v->category;
            $tmp['bili'] = $v->commission_rate;
            $tmp['juan_url'] = $v->coupon_click_url;
            $tmp['end_time'] = dmktime($v->coupon_end_time);
            $tmp['sum'] = max($v->coupon_remain_count,$v->volume);
            $tmp['ly'] = $v->item_description;

            $tmp['price'] = $v->zk_final_price;
            $tmp['yh_price'] = $v->zk_final_price;
            $tmp['nick'] = $v->nick;
            $tmp['num_iid'] = $v->num_iid;
            $tmp['picurl'] = $v->pict_url;
            $tmp['sid'] = $v->seller_id;
            if($v->coupon_info){
                preg_match("/满([\d\.]{1,6})元减([\d\.]{1,6})元/is",$v->coupon_info,$quan);
                if($quan && $quan[2]){
                    $tmp['juan_price']    = $quan[2];
                }else if(!$quan && strpos($v[14],'元无条件券') !== false){
                    $tmp['juan_price']    = str_replace('元无条件券','',$v->coupon_info);
                }
                //防止无条件券,价格为负数
                if($tmp['juan_price'] > 0 && $tmp['yh_price'] - $tmp['juan_price'] <0) continue;
             }

            $tmp['shop_type'] = $v->user_type == 1 ? 'B' :'C';

            $rs[]  = $tmp;
        }
        return $rs;
    }




}