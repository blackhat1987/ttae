<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 12:13:11
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\mobile\index\go_pay.php" */ ?>
<?php /*%%SmartyHeaderCode:14607598a8bd723d488-44054741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8db79e1175a5cff8805fba551e5a1ac322aa046' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\mobile\\index\\go_pay.php',
      1 => 1441280846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14607598a8bd723d488-44054741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num_iid' => 0,
    '_G' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a8bd727f1f9_86051763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a8bd727f1f9_86051763')) {function content_598a8bd727f1f9_86051763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>
<div class="uz_system"></div>
<a class="go_pay"  style="display:none;" data-tao_num_iid ="<?php echo $_smarty_tpl->tpl_vars['num_iid']->value;?>
" data-taoappkey="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['appkey'];?>
" data-tao_pid="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['pid'];?>
"  target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $_smarty_tpl->tpl_vars['num_iid']->value;?>
" data-type="0" biz-itemid="<?php echo $_smarty_tpl->tpl_vars['num_iid']->value;?>
"  data-style="2"  data-tmpl="0" data-weburl="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taodianjing_url'];?>
"></a>
<script type="text/javascript" src="/assets/global/js/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="/assets/global/js/go_pay.js"></script>
</body>
</html>
<?php }} ?>
