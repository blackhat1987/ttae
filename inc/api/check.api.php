<?php
/**
 * 商品检测类
 */

class api_check  {
	public $cache_time = 5;		//缓存时间
	public $debug = false;
	public $and = '';

	function check_all($focus = false){
			global $_G;
			if($focus){
			}else if(!$this->is_update()) {
				return true;
			}

			$filter = $_G['setting']['goods_filter'];
			$this->and = !empty($filter) ? " status in (".$filter.") " : ' status = 1 ' ;


			$time = intval($_G['setting']['check_time']);
			if($time  < 5) $time = 5;
			$this->cache_time = $time;
		
			$this->check_online();
			

			$list = unserialize($_G['setting']['goods_check']);
			$del = $list['del_end_time'];
			if($list['check_end'])	$this->check_end($del);
			$this->check_quan_end($list['check_quan_end']);

			if($list['check_start'])	$this->check_start();
			if($list['check_sid'])	$this->check_sid();

			if($list['check_url'])	$this->check_url();	//先测测url是否为空,是就代码从未更新过
			if($list['check_price'])	$this->check_price();
			if($list['check_juan'])	$this->check_juan();
			if($list['cover_ehy'])	$this->cover_ehy();
			if($_G['setting']['check_bili']>0)	$this->check_bili($_G['setting']['check_bili']);
			if($list['bc_get_msg'])	$this->bc_get_msg();
			if($list['check_fanli'])	$this->check_fanli();

			$this->add_cache();
	}

	/**
	 * 检测已上线的商品, 如果优惠活动时间或已结束则将商品标记为:已下架
	 * @param  boolean $count [description]
	 * @return [type]         [description]
	 */
	function check_end ($del=false){
		$and =  $this->and. " AND end_time >0 AND end_time <". TIMESTAMP;

		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}
		
		$rt= $this->exec($and,2,$del);
		$text = '已下架';
		if($del) $text = '已删除';
		if($rt>0)$this->log($rt.'条商品已结束促销活动,状态更新为:'.$text);
		return $rt;
	}


	
	/**
	 * 优惠券到期的商品, 清空券或是删除券 或是不处理
	 * @param  boolean $count [description]
	 * @return [type]         [description]
	 */
	function check_quan_end ($type){
		if($type ==2) return ;
		$and = " status in (2,4) ";
		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}
		
		$text = '';
		if($type == 0){		//清空优惠券
			$text = '已清空优惠券并修改状态为:无优惠券';
			$rt= $this->exec($and,array('juan_url'=>'','juan_price'=>'','tkl'=>'','quan_sum'=>'','quan_num'=>'','status'=>'5'));
		}else if($type == 1){	//删除商品
			$text = '已删除商品';
			$rt= $this->exec($and,'',true);
		}else {
			return ;
		}

		if($rt>0)$this->log($rt.'条商品的优惠券到期,状态更新为:'.$text);
		return $rt;
	}



	/**
	 * 检测预告商品
	 * 检测商品,是否已到开始时间,已到设定时间,则将商品状态标记为:已上架
	 * @return [type] [description]
	 */
	function check_start(){
		$and = " status != 3 AND start_time > ".TIMESTAMP;
		$and2 = "  status != 1 AND start_time > ".TODAY." AND start_time < ".TIMESTAMP;

		if($this->debug) { 
			$count = getcount('goods',$and);
			$count2 = getcount('goods',$and2);
			$this->L(__FUNCTION__."---->".$count.'---->'.$count2);
			return ;
		}



		$r1 = DB::update('goods',array('status'=>3),$and);
		$r2 = DB::update('goods',array('status'=>1),$and2);

		if($r1>0)$this->log($rt.'条商品还未到上线时间,状态更新为:预告商品');
		if($r2>0)$this->log($rt.'条商品已到达上线时间,状态更新为:正常显示');
		return array($r1,$r2);
	}


	/**
	 * 检测已上线的商品, 将不存在优惠券的商品状态标记为:无优惠券
	 * @param  boolean $ehy 是否强制二合一的链接
	 * @return [type]       [description]
	 */
	function check_juan(){

		$and =  $this->and. "  AND juan_url = '' ";
		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}

		$rt =  $this->exec($and,5);
		if($rt>0)$this->log($rt.'条商品没有优惠券,状态已更新为:无优惠券');
		return $rt;
	}

	/**
	 * 检测已上线的商品,将没有二合一券的商品标记为:非二合一
	 * @param  [type] $count [description]
	 * @return [type]        [description]
	 */
	function check_ehy(){

		$and =  $this->and. " AND juan_url != '' AND juan_url not like '%uland.taobao.com%' ";
		
		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}

		
		$rt =  $this->exec($and,6);
		if($rt>0)$this->log($rt.'条商品优惠券不是二合一,状态已更新为:非二合一');
		return $rt;
	}
	
	/**
	 * 自动将全站有优惠券的的商品转换成二合一
	 * 商品必须是未转换二合的商品,并且优惠时间还没有结束
	 * 一次最多更新300条
	 * @return [type] [description]
	 */
	function cover_ehy(){
		global $_G;
		if(!$_G['setting']['pid']) return false;
		$pid = $_G['setting']['pid'];

		$and = "  juan_url like '%shop.m.taobao.com%' ";

		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}

		$rs = DB::fetch_all("SELECT aid,juan_url,num_iid,bili_type,status,sid FROM ".DB::table('goods')." WHERE ".$and ." ORDER BY aid DESC LIMIT 300");
		$success = 0;
		foreach($rs as $k=>$v){

			$url = getUrlParam($v['juan_url']);
			$activity_id = $url['activity_id'] ? $url['activity_id'] : $url['activityId'];
			$sid = $url['seller_id'] ? $url['seller_id'] : $url['sellerId'];
			if($activity_id && $sid){
				$quan_url =  'https://uland.taobao.com/coupon/edetail?activityId='.$activity_id;	
				$quan_url .= "&itemId=".$v['num_iid']."&pid=".$pid."&src=kfz_utao";
				if($sid)$quan_url .= "&sid=".$sid;
				if($v['bili_type'] ==2 ) $quan_url.="&dx=1";
				
				$up = array('juan_url'=>$quan_url);
				if($v['status'] == 6) $up['status']=1;

				if(!$v['sid'])$up['sid'] = $sid;
				DB::update('goods',$up,'aid='.$v['aid']);
				$success ++;
			}
		}
	
		if($success>0)$this->log($success.'条优惠券链接已更新为二合一,且状态已更新为:已上架');
		return $success;
	}
	

	/**
	 * 检测已上线的商品, 如果没有转换url或url为空,则当前商品是没有转换高佣的商品,将商品标记为:待更新
	 * @return [type] [description]
	 */
	function check_url(){
		$and= str_replace(array('(0,',',0'),array('(',''),$this->and);

		$and = $and.  " AND url = '' ";
		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}
		
		$rt =  $this->exec($and,0);
		if($rt>0)$this->log($rt.'条没有转换高佣链接的商品,状态已更新为:待更新');
		return $rt;
	}

	/**
	 * 检测待更新的商品, 如果有url,将商品标记为:已上架
	 * @return [type] [description]
	 */
	function check_online(){
		$and = " AND status = 0 AND url != '' ";
		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}
		
		$rt =  $this->exec($and,1);
		if($rt>0)$this->log($rt.'条未上架的商品,状态已更新为:已上架');
		return $rt;
	}


	/**
	 * 检测已上架的商品的佣金率低于设定值,标记为:低佣金
	 * @param  [type] $bili [description]
	 * @return [type]       [description]
	 */
	function check_bili($bili){
		if(!$bili) $bili = 15;

		$and =  $this->and. "  AND bili > 0  AND bili < ". $bili ;
		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}

		$rt= $this->exec($and,7);
		if($rt>0)$this->log($rt.'条已上架的商品佣金低于'.$bili.',商品状态已更新为:低佣金');
		return $rt;
	}



/**
	 * 防止出现价格混乱,检测已上架的商品的活动价低于优惠券价,则标记为:信息有误
	 * @return [type]       [description]
	 */
	function check_price(){

		$and =  $this->and. "  AND yh_price < juan_price";
		if($this->debug) { 
			$count = getcount('goods',$and);
			$this->L(__FUNCTION__."---->".$count);
			return ;
		}
		
		$rt= $this->exec($and,8);
		if($rt>0)$this->log($rt.'条已上架的商品优惠券价低于优惠券价格,商品状态已更新为:信息有误');

		return $rt;
	}

	/**
	 * 检测商品是否有sid,原价,昵称,如没有则用淘客接口更新全部
	 * @param  [type] $count [description]
	 * @return [type]        [description]
	 */
	function check_sid(){
			global $_G;
			if(!$_G['setting']['taoke_appkey']) return ;
			$and =" sid = '' or sid = '0' or price = 0 or nick = '' or sum = 0 ";

			if($this->debug) { 
				$count = getcount('goods',$and);
				$this->L(__FUNCTION__."---->".$count);
				return ;
			}
			$rs = DB::fetch_all("SELECT num_iid,sid,price,sum,nick,images FROM ".DB::table('goods')." WHERE $and  ORDER BY aid DESC LIMIT 40",'num_iid');

			if($rs && count($rs)>0){
						if(!$_G['setting']['taoke_appkey']) {
							$this->log('淘宝客appkey未配置无法进行更新');
							return ;
						}
						
						$tbk = top('tbk');
						$tbk->use_taobaoke();
						$tbk->show_error = false;
						$data = $tbk->get_info(array_keys($rs));
						
						if(!$data || count($data) == 0) {
							//有可能商品都下架了.
							$this->log("获取商品列表为空,可能是淘宝客appkey未配置正确或商品已下架");
							return ;
						}
						if($data && $data['num_iid']) {
							//$tmp = array($data);
							$data = array($data['num_iid']=>$data);
						}
								
						foreach($data as $k=>$v){

							if(!$v['num_iid'] || !$v['sid']) continue;
							$sid = $v['sid']."";
							$iid = $v['num_iid'];
							$update = array('sid'=>$sid);

							if($rs[$iid]['price']<1)$update['price'] = $v['price'];
							if(!$rs[$iid]['images'] && count($v['images'])>0)$update['images'] = implode(',',$v['images']);
							if(!$rs[$iid]['nick'])$update['nick'] = $v['nick'];
							if($rs[$iid]['sum']==0  || $rs[$iid]['sum'] < $v['sum'] )$update['sum'] = $v['sum'];
							if($v['sum'] ==0) $update['sum'] = 999;
							DB::update('goods',$update,"num_iid='$iid'");
							unset($rs[$iid]);
						}


						//将未返回数据的商品删掉.可能是下架的
						if(count($rs)>0){
							foreach($rs as $k=>$v){
								if(!$v['num_iid']) continue;
								$iid = $v['num_iid'];
								DB::delete('goods',"num_iid='$iid'");
							}
						}

						$this->check_sid();
			}else{
					$this->log('全部sid更新完成');
			}
		}


		public function bc_get_msg(){
				$count = top('baichuan','get_msg_list');
				$this->log('共获取到'.$count.'条订阅信息');
		}

		/**
		 * 检测返利订单
		 * @return [type] [description]
		 */
		public function check_fanli($day){
				global $_G;
                if(!$_G['setting']['fanli']) {
                    $this->log('系统未开启返利模式');
                   return ;
                }

                 //12小时未踪跟到,则列为跟踪失败
                $time = TIMESTAMP - 12* 3600;
             	DB::update('order_list',array('status'=>5),'status=0 AND dateline<'.$time);
                if(!$day )$day = $this->day;
                $day--;
               // $time = date('Y-m-d',strtotime('-'.$day.' day'));
               // $time = dmktime($time);
                $rs = DB::fetch_all("SELECT id,price,uid,order_number FROM ".DB::table('order_list') .
                            " WHERE status = 4 AND  uid > 0 AND  end_time > 0  ORDER by id DESC LIMIT 300");
				$tui_bili = intval($_G['setting']['tui_bili']);


                $success = 0;
                foreach($rs as $k=>$v){
                        if(!$v['order_number']) contineu;

                        $arr = array();
                        $arr['dateline'] = TIMESTAMP;
                        $arr['status'] = 3;
                        $arr['price'] = $v['price'];

                        //给用户增加返利券币
                        $user = DB::fetch_first("SELECT max_jf,t_uid,jf,uid,username FROM ".DB::table('member')." WHERE uid = ".$v['uid']);
                        $jifen = intval($_G['setting']['order_jf_bili']);
	                   // $jifen =get_bili($user['max_jf']);		//自定义用户返利比例

                        if($jifen>0){
                                $result_jf =$arr['price'] * ($jifen / 100);
                                $arr['jf']  = round($result_jf);    //四舍五入券币
                                if($arr['jf']<1) $arr['jf'] = 1;
                               // $user = DB::fetch_first("SELECT jf,uid,username FROM ".DB::table('member')." WHERE uid = ".$v['uid']);
                                
                                $add_jf =       $user['jf']+$arr['jf'];
                                $msg = "购物消费".$arr['price']."元,返现".$arr['jf']."券币({$jifen}%)";
                
                                insert_sign(array('desc'=>$msg,'type'=>'fanli','org_jf'=>$user['jf'],'jf'=>$arr['jf'],
                                    'uid'=>$user['uid'],'username'=>$user['username'],'type_id'=>$v['id'])
                                );

                               update_member(array('jf'=>$add_jf),$v['uid']);

                               //给邀请者奖20%券币
                               if($user['t_uid']>0 && $tui_bili>0){
                               		$tbili = $tui_bili / 100;	//推荐者的返利比例
                               		$t_jf = round($arr['price']* $tbili);
                               		$rs = DB::fetch_first("SELECT jf,username,uid FROM ".DB::table('member')." WHERE uid = ".$user['t_uid']);

                               		$add_jf2 =       $rs['jf']+$t_jf;
                               		$msg2 = "您推荐的用户".$user['username']."购物,您获取返现".$t_jf."券币(20%)";

                               		insert_sign(array('desc'=>$msg2,'type'=>'system','org_jf'=>$rs['jf'],'jf'=>$t_jf,
	                                    'uid'=>$rs['uid'],'username'=>$rs['username'])
	                                );
                               		update_member(array('jf'=>$add_jf2),$rs['uid']);

                               }

                        }

                        unset($arr['price']);
                        $r = DB::update('order_list',$arr,'id='.$v['id']);
                        if($r>0)$success ++;
                }
                 $this->log('返利订单检查完毕,共更新成功'.$success.'条');
			
	}

private	function L($msg){
		echo $msg."<br/>";
	}



private	function log($msg){
		if(!class_exists('error'))include_once libfile('class/error');
	//error 好为PHP7的一个内置类		
	//PHP7 小写类名,被自动转成大写
		error::writeErrorLog($msg);
		
	}


private function is_update(){

				if($this->cache_time ==0)  return false;
				$name='check_all_check';
				$rs = memory('get',$name);
		
				return $rs >0  ? false :true;
			}

private	function add_cache(){
		if($this->cache_time ==0)  return ;
		$name='check_all_check';
		$end_time = $this->cache_time * 60;
		memory('set',$name,1,$end_time );
	}


private	function exec($sql,$status=0,$delete = false){
			$sql = preg_replace("/^(\s*)AND/is",'',$sql);
			$sql .=" AND type_id = 0 ";
			if($delete===true){
				$count  =  DB::delete('goods',$sql);
			}else if(is_array($status)){
				$count  =  DB::update('goods',$status,$sql);
			}else {
				$count  =  DB::update('goods',array('status'=>$status),$sql);
			}
			return $count;
	}

}

?>
