<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:45:22
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\goods\import.php" */ ?>
<?php /*%%SmartyHeaderCode:279745996e16202d1f6-06218163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f439c1c15fba2c0deef4bd4a4cdba92bab6a10b' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\goods\\import.php',
      1 => 1466000274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279745996e16202d1f6-06218163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'vv' => 0,
    'goods' => 0,
    '_GET' => 0,
    'vvv' => 0,
    'a' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e1620d8b67_75233455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e1620d8b67_75233455')) {function content_5996e1620d8b67_75233455($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post">
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">导入说明:</td>
          <td class="vtop rowform" data-left="150" colspan="2">
          可以在淘宝联盟中选择自定义商品并导出选品库,然后在此入进行批量导入
<a href="http://pub.alimama.com/promo/search/index.htm?" target="_blank" class="red">查看导入地址</a>

        </tr>


        <tr class="noborder" >
          <td class="td_l">上传的栏目:</td>
          <td class="vtop rowform"  colspan="2" >


<select name="postdb[fid]" class="select_fid">
 <option value="0">----请选择栏目----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['vv']->value['fid']||$_smarty_tpl->tpl_vars['vv']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['vvv']->value['fid']||$_smarty_tpl->tpl_vars['vvv']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['a']->value['fid']||$_smarty_tpl->tpl_vars['a']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->
      <!--<?php } ?>-->
<!--<?php }?>-->
<!--<?php } ?>-->
</select>
          </td>
           <td class="vtop tips2" >可以留空,留空则可以稍后在商品管理处手动批量设置栏目</td>
        </tr>


  <tr class="noborder" >
        <td class="td_l">商品分类:</td>
        <td class="vtop rowform">

<select name="postdb[cate]" class="select_fid">
 <option value="0">----请选择分类----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['goods_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->
      <!--<?php } ?>-->
<!--<?php }?>-->
<!--<?php } ?>-->
</select>


          </td>
        <td class="vtop tips2" >可以留空,留空则可以稍后在商品管理处手动批量设置分类</td>
      </tr>

  <tr class="noborder" >
        <td class="td_l">上线时间段:</td>
        <td class="vtop rowform"><input  name="postdb[start_time]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['start_time'];?>
" type="text" class="txt _dateline" style="width: 250px;" ></td>
        <td class="vtop tips2" >未到时间,此商品不会在首页及列表页中显示,0或空则不限时间</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">下线时间段:</td>
        <td class="vtop rowform"><input  name="postdb[end_time]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['end_time'];?>
" type="text" class="txt _dateline" style="width: 250px;"  ></td>
        <td class="vtop tips2" >已到时间,则不会显示,0或空则不限时间</td>
      </tr>


        <tr class="noborder" >
          <td class="td_l">xls文件:</td>
          <td class="vtop rowform "><input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" /></td>
          <td class="vtop tips2" >淘宝联盟导出的选品库,格式为xls文件</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">&nbsp;</td>
          <td class="vtop rowform" colspan="3"><input type="submit" class="btn submit_btn"  name="onsubmit"  value="立即上传"></td>
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
