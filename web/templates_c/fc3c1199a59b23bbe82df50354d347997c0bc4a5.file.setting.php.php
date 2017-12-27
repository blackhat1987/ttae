<?php /* Smarty version Smarty-3.1.15, created on 2017-08-23 12:08:08
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\fanli\setting.php" */ ?>
<?php /*%%SmartyHeaderCode:7198599cffa88be444-95477886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc3c1199a59b23bbe82df50354d347997c0bc4a5' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\fanli\\setting.php',
      1 => 1484054583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7198599cffa88be444-95477886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599cffa89064d9_94154888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599cffa89064d9_94154888')) {function content_599cffa89064d9_94154888($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
       
       
        <tr class="noborder" >
          <td class="td_l">是否开启返利模式:</td>
          <td class="vtop rowform">

             <input class="radio" type="radio" name="postdb[fanli]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['fanli']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[fanli]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['fanli']==0) {?>checked="checked"<?php }?>>
            &nbsp;否
             </td>
          <td class="vtop tips2">
		        开启后会计算及返利
          </td>
        </tr>
        
          <tr class="noborder">
              <td class="td_l">返积分比例:</td>
              <td class="vtop rowform">
                <input class="txt w90" type="text" name="postdb[order_jf_bili]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['order_jf_bili'];?>
" />&nbsp;%
                
                </td>
              <td class="vtop tips2">用户通过淘客下单,匹配正确后返利时,另外返多少积分给当前用户
              <p>如:用户付款50元,在此处设为10%,则增送用户给5积分用户,计算后如小于1积分,则返1积分</p>
              <p>此处是积分,和佣金无关.填0则不返积分给用户</p>
              </td>
      	  </tr>


           <tr class="noborder">
              <td class="td_l">推荐人返利比例:</td>
              <td class="vtop rowform">
                <input class="txt w90" type="text" name="postdb[tui_bili]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tui_bili'];?>
" />&nbsp;%
                </td>
              <td class="vtop tips2">给当前购物者的推荐者返利比例,不影响当前购物者的积分</td>
          </tr>


          <tr class="noborder">
              <td class="td_l">结算天数:</td>
              <td class="vtop rowform">
                <input class="txt w90" type="text" name="postdb[order_day]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['order_day'];?>
" />&nbsp;天
                
                </td>
              <td class="vtop tips2">结算成功后几天开始返现</td>
          </tr>

          
    	  <!-- <tr class="noborder">
              <td class="td_l">提现最小金额:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[tixian_min]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tixian_min'];?>
" />&nbsp;元
                
                </td>
              <td class="vtop tips2">用户提现时的最小金额,填0则没有限制</td>
      	  </tr>
          
           <tr class="noborder">
              <td class="td_l">提现手续费:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[shouxufei]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['shouxufei'];?>
" />&nbsp;%
                
                </td>
              <td class="vtop tips2">用户提现时的手续费,填0则没有手续费</td>
      	  </tr>
          -->
          
       

        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel">
              <input type="submit" class="btn submit_btn"  name="onsubmit" value="提交">
              &nbsp;&nbsp;
             <!--  <input type="button" class="btn add_row" value="增加一行">-->
            </div></td>
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
