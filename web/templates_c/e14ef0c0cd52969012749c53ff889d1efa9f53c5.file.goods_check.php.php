<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:45:20
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\goods\goods_check.php" */ ?>
<?php /*%%SmartyHeaderCode:154715996e160a21b58-91522650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e14ef0c0cd52969012749c53ff889d1efa9f53c5' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\goods\\goods_check.php',
      1 => 1498652268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154715996e160a21b58-91522650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL' => 0,
    '_G' => 0,
    'k' => 0,
    'v' => 0,
    'check_list' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e160ae11e0_02163852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e160ae11e0_02163852')) {function content_5996e160ae11e0_02163852($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">

  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
       
 <tr class="noborder ">
          <td class="td_l">提示:</td>
          <td class="vtop rowform" colspan="2">
          通用是指商品的淘客短链链接为空,也能正常打开商品,但是走淘点金链接.
          一般采集通用商品,或是大淘客,或是插件采集,或是后台->商品采集->规则采集 这类默认都是没有url的,默认都是走淘点金
            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=goods_check_start" class="btn" >立即检查</a>
          </td>
       
        </tr>
     


        <tr class="noborder ">
          <td class="td_l">前台可展示的商品:</td>
          <td class="vtop rowform">
            <input type="hidden"  class="goods_filter_text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['goods_filter'];?>
"> 
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['goods_status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <label  <?php if ($_smarty_tpl->tpl_vars['k']->value==1) {?> redonly<?php }?> for="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<input type="checkbox"  name="goods_filter[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" class="checkbox goods_filter" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" />
            </label>&nbsp; <?php } ?>
          </td>
          <td class="vtop tips2">
选中的才会在网站中展示,不选中的会过滤掉,正常上架是必选,其它都可不必选择
<p>通用其实是可以选中的,因为他是等待转换高佣链接(定向或鹊桥),没有转换的商品,如果有优惠券则走鹊桥二合一,没券则走淘点金</p>
<p>根据各站长使用情况不同,推荐以下组合进行筛选</p>
<p>强制全站走高佣+优惠券:&nbsp;&nbsp;&nbsp;&nbsp;正常上架,非二合一</p>
<p>强制全站走高佣:&nbsp;&nbsp;&nbsp;&nbsp;正常上架,无优惠券,非二合一</p>
<p>强制全站优惠券:&nbsp;&nbsp;&nbsp;&nbsp;通用,正常上架,预告商品,非二合一</p>
<p>无佣金及优惠券要求:&nbsp;&nbsp;&nbsp;&nbsp;通用,正常上架,预告商品,无优惠券,非二合一,低佣金</p>
</td>
        </tr>


   <tr class="noborder">
          <td class="td_l">商品检测间隔时间:</td>
          <td class="vtop rowform">
            <input class="txt w90" type="text" name="postdb[check_time]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['check_time'];?>
" /> 分钟
          </td>
          <td class="vtop tips2">每隔多久检测一次商品(单位:分钟),填0则全都不检测,因要大量操作数据库,时间限定最低为5分钟,根据网站流量和更新商品频繁度,建议5-30分钟左右检测一次</td>
        </tr>


        <tr class="noborder">
          <td class="td_l">检测商品预告:</td>
          <td class="vtop rowform">
<input class="radio" type="radio" name="postdb[check_start]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_start']=='1') {?>checked<?php }?> >  &nbsp;是
<input class="radio" type="radio" name="postdb[check_start]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_start']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">检测商品,是否已到开始时间,已到设定时间,则将商品状态标记为:已上架</td>
        </tr>

<tr class="noborder">
          <td class="td_l">检测商品下架:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[check_end]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_end']=='1') {?>checked<?php }?> > &nbsp;是
            <input class="radio" type="radio" name="postdb[check_end]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_end']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">检测已上线的商品, 如果优惠活动时间或已结束则将商品标记为:已下架</td>
        </tr>



<tr class="noborder">
          <td class="td_l">优惠券到期:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[check_quan_end]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_quan_end']=='1') {?>checked<?php }?>  > &nbsp;删除商品
            <input class="radio" type="radio" name="postdb[check_quan_end]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_quan_end']=='0') {?>checked<?php }?>  > &nbsp;清空优惠券
            
             <input class="radio" type="radio" name="postdb[check_quan_end]" value="2" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_quan_end']=='2') {?>checked<?php }?>  > &nbsp;不处理

            </td>
          <td class="vtop tips2">检测已上线的商品, 如果优惠券不存在或已结束则自动删除当前商品:</td>
        </tr>

        
<tr class="noborder">
          <td class="td_l">检测商品url:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[check_url]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_url']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[check_url]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_url']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">检测已上线的商品, 如果没有转换url或url为空,则当前商品是没有转换高佣的商品,将商品标记为:通用
          </td>
        </tr>

<tr class="noborder">
          <td class="td_l">检测商品价格:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[check_price]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_price']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[check_price]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_price']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">防止出现价格混乱,检测已上架的商品的活动价低于优惠券价,则标记为:信息有误</td>
        </tr>


<tr class="noborder">
          <td class="td_l">检测优惠券:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[check_juan]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_juan']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[check_juan]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_juan']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">检测已上线的商品, 将不存在优惠券的商品状态标记为:无优惠券</td>
        </tr>


<tr class="noborder">
          <td class="td_l">检测二合一:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[check_ehy]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_ehy']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[check_ehy]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_ehy']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">检测已上线的商品,将没有二合一券的商品标记为:非二合一,在上方前台可展示商品中如果勾选,则会动态进行转换商品的二合一.已保证站内所有商品有优惠券的全都可用二合一.</td>
        </tr>

<tr class="noborder">
          <td class="td_l">自动转换二合一:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[cover_ehy]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['cover_ehy']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[cover_ehy]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['cover_ehy']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">自动将全站有优惠券的的商品转换成二合一,如果商品是非二合一,则更新状态为:正常上架,如是其它状态则不修改状态
<p class="red">建议为否,这样会动态转换,不做入库.如果设置为是:则会直接将转换结果写入库数据中.</p>
          </td>
        </tr>

<tr class="noborder">
          <td class="td_l">检测佣金比例:</td>
          <td class="vtop rowform">
   <input class="txt w90" type="text" name="postdb[check_bili]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['check_bili'];?>
" /> %
             </td>
          <td class="vtop tips2">检测已上架的商品的佣金率低于设定值,标记为:低佣金<span class="red">(这里不是检查淘宝的佣金,而是站内商品采集过来显示的佣金)</span></td>
        </tr>


<tr class="noborder">
          <td class="td_l">检测商品是否有sid:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[check_sid]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_sid']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[check_sid]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_sid']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">检测商品是否有sid,原价,昵称,如没有则用淘客接口更新全部
          (如果要生成二合一优惠券则必选),如没有则用淘客接口更新全部(注意必须在后台,采集配置中设定好淘宝客的appkey)</td>
        </tr>


<tr class="noborder">
          <td class="td_l">自动删除下线商品:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[del_end_time]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['del_end_time']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[del_end_time]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['del_end_time']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">自动删除已结束活动,或到期下线的商品或优惠券(包括:活动到期,优惠券到期,低佣金,价格有误,卖家下架)</td>
</tr>



<tr class="noborder">
          <td class="td_l">百川消息订阅:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[bc_get_msg]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['bc_get_msg']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[bc_get_msg]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['bc_get_msg']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">使用百川接口,必须有"高级电商能力"和"阿里百川消息"权限.否则前台会报错,无APP的用户一定不要选中</td>
</tr>

<tr class="noborder">
          <td class="td_l">返利订单检测:</td>
          <td class="vtop rowform">
            <input class="radio" type="radio" name="postdb[check_fanli]" value="1" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_fanli']=='1') {?>checked<?php }?>  > &nbsp;是
            <input class="radio" type="radio" name="postdb[check_fanli]" value="0" <?php if ($_smarty_tpl->tpl_vars['check_list']->value['check_fanli']=='0') {?>checked<?php }?>  > &nbsp;否 </td>
          <td class="vtop tips2">检测后自动返积分给用户,无APP的用户不要选中</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2">
            <div class="fixsel">
            <div class="hide check_list"></div>
              <input type="submit" class="btn submit_btn" name="onsubmit" value="提交">
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
  <input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>
<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
