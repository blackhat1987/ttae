<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 10:58:49
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\common_admin\left_bar.php" */ ?>
<?php /*%%SmartyHeaderCode:22011598a7a69dcf978-77095322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaea5563993525d1328accda515d937f778accae' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\common_admin\\left_bar.php',
      1 => 1480163621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22011598a7a69dcf978-77095322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSSDIR' => 0,
    '_G' => 0,
    'URL' => 0,
    'IMGDIR' => 0,
    'nav' => 0,
    'SYSTEM_TYPE' => 0,
    'CURMODULE' => 0,
    'key' => 0,
    'CURACTION' => 0,
    'k' => 0,
    'v' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a7a69e39914_91467127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a7a69e39914_91467127')) {function content_598a7a69e39914_91467127($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/admin2.css" media="all" />

<div class="admin cl " data-version="<?php echo $_smarty_tpl->tpl_vars['_G']->value['version'];?>
" data-updatetime="<?php echo $_smarty_tpl->tpl_vars['_G']->value['update_time'];?>
" >

<table cellpadding="0" cellspacing="0" width="100%" height="100%" style="width: 100%;">
<tbody>
  <tr>
    <td valign="top" width="160" class="menutd "><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" title="uz-system.com" ><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/logo.png" /></a>
      <div id="leftmenu" class="menu"> 
      
      
      <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav']->key;
?>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['menu']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['menu']['index']++;
?>
          <?php if ($_smarty_tpl->tpl_vars['SYSTEM_TYPE']->value>=$_smarty_tpl->tpl_vars['nav']->value['type']&&$_smarty_tpl->getVariable('smarty')->value['foreach']['menu']['index']==0&&$_smarty_tpl->tpl_vars['nav']->value['select']==1) {?>
                <div class="line"></div>
                <ul <?php if ($_smarty_tpl->tpl_vars['CURMODULE']->value==$_smarty_tpl->tpl_vars['key']->value) {?>class="on"<?php }?>>          
                  <li><a <?php if ($_smarty_tpl->tpl_vars['CURMODULE']->value==$_smarty_tpl->tpl_vars['key']->value&&$_smarty_tpl->tpl_vars['CURACTION']->value==$_smarty_tpl->tpl_vars['k']->value) {?> class="tabon" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['v']->value['a'];?>
"   ><em  title="??????"></em><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a></li>
                </ul>
         <?php }?>
          <?php } ?>
        <?php } ?> </div>
      <div class="line"></div>
      <div class="copyright">
        <p>Copyright ?? 2014</p>
        <p><a target="_blank" href="http://www.uz-system.com">www.uz-system.com</a></p>
        <p><a target="_blank" href="http://www.hbkfz.cn/">???????????????????????????</a></p>
        <p>??????: v<?php echo $_smarty_tpl->tpl_vars['_G']->value['version'];?>
 <?php echo $_smarty_tpl->tpl_vars['_G']->value['update_time'];?>
</p>
        <p>??????qq: <a  class="_qq" data-qq="85914984" data-img="0">85914984</a></p>
        <p>??????qq: <a  class="_qq" data-qq="2076814361" data-img="0">2076814361</a></p>
        
        <p>qq?????????: <a href="http://shang.qq.com/wpa/qunwpa?idkey=eb99dac6ce6afa2399fb63cbd3929fd12cbdc52fc3693da2af150ac79ae7f43c" target="_blank">229255390</a></p>
      
         <p><a href="http://help.uz-system.com" target="_blank" class="red">????????????</a>
        <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=9ZGqlpiGtYSE25aamA" class="red">????????????</a>
         </p>
      </div></td>
    <td valign="top" width="100%" class="mask"><div class="admin_main cl">
    
    
<div class="itemtitle">
  <div class="y right_bar">
    <ul>
    
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" target="_blank" class="red">????????????</a></li>
       <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
" >????????????</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=login&a=logout" onclick="return confirm('??????????????????????')">????????????</a></li>
      <li>????????????:v<?php echo $_smarty_tpl->tpl_vars['_G']->value['version'];?>
 <?php echo $_smarty_tpl->tpl_vars['_G']->value['update_time'];?>
</li>      
    </ul>
  </div>
  
<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['nav']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['CURMODULE']->value==$_smarty_tpl->tpl_vars['key']->value) {?>
 		<h3><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</h3>
        <ul class="tab1">
        
 
        
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav']->value['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          		<?php if (!$_smarty_tpl->tpl_vars['v']->value['type']||$_smarty_tpl->tpl_vars['v']->value['type']<=$_smarty_tpl->tpl_vars['SYSTEM_TYPE']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['select']=='1') {?>
                      <li <?php if ($_smarty_tpl->tpl_vars['CURACTION']->value==$_smarty_tpl->tpl_vars['v']->value['a']) {?>class="current"<?php }?>> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['v']->value['a'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></a></li> 
                   <?php }?>
                   
               <?php }?>
          <?php } ?>
        </ul>
  <?php }?>
<?php } ?> 
</div>

  <!--main start-->
      
<?php }} ?>
