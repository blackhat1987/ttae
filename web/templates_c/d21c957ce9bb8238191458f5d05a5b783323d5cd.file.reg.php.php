<?php /* Smarty version Smarty-3.1.15, created on 2017-09-27 15:12:01
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\admin\reg.php" */ ?>
<?php /*%%SmartyHeaderCode:3173759cb4f41376811-21969453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd21c957ce9bb8238191458f5d05a5b783323d5cd' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\admin\\reg.php',
      1 => 1441350032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3173759cb4f41376811-21969453',
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
  'unifunc' => 'content_59cb4f413ef4f4_93179319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59cb4f413ef4f4_93179319')) {function content_59cb4f413ef4f4_93179319($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
    

        <tr class="noborder">
          <td class="td_l">是否开启会员注册:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[reg_status]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['reg_status']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[reg_status]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['reg_status']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">是否开启会员注册,否则禁止新用户注册</td>
        </tr> 
         <tr class="noborder">
          <td class="td_l">注册是否自动审核:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[reg_check]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['reg_check']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[reg_check]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['reg_check']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">为否则必须后台管理员手动审核,未审核的用户只能不能签到,兑换,收藏,等等</td>
        </tr> 
        <tr class="noborder">
          <td class="td_l">注册是否需要邮件验证:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[email_check]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['email_check']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[email_check]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['email_check']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">注册是否需要邮件验证</td>
        </tr> 
           <tr class="noborder">
          <td class="td_l">注册开启验证码:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[reg_yzm]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['reg_yzm']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[reg_yzm]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['reg_yzm']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">是否开启注册页面的验证码,防止恶意用户</td>
        </tr> 
          <tr class="noborder">
          <td class="td_l">登录开启验证码:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[login_yzm]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['login_yzm']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[login_yzm]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['login_yzm']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">是否开启登录页面的验证码,防止恶意用户</td>
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
