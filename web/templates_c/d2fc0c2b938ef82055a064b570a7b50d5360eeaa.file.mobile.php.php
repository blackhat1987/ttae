<?php /* Smarty version Smarty-3.1.15, created on 2017-09-27 15:12:00
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\admin\mobile.php" */ ?>
<?php /*%%SmartyHeaderCode:649559cb4f408b1861-10945542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2fc0c2b938ef82055a064b570a7b50d5360eeaa' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\admin\\mobile.php',
      1 => 1481457948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '649559cb4f408b1861-10945542',
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
  'unifunc' => 'content_59cb4f408f7a88_15577516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb4f408f7a88_15577516')) {function content_59cb4f408f7a88_15577516($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
      
       <tr class="noborder">
          <td class="td_l">是否开启手机版:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[mobile_status]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['mobile_status']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[mobile_status]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['mobile_status']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">开启前请确定您已开发了手机HTML5模板</td>
        </tr>
      
      
 
         <tr class="noborder">
          <td class="td_l">手机模板名称:</td>
          <td class="vtop rowform"><input name="postdb[mobile_tpl]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['mobile_tpl'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">默认为mobile文件夹,如果有其它的,可以手动填写模板目录</td>
        </tr>
        
		 <tr class="noborder">
          <td class="td_l">手机域名:</td>
          <td class="vtop rowform"><input name="postdb[mobile_host]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['mobile_host'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">如有开通手机版,则需开一个二级域名指向,这样使SEO更好的收录.
          <p>如果您的域名是http://www.baidu.com,你则可只需填写http://m.baidu.com</p>
          <p>如没有手机版域名可不填写也能直接展示手机版</p>
          </td>
        </tr>

          <tr class="noborder">
          <td class="td_l">手机强制跳转域名:</td>
          <td class="vtop rowform"><input name="postdb[mobile_jump]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['mobile_jump'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">用户是手机访问,则强制跳往到刚地址,留空则不进行跳转</td>
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
