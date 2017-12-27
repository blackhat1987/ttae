<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 21:10:34
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\apps\gezi.php" */ ?>
<?php /*%%SmartyHeaderCode:240165996e74a09f7b6-31517974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3ebc88ff23d6892b79f5aa6e33a2e284b056eb3' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\apps\\gezi.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240165996e74a09f7b6-31517974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'size' => 0,
    'hdp' => 0,
    'k' => 0,
    'v' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e74a0e4db7_28585612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e74a0e4db7_28585612')) {function content_5996e74a0e4db7_28585612($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  <div class="table_top">app首页六宫格设置</div>
  <div class="table_main">
    <table class="tb tb2 nobdb">
     <input type="hidden" name="size" value="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" class="add_size">
     
<tbody class="hdp_m">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hdp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <tr class="noborder" > 
                <td class="td_l" style="width:110px">六宫格<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
:</td>
                  <td class="vtop rowform " colspan="2">
                  <div class="cl">
                    <div class="z _hover_img" style="width:360px;"  data-left="300">
                   图片地址:<input name="picurl[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" type="text" class="txt"  style="margin-bottom:10px;">
                   链接地址:<input name="url[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" type="text" class="txt" >
                   
                   显示标题:<input name="title[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" type="text" class="txt" >
                     <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"  ><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a>
                   </div>
                   <div class="z">
                      <input type="file" name="file<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="file" style="width:180px;"/><a href="" style="margin-left:20px; " class="red del_hdp">删除</a>
                  </div>
               </div>
                    <div class="cl" style="height:20px"></div>
                  </td>
        </tr>
<?php } ?>
</tbody>   
   
   
      
 <tbody>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel">
           <input type="button" class="btn add_btn" value="添加">
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
