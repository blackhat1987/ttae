<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 11:22:53
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\ttae\index\main.php" */ ?>
<?php /*%%SmartyHeaderCode:25719598a800daa1573-01725031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8ee0ecee5bb136e9f68b64f3038aaaa9c28be1c' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\ttae\\index\\main.php',
      1 => 1478962296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25719598a800daa1573-01725031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSSDIR' => 0,
    '_G' => 0,
    'img' => 0,
    'k' => 0,
    'v' => 0,
    'showpage' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a800db118c5_10138960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a800db118c5_10138960')) {function content_598a800db118c5_10138960($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/index.css">

<?php if ($_smarty_tpl->tpl_vars['_G']->value['ad']['k2']) {?>
<div class="ad cl">
 <?php echo $_smarty_tpl->tpl_vars['_G']->value['ad']['k2']['show_html'];?>

</div>
<?php }?>



<div class="kt_box cl ">
    	<ul>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?>
    		<li class="kt_big on"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_400x400.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"/></a>
         <?php } else { ?>
            <li class="on"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_230x230.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" width="230" height="200" /></a>
          <?php }?>

          <div class="tit_desc">
            <div class="tit"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></div>
            <div class="desc"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
...</a></div>
         </div>
            </li>
        <?php } ?>
    	</ul>

</div>



<div class="index2_contend cl">

<?php echo $_smarty_tpl->getSubTemplate ("../goods_list.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 <div class="redpage cl" ><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
</div>



<div class="howcomed">
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=desktop"></a>
</div>



<div class="foot">
    <div class="links cl"> <span>???????????????</span>
      <div class="links_list_box">
        <ul class="links_list" style="margin-top: 0px;">
          <li>
<!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['friend_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
                 	<!--<?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==0) {?>-->

                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                    <!--<?php }?>-->
 <!--<?php } ?>-->

<!--????????????????????????,?????????????????????????????????-->
<a href="http://www.818zhekou.com/" target="_blank" title="????????????" >????????????</a>
<a href="http://www.uz-system.com/" target="_blank" title="?????????APP" >?????????APP</a>
<a href="http://www.hbkfz.cn/" target="_blank" title="?????????">?????????????????????</a>
<a href="http://www.ddapei.com/" target="_blank" title="?????????">?????????</a>

         </li>
        </ul>
      </div>

       <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['friend_post']==1) {?>
       <span style="float:right">
       <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=friend_link_post">????????????>></a></span>
       <?php }?>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
