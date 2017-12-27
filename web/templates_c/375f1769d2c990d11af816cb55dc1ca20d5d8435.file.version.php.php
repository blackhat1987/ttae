<?php /* Smarty version Smarty-3.1.15, created on 2017-09-25 21:44:33
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\apps\version.php" */ ?>
<?php /*%%SmartyHeaderCode:7045996e74c233159-84088085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '375f1769d2c990d11af816cb55dc1ca20d5d8435' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\apps\\version.php',
      1 => 1504857001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7045996e74c233159-84088085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e74c27d238_63245273',
  'variables' => 
  array (
    '_G' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e74c27d238_63245273')) {function content_5996e74c27d238_63245273($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
    <div class="table_top">app版本设置</div>
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>




         <tr class="noborder">
          <td class="td_l">android最新版本号:</td>
          <td class="vtop rowform"><input name="postdb[app_version_android]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_version_android'];?>
" type="text" class="txt"></td>
           <td class="vtop tips2">android最新版本号,用户连接时会检查是否是最新版,必须两个点,如1.0.5 ,2.5.5 ,3.12 等</td>
        </tr>

		 <tr class="noborder">
          <td class="td_l">android下载地址:</td>
          <td class="vtop rowform"><input name="postdb[app_andorid_url]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_andorid_url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">android下载地址</td>
        </tr>


         <tr class="noborder">
          <td class="td_l">android更新地址:</td>
          <td class="vtop rowform"><input name="postdb[app_andorid_up_url]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_andorid_up_url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">用户下载的更新地址,要填写绝对的.apk地址</td>
        </tr>

         <tr class="noborder">
          <td class="td_l">android版本说明:</td>
          <td class="vtop rowform"><textarea rows="6" name="postdb[app_desc_android]" cols="70" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_desc_android'];?>
</textarea></td>
          <td class="vtop tips2">android版本说明</td>
        </tr>


        <tr class="noborder">
          <td class="td_l">iphone最新版本号:</td>
          <td class="vtop rowform"><input name="postdb[app_version_iphone]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_version_iphone'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">IOS当前版本号,用户连接时会检查是否是最新版,必须两个点,如1.0.5 ,2.5.5 ,3.12 等</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">iphone端下载地址:</td>
          <td class="vtop rowform"><input name="postdb[app_iphone_url]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_iphone_url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">ISO端下载地址</td>
        </tr>

        <tr class="noborder">
          <td class="td_l">iphone版本说明:</td>
          <td class="vtop rowform"><textarea rows="6" name="postdb[app_desc_iphone]" cols="70" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_desc_iphone'];?>
</textarea></td>
          <td class="vtop tips2">IOS版本说明</td>
        </tr>



        <tr class="noborder" >
          <td class="td_l">ios是否待审核:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[apply_status]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['apply_status']=="0") {?>checked="checked"<?php }?>>
            &nbsp;否
            <input class="radio" type="radio" name="postdb[apply_status]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['apply_status']==1) {?>checked="checked"<?php }?>>
            &nbsp;是

             </td>
           <td class="vtop tips2">如果当前商品中有待审核的app,那么需要开启这里.因为第三方登录苹果要求必装客户端才能加入,在这里可以绕过检查,等正式上线后再开启</td>
        </tr>

         <tr class="noborder">
          <td class="td_l">ios待审核的版本:</td>
          <td class="vtop rowform"><input name="postdb[apply_version]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['apply_version'];?>
" type="text" class="txt"></td>
           <td class="vtop tips2">填写苹果商店中待审核的版本号</td>
        </tr>

          <tr class="noborder">
          <td class="td_l">android待审核版本:</td>
          <td class="vtop rowform"><input name="postdb[apply_android]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['apply_android'];?>
" type="text" class="txt"></td>
           <td class="vtop tips2">填写安卓待审核的版本号</td>
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
