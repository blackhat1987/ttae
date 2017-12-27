<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 10:58:49
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\common\header.php" */ ?>
<?php /*%%SmartyHeaderCode:9307598a7a69e55031-35806506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c51e9628e78ad9203f08687124927b2d8b1b20' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\common\\header.php',
      1 => 1467212037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9307598a7a69e55031-35806506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAE' => 0,
    'CM' => 0,
    'CA' => 0,
    '_G' => 0,
    'query_text' => 0,
    'global_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a7a69e78a89_61005592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a7a69e78a89_61005592')) {function content_598a7a69e78a89_61005592($_smarty_tpl) {?><!doctype html>
<html  class="taeapp <?php if ($_smarty_tpl->tpl_vars['TAE']->value==1) {?>tae<?php } else { ?>web<?php }?> _<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
 _<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['CA']->value;?>
" >
<head>
<meta charset="utf-8">
<title><?php if ($_smarty_tpl->tpl_vars['_G']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['_G']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
<?php }?></title>
<link href="/favicon.ico" type="image/x-icon" rel=icon />
<meta name="author" content="uz-system.com 7x24 service d_cms@qq.com"/>
<meta name="system_info" content="by uz-system version <?php echo $_smarty_tpl->tpl_vars['_G']->value['version'];?>
"/>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['_G']->value['keywords'];?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['_G']->value['description'];?>
"/>

<meta name="tk" content="0|<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taodianjing_url'];?>
|<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tdj_type'];?>
"/>
<meta name="get" content="<?php echo $_smarty_tpl->tpl_vars['query_text']->value;?>
"/>
<meta name="set" content="<?php echo $_smarty_tpl->tpl_vars['global_str']->value;?>
"/>
<script type="text/javascript" src="/assets/global/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://a.alimama.cn/tkapi.js"></script>
<script type="text/javascript" src="/assets/global/js/global.js"></script>

<link rel="stylesheet" type="text/css" href="/assets/global/css/global.css" media="all" />
</head>
<body>
<div class="uz_system"></div>
<?php }} ?>
