<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 10:58:49
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\common_admin\cpmsg.php" */ ?>
<?php /*%%SmartyHeaderCode:8504598a7a69d76ea7-27650950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c19e6ee833d617726adc0776b6f203dad37c067' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\common_admin\\cpmsg.php',
      1 => 1440510692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8504598a7a69d76ea7-27650950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classname' => 0,
    'message' => 0,
    'url' => 0,
    'title' => 0,
    'ext_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a7a69dae621_07484717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a7a69dae621_07484717')) {function content_598a7a69dae621_07484717($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="cl cpmsg">
  <div class="infobox cl">
    <h4 class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>
    <p class="marginbot"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="lightlink"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></p>
    <?php echo $_smarty_tpl->tpl_vars['ext_message']->value;?>

  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('./right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
