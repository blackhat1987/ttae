<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:51:57
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\weixin\news_main.php" */ ?>
<?php /*%%SmartyHeaderCode:220045996e2edd9edb3-51291770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d3f68201318baf4db2996625b5fede5f4555d6d' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\weixin\\news_main.php',
      1 => 1500435382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220045996e2edd9edb3-51291770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_GET' => 0,
    'goods' => 0,
    'v' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e2eddfa5b1_14412332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e2eddfa5b1_14412332')) {function content_5996e2eddfa5b1_14412332($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="POST"  action="">
  
  <div class="table_top">
 <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条文章信息</div>
     <div class="table_top_r">
        <ul>


<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=main"><span>全部</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['is_post']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=main&is_post=1"><span>已发布</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['is_post']=='0') {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=main&is_post=0"><span>未发布</span></a></li>

        </ul>
  </div>  

</div>

    <div class="table_main">
  <table class="tb tb2 ">
    <tbody>      
      <tr class="hover">
        <th>id</th>

        <th  class="goods_title">标题</th>
        <th >所属专题</th>
        <th>原文跳转url</th>
        <th>作者</th>
        <th>发布时间</th>
        <th>编辑</th>
        <th>删除</th>
      </tr>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
      <tr class="hover">

        <td><a href="/index.php?m=weixin&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</a></td>
        <td class="goods_title"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['news_title'];?>
</td>
        <td ><?php if ($_smarty_tpl->tpl_vars['v']->value['url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank">点击查看</a><?php } else { ?>没有设定<?php }?></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
 &nbsp;</td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=news_del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >删除</a></td>
      </tr>
      <!--<?php } ?>-->
      <tr>
        <td colspan="8">
        <div class="y"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        </td>
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
