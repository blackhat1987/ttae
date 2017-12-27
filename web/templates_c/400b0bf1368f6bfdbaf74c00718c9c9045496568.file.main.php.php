<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 12:53:17
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\mobile\goods\main.php" */ ?>
<?php /*%%SmartyHeaderCode:12805598a8431c0f3e1-09868115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '400b0bf1368f6bfdbaf74c00718c9c9045496568' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\mobile\\goods\\main.php',
      1 => 1502254395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12805598a8431c0f3e1-09868115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a8431c5b2e7_20432492',
  'variables' => 
  array (
    'CSSDIR' => 0,
    'goods' => 0,
    '_G' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a8431c5b2e7_20432492')) {function content_598a8431c5b2e7_20432492($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/goods.css" media="all" />
<div class="guide guide-platform-2"></div>

<div id="mobileBlock cl">
<div class="share-list">
<div class="goods" >
    <div class="goodsItemImg">
        <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
">
    </div>
    <div class="goods-content"><?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
</div>

    <div class="cl goods_bt">
<a href="<?php if ($_smarty_tpl->tpl_vars['goods']->value['juan_url']) {?><?php echo $_smarty_tpl->tpl_vars['goods']->value['juan_url'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['goods']->value['url'];?>
<?php }?>" target="_blank" class="y pay_btn _open" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['dtk_jump']) {?>data-dtk_id="<?php echo $_smarty_tpl->tpl_vars['goods']->value['dtk_id'];?>
"<?php }?>>去购买</a>
            <div class="goods-price z"><span>¥</span><?php echo $_smarty_tpl->tpl_vars['goods']->value['yh_price'];?>
</div>

<?php if ($_smarty_tpl->tpl_vars['goods']->value['juan_url']) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['juan_url'];?>
"  rel="nofollow" target="_blank" class="y juan_btn2 _open" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['dtk_jump']) {?>data-dtk_id="<?php echo $_smarty_tpl->tpl_vars['goods']->value['dtk_id'];?>
"<?php }?>>领<?php if ($_smarty_tpl->tpl_vars['goods']->value['juan_price']) {?><?php echo $_smarty_tpl->tpl_vars['goods']->value['juan_price'];?>
元<?php }?>优惠券</a>
<?php } else { ?>
  <div class="goods_oprice z">原价: <del><?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
</del></div>
<?php }?>
          

    </div>

    </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
