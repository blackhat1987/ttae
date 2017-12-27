<?php /* Smarty version Smarty-3.1.15, created on 2017-08-11 12:53:15
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\apps\api.php" */ ?>
<?php /*%%SmartyHeaderCode:9674598d383b1e8a03-09263401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f110b1626072a82f069ac79be20b6e1321e88e' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\apps\\api.php',
      1 => 1475768435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9674598d383b1e8a03-09263401',
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
  'unifunc' => 'content_598d383b226235_70532739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598d383b226235_70532739')) {function content_598d383b226235_70532739($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
    <div class="table_top">其它设置</div>
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>


         <tr class="noborder" >
          <td class="td_l">是否开启校验接口:</td>
          <td class="vtop rowform">
          <input class="radio" type="radio" name="postdb[app_sign_check]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['app_sign_check']=='1') {?>checked="checked"<?php }?>>
            &nbsp;开启
             <input class="radio" type="radio" name="postdb[app_sign_check]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['app_sign_check']=='0') {?>checked="checked"<?php }?>>
            &nbsp;关闭
             </td>
          <td class="vtop tips2">开启校验将大大提高接口信息安全,可防止被恶意请求
          <p>接口加密方式为md5和sha1,默认为md5,无法从网站设置,必须从APP设置</p>
          </td>
        </tr>

         <tr class="noborder">
          <td class="td_l">校验key:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[app_sign_key]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_sign_key'];?>
" /></td>
          <td class="vtop tips2">加密字符串的key,必须和app中配置一至否则会验证失败
          <p class="red">(禁止随意更改,必须和app中一致否则所有请求会失败)</p></td>
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
