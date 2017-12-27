<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 11:40:33
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\mobile\footer.php" */ ?>
<?php /*%%SmartyHeaderCode:9635598a8431d56a48-93259943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5eb66c17bc64d9719a3d0af7ea71ac437d9e0b8' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\mobile\\footer.php',
      1 => 1469155686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9635598a8431d56a48-93259943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'URL' => 0,
    'IMGDIR' => 0,
    'JSDIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a8431d715f5_74127028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a8431d715f5_74127028')) {function content_598a8431d715f5_74127028($_smarty_tpl) {?><div style="width: 100%; height: 60px; margin: 0 auto"></div>
<div class="i2_botd cl">
    <ul class="uline">
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
">首页</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
mobile=no">电脑版</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
mobile=yes" style="color: #666">手机版</a></li>
    </ul>
</div>
<?php if (!$_smarty_tpl->tpl_vars['_G']->value['uid']) {?>
<div class="botmlogind">
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=login" class="a1">登录</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=reg" class="a2">注册</a>
</div>
<?php }?>
<div class="bottom">
copyright @2016 <?php echo $_smarty_tpl->tpl_vars['_G']->value['host'];?>

</div>

<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['app_andorid_url']||$_smarty_tpl->tpl_vars['_G']->value['setting']['app_ios_url']) {?>
<div class="download-con tishi_1" style="bottom: 0px;">
	<div class="down_app">
    	<div class="download-logo">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/icon150x150.png" width="100%" height="100%">
        </div>
        <div class="alogo">
        	<p class="client-name">客户端购物更方便！</p>
        </div>
        <div class="open_now">
        	<a href="/index.php?m=apps">
            	<span class="open_btn">立刻下载</span>
            </a>
        </div>
        <div class="close-btn-con" >
        	<span class="close-btn-icon"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/closeft.png" width="12" height="12"></span>
        </div>
    </div>
</div>
<?php }?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/main.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("../common_mobile/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
