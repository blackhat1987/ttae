<?php /* Smarty version Smarty-3.1.15, created on 2017-09-27 15:11:33
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\admin\tag.php" */ ?>
<?php /*%%SmartyHeaderCode:1642959cb4f251c7ff6-06787540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e27dec2268bdbd16ddd943dc793a5b1e45686420' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\admin\\tag.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1642959cb4f251c7ff6-06787540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'SYSTEM_TYPE' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59cb4f2520d638_34195813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb4f2520d638_34195813')) {function content_59cb4f2520d638_34195813($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
 
         <tr class="noborder " >
          <td class="td_l">标记:</td>
          <td class="vtop rowform">
          <input class="txt" type="text" name="postdb[flag]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['flag'];?>
" /></td>
          <td class="vtop tips2">可以给商品或文章定义一个标记.</td>
        </tr>
        
        <tr class="noborder">
          <td class="td_l">商品标签:</td>
          <td class="vtop rowform">
          <input class="txt" type="text" name="postdb[tags]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tags'];?>
" /></td>
          <td class="vtop tips2">商品标签,可以给商品定义不同的标签,多个用,格开</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['SYSTEM_TYPE']->value>2) {?>
        <tr class="noborder">
          <td class="td_l">店铺标签:</td>
          <td class="vtop rowform">
          <input class="txt" type="text" name="postdb[shop_tag]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['shop_tag'];?>
" /></td>
          <td class="vtop tips2">店铺标签,可以给店铺定义不同的标签,多个用,格开,不要随意插队,需要添加的话请在后面按顺序添加.</td>
        </tr>
        <?php }?>

  	
        
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
