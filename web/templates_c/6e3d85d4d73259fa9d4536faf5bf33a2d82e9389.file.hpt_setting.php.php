<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 11:01:47
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\goods\hpt_setting.php" */ ?>
<?php /*%%SmartyHeaderCode:29196598a7b1b2df6b9-39767015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e3d85d4d73259fa9d4536faf5bf33a2d82e9389' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\goods\\hpt_setting.php',
      1 => 1502093901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29196598a7b1b2df6b9-39767015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL' => 0,
    '_G' => 0,
    'list' => 0,
    'v1' => 0,
    'k1' => 0,
    'v' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a7b1b33cda1_18885746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a7b1b33cda1_18885746')) {function content_598a7b1b33cda1_18885746($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">

  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>

<tr class="noborder">
          <td class="td_l">使用方法:</td>
          <td class="vtop rowform" >
              <p>1,填写好好品推的APPKEY,如果没有可以用官方提供的(不影响站点)</p>
            <p>2,在此处点击立即更新,可一键同步或采集数据</p>
          </td>
            <td class="vtop tips2 "><div class="btn" style="width:60px;line-height: 34px;">
            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=update_hpt" target="_blank"  style="margin: 0;color: #fff;text-decoration: none;">立即更新</a></div></td>
        </tr>
  

      <tr class="noborder" >
          <td class="td_l">好品推接口appKey:</td>
          <td class="vtop rowform"><input name="postdb[hpt_appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['hpt_appkey'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">同步领取优惠券商品的接口 <a href="https://www.haopintui.net/user.php?action=open" target="_blank">立即申请</a></td>
        </tr>


<tr class="noborder" >
          <td class="td_l">最低佣金:</td>
          <td class="vtop rowform"><input name="postdb[hpt_min_bili]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['hpt_min_bili'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">低于此处设定佣金就不采集入库,0为不限制</td>
        </tr>

 <tr class="noborder" >
          <td class="td_l">自动同步栏目:</td>
          <td class="vtop rowform">

  <div class="cl">
  <span style="width:197px;display: block;float:left;">好品推分类</span>
  <span>网站栏目</span>
</div>

 <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
      <select disabled="disabled"  class="select" style="width:156px;margin-bottom: 5px;" >
         <option><?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
</option>
      </select>

      <select name="web_cate[<?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
]"  class="select" style="width:156px;margin-bottom: 5px;" >
      <option value="0">--选择对应网站栏目--</option>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['hpt_cate'][$_smarty_tpl->tpl_vars['k1']->value]==$_smarty_tpl->tpl_vars['v']->value['fid']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
         <?php } ?>

      </select>
<?php } ?>

          </td>
          <td class="vtop tips2" >设置好分类,在自动采集时就会自动给商品分配栏目</td>
        </tr>
  

        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel">
              <input type="submit" class="btn submit_btn"  name="onsubmit" value="提交">
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
