<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:51:39
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\weixin\main.php" */ ?>
<?php /*%%SmartyHeaderCode:13515996e2db90a161-04454080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e35954efcf43a0b886bcd604a45d19faf5bc145' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\weixin\\main.php',
      1 => 1500435376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13515996e2db90a161-04454080',
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
  'unifunc' => 'content_5996e2db990b27_12427454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e2db990b27_12427454')) {function content_5996e2db990b27_12427454($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="POST"  action="">
  
  <div class="table_top">
 <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条文章信息</div>
     <div class="table_top_r">
        <ul>


<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=main"><span>全部</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['status']=='0') {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=main&status=0"><span>未发布</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['status']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=main&status=2"><span>已上传(未发布)</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['status']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=main&status=1"><span>已发布</span></a></li>


        </ul>
  </div>  

</div>

    <div class="table_main">
  <table class="tb tb2 ">
    <tbody>      
      <tr class="hover">
        <th>id</th>

        <th  class="goods_title">标题</th>
        <th >文章条数</th>
        <th>状态</th>
        <th>操作选择</th>
        <th>添加时间</th>
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

        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
        <td><a href="?m=weixin&a=news_main&list_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
</td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['status_text'];?>
</td>
        <td>


<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==0) {?>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['count']==0) {?>
           <span title="必须最少有一条文章才能预览">没有文章,无法上传</span>
        <?php } else { ?>
         <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=upload&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="red">立即上传</a>
        <?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
   <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=preview&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="red _confirm" data-msg="您确定立即预览?每天最多可预览100次">立即预览</a>&nbsp;
   <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=upload&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="red">重新上传</a>

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>

 <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=post_weixin&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="red _confirm" data-msg="您确定立即全网正式推送?全网推送前,请先预览成功后再推送,以确否是否一切都正常">立即全网推送</a>&nbsp;
 <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=preview&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="red _confirm" data-msg="您确定立即预览?每天最多可预览100次">立即预览</a>&nbsp;
 <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=upload&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="red _confirm" data-msg="您确定重新上传吗?">重新上传</a>&nbsp;

<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?>
    <?php if ($_smarty_tpl->tpl_vars['v']->value['msg_status']) {?>
         <?php echo $_smarty_tpl->tpl_vars['v']->value['msg_status'];?>

    <?php } else { ?>
      等待接受推送结果 &nbsp;
       <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=check_news&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="red _confirm" data-msg="您确定向微信查询结果吗?">立即查询</a>&nbsp; 
    <?php }?>

<?php }?>


      </td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['posttime'];?>
</td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=list_post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=weixin&a=list_del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
