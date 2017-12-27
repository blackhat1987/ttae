<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:51:53
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\weixin\list_post.php" */ ?>
<?php /*%%SmartyHeaderCode:96065996e2e9905084-00232500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da69375f6bc97ad8bf59e840b65daf0be50f2894' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\weixin\\list_post.php',
      1 => 1500435378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96065996e2e9905084-00232500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e2e9950e85_41120920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e2e9950e85_41120920')) {function content_5996e2e9950e85_41120920($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">专题名称:</td>
          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" type="text" class="txt _keywords"></td>
          <td class="vtop tips2" >给自己查看区分的,不会显示给用户</td>
        </tr>


      <tr class="noborder" >
          <td class="td_l">发布到群组:</td>
          <td class="vtop rowform"><input  name="postdb[post_groupid]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['post_groupid'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >留空则发布给所有用户</td>
        </tr>
       
        <tr class="noborder" >
          <td class="td_l">当前状态:</td>
          <td class="vtop rowform"><ul>
            <?php echo $_smarty_tpl->tpl_vars['data']->value['status_text'];?>
 
            </ul></td>
          <td class="vtop tips2" >当前专题是否已正式推送到微信</td>
        </tr>
        
         <tr class="noborder" >
          <td class="td_l">媒体id:</td>
          <td class="vtop rowform"><?php echo $_smarty_tpl->tpl_vars['data']->value['mediaid'];?>
</td>
          <td class="vtop tips2" >发布到微信后返回的id,无法修改,自动获取的</td>
        </tr>

       
        <tr class="noborder" >
        <td class="td_l">&nbsp;</td>
          <td class="vtop rowform" colspan="3"><div class="fixsel"> 
          <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" />
              <?php }?>
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="添 加">
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
