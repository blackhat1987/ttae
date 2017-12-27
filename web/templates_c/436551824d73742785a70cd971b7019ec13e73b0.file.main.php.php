<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 12:19:23
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\mobile\index\main.php" */ ?>
<?php /*%%SmartyHeaderCode:17847598a84385bd387-00731356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '436551824d73742785a70cd971b7019ec13e73b0' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\mobile\\index\\main.php',
      1 => 1502252303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17847598a84385bd387-00731356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a843862cf46_88683875',
  'variables' => 
  array (
    '_G' => 0,
    'goods' => 0,
    'v' => 0,
    'showpage' => 0,
    'JSDIR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a843862cf46_88683875')) {function content_598a843862cf46_88683875($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['_G']->value['fid']) {?>
<div class="indexmenu2"><div class="indexmenu2d"><div class="cag_headt">
<a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
">&lt;</a><span> <?php echo $_smarty_tpl->tpl_vars['_G']->value['channel']['name'];?>
</span></div></div>
</div>
<?php }?>
<section class="deals" id="stage" >
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="item_list" >
    <a class="imgd _open" data-url="<?php if ($_smarty_tpl->tpl_vars['v']->value['juan_url']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value['juan_url'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
<?php }?>"  <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['dtk_jump']) {?>data-dtk_id="<?php echo $_smarty_tpl->tpl_vars['v']->value['dtk_id'];?>
"<?php }?>>
        <img width="140" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_250x250.jpg">
        <?php if ($_smarty_tpl->tpl_vars['v']->value['new']==1) {?><i class="mb_ico goodsdpi gisnew1"></i><?php }?>
        <span class="goodsisover1"></span>
    </a>
    <h2><span><a class="_open"  data-url="<?php if ($_smarty_tpl->tpl_vars['v']->value['juan_url']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value['juan_url'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
<?php }?>"  <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['dtk_jump']) {?>data-dtk_id="<?php echo $_smarty_tpl->tpl_vars['v']->value['dtk_id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></span></h2>
    <aside>
 <?php if ($_smarty_tpl->tpl_vars['v']->value['juan_url']) {?>
<a data-url="<?php echo $_smarty_tpl->tpl_vars['v']->value['juan_url'];?>
"  rel="nofollow"  class="y juan_btn _open"  <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['dtk_jump']) {?>data-dtk_id="<?php echo $_smarty_tpl->tpl_vars['v']->value['dtk_id'];?>
"<?php }?>>领<?php if ($_smarty_tpl->tpl_vars['v']->value['juan_price']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value['juan_price'];?>
元<?php }?>优惠券</a>
<?php }?>
    ￥<span><?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price']-$_smarty_tpl->tpl_vars['v']->value['juan_price'];?>
</span></aside>
   <p> <?php if ($_smarty_tpl->tpl_vars['v']->value['price']>0) {?><del>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</del><?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value['zk']>0) {?><cite><?php echo $_smarty_tpl->tpl_vars['v']->value['zk'];?>
折</cite><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['v']->value['sum']>0) {?><b class="b1">已售<?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</b><?php }?></p>
</div>
<?php } ?>
</section>

<div class=" redpage cl">
  <?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>

</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/slider.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/sliderrun.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/hp.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/index.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
