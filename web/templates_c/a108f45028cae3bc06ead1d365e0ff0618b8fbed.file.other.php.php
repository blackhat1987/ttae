<?php /* Smarty version Smarty-3.1.15, created on 2017-08-11 12:53:15
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\apps\other.php" */ ?>
<?php /*%%SmartyHeaderCode:6425598d383b9c4f19-15912040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a108f45028cae3bc06ead1d365e0ff0618b8fbed' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\apps\\other.php',
      1 => 1502426547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6425598d383b9c4f19-15912040',
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
  'unifunc' => 'content_598d383ba249c4_46046589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598d383ba249c4_46046589')) {function content_598d383ba249c4_46046589($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
    <div class="table_top">其它设置</div>
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>


         <tr class="noborder" >
          <td class="td_l">推送接口:</td>
          <td class="vtop rowform">
          <input class="radio" type="radio" name="postdb[app_push]" value="jpush" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['app_push']=='jpush') {?>checked="checked"<?php }?>>
            &nbsp;激光推送
             <input class="radio" type="radio" name="postdb[app_push]" value="baichuan" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['app_push']=='baichuan') {?>checked="checked"<?php }?>>
            &nbsp;百川推送
            <!--  <input class="radio" type="radio" name="postdb[app_push]" value="apiColud" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['app_push']=='apiColud') {?>checked="checked"<?php }?>>
            &nbsp;APIColud -->

              <input class="radio" type="radio" name="postdb[app_push]" value="xg" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['app_push']=='xg') {?>checked="checked"<?php }?>>
            &nbsp;腾迅信鸽

             </td>
          <td class="vtop tips2">选择推送的接口
          </td>
        </tr>

         <tr class="noborder">
          <td class="td_l">推送appkey:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[push_appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['push_appkey'];?>
" /></td>
          <td class="vtop tips2">对应推送接口类型的appkey</td>
        </tr>

		 <tr class="noborder">
          <td class="td_l">推送secretKey:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[push_secret_key]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['push_secret_key'];?>
" /></td>
          <td class="vtop tips2">对应推送接口类型的secretKey</td>
        </tr>

        <tr class="noborder">
          <td class="td_l">推送appkey2:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[push_appkey_ios]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['push_appkey_ios'];?>
" /></td>
          <td class="vtop tips2">某些平台安卓和IOS appkey是分开的,这里可填写IOS的appkey</td>
        </tr>

		 <tr class="noborder">
          <td class="td_l">推送secretKey2:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[push_secret_key_ios]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['push_secret_key_ios'];?>
" /></td>
          <td class="vtop tips2">某些平台安卓和IOS appkey是分开的,这里可填写IOS的secretKey</td>
        </tr>


         <tr class="noborder">
          <td class="td_l">APP搜索标签:</td>
          <td class="vtop rowform"><textarea rows="6" name="postdb[app_kw]" cols="70" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_kw'];?>
</textarea></td>
          <td class="vtop tips2">展示在APP搜索页面,多个用英文豆号(,)格开</td>
        </tr>
  


   <tr class="noborder">
          <td class="td_l">APP分享积分描述:</td>
          <td class="vtop rowform"><textarea rows="6" name="postdb[app_share_jf]" cols="70" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['app_share_jf'];?>
</textarea></td>
          <td class="vtop tips2">展示在APP分享页面的积分描述</td>
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
