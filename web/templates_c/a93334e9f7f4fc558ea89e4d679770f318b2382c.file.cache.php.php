<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:45:45
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\tools\cache.php" */ ?>
<?php /*%%SmartyHeaderCode:189615996e17927a265-09176916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93334e9f7f4fc558ea89e4d679770f318b2382c' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\tools\\cache.php',
      1 => 1441350035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189615996e17927a265-09176916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e1792af870_44806844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e1792af870_44806844')) {function content_5996e1792af870_44806844($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" action="">
  
  <div class="table_top">更新系统各类设置的缓存</div>
  <div class="table_main">
    <div class="infobox"> <br>
       <input type="checkbox" name="postdb[system_cache]" value="1" class="checkbox" checked="checked" >系统缓存
      &nbsp;&nbsp;
      <input type="checkbox" name="postdb[goods_cache]" value="1" class="checkbox" >所有商品内存缓存
     
      <br>
      <p class="margintop">
        <input type="submit" class="btn submit_btn" name="onsubmit" value="提交">
      </p>
    </div>
  </div>
<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>
<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
