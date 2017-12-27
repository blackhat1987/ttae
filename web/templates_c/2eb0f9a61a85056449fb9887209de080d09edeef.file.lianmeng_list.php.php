<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:52:11
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\fetch\lianmeng_list.php" */ ?>
<?php /*%%SmartyHeaderCode:147395996e2fb61c9b8-93989912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb0f9a61a85056449fb9887209de080d09edeef' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\fetch\\lianmeng_list.php',
      1 => 1480474069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147395996e2fb61c9b8-93989912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'data' => 0,
    'v' => 0,
    '_G' => 0,
    'vv' => 0,
    'goods' => 0,
    'vvv' => 0,
    'a' => 0,
    'URL' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e2fb6f78d5_84075636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e2fb6f78d5_84075636')) {function content_5996e2fb6f78d5_84075636($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" action="">  
  <div class="table_top">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条选品分类信息

<span style="margin-left:20px;"  class="red">
使用方法: 打开 
<a href="http://pub.alimama.com/promo/search/index.htm" target="_blank" >淘宝联盟</a>
 -->将商品选取-->加入到选品库即可(注意登录阿里妈妈的账号,必须和后台->站点配置-> <a href="?m=admin&a=caiji" target="_blank">采集配置</a>->淘宝客appkey所属同一账户)</span>


  </div>
  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>
      <tr class="hover">
       <th >id</th>       
       <th>分类标题</th>
       <th>类型</th>
       <th>入库栏目</th>

       <th>上次执行时间</th>
		   <th>开始采集</th>
      </tr>

       <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
         <tr class="hover">  
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>        
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</td>
         <td>

<select name="fids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" class="select_fid"> 
 <option value="0">----请选择栏目----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['vv']->value['fid']||$_smarty_tpl->tpl_vars['vv']->value['fid']==$_smarty_tpl->tpl_vars['v']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['vvv']->value['fid']||$_smarty_tpl->tpl_vars['vvv']->value['fid']==$_smarty_tpl->tpl_vars['v']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['a']->value['fid']||$_smarty_tpl->tpl_vars['a']->value['fid']==$_smarty_tpl->tpl_vars['v']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->
</select>

         </td>
		     <td class="_dgmdate" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['updatetime'];?>
"></td>
         <td><a class="red" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fetch&a=lianmeng_start&favid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank">开始采集</a></td>
        </tr>
       <!--<?php } ?>-->
  
 <tr>
        <td colspan="6">
        <div class="y showpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        <div class="fixsel">
            <input type="submit" class="btn submit_btn" name="onsubmit"  value=" 提 交 保 存" >
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
