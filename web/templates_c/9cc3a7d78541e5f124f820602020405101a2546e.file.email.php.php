<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 21:10:30
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\admin\email.php" */ ?>
<?php /*%%SmartyHeaderCode:25875996e74633bad5-08180376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cc3a7d78541e5f124f820602020405101a2546e' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\admin\\email.php',
      1 => 1441350032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25875996e74633bad5-08180376',
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
  'unifunc' => 'content_5996e74638aac3_64047109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e74638aac3_64047109')) {function content_5996e74638aac3_64047109($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
      
        <tr class="noborder">
          <td class="td_l">是否开启邮件发送功能:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[status]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['email']['status']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[status]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['email']['status']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">是否开启邮件发送功能</td>
        </tr>
      
      <tr class="noborder" >
          <td class="td_l">SMTP 服务器:</td>
          <td class="vtop rowform">
          <input name="postdb[smtp]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['email']['smtp'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >如果是qq邮箱，则填smtp.qq.com，其它类似</td>
        </tr>
        
 		<tr class="noborder" >
          <td class="td_l">发件人邮箱地址:</td>
          <td class="vtop rowform">
          <input name="postdb[address]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['email']['address'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >发件人的完整地址，如：123456789@qq.com</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">发件人邮箱密码:</td>
          <td class="vtop rowform"> <input name="postdb[password]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['email']['password'];?>
" type="password" class="txt"></td>
          <td class="vtop tips2" >如果是QQ邮箱则一般是QQ登录密码，如果不正确请自己尝试登录邮箱确认密码后再填写</td>
        </tr>

		<tr class="noborder" >
          <td class="td_l">端口:</td>
          <td class="vtop rowform"> <input name="postdb[port]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['email']['port'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2" >一般是25</td>
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
