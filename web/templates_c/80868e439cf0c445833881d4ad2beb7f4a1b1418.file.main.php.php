<?php /* Smarty version Smarty-3.1.15, created on 2017-08-23 12:08:06
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\fanli\main.php" */ ?>
<?php /*%%SmartyHeaderCode:5786599cffa6ee9a79-42473671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80868e439cf0c445833881d4ad2beb7f4a1b1418' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\fanli\\main.php',
      1 => 1495898053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5786599cffa6ee9a79-42473671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    '_GET' => 0,
    'URL' => 0,
    '_G' => 0,
    'k' => 0,
    'v' => 0,
    'goods' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_599cffa7078219_24891267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599cffa7078219_24891267')) {function content_599cffa7078219_24891267($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post"  action="">
  
<div class="table_top">

<div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条订单信息</div>
     <div class="table_top_r">
        <ul>

<li class="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['status']=='') {?>select<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fanli&a=main">全&nbsp;&nbsp;部</a></li>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['order_status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<li class="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['status']!=''&&$_smarty_tpl->tpl_vars['_GET']->value['status']==$_smarty_tpl->tpl_vars['k']->value) {?>on<?php }?>"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fanli&a=main&status=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
<?php } ?>


<li  style="margin-left: 20px;">提交类型</li>

<li class="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['type']=="0") {?>on<?php }?>"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fanli&a=main&type=0">手动提交</a></li>
<li class="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['type']=="1") {?>on<?php }?>"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fanli&a=main&type=1">ios下单</a></li>
<li class="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['type']=="2") {?>on<?php }?>"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fanli&a=main&type=2">android下单</a></li>
<li class="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['type']=="3") {?>on<?php }?>"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fanli&a=main&type=3">消息订阅</a></li>

        </ul>
  </div>  

</div>
  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>
      <tr class="hover">
       <th class="td25">删除</th>
       <th class="td25">id</th>

        <th>标题</th>
        <th>获得积分</th>  
        <th>支付价格</th>
       
        <th>平台</th>
        <th>提交类型</th>
       <th>订单号</th>
       
       <th>订单创建时间</th>
       <th>订单结算时间</th>
       <th>所属用户</th>
       <th>导入时间</th>
		<th>状态</th>
       <th>删除</th>        
      </tr>
      </tbody>   
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
       <tbody>
<tr class="hover">  
<td class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
     <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" /></td>
<td class="td25"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>        
<td><a href="http://item.taobao.com/item.htm?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>

<td><?php echo $_smarty_tpl->tpl_vars['v']->value['jf'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>

<td><?php echo $_smarty_tpl->tpl_vars['v']->value['pingtai'];?>
</td>
<td>
<?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1) {?>
  ios下单
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?>
android下单
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type']==3) {?>
  消息订阅
<?php } else { ?>
  手动提交
<?php }?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_number'];?>
</td>
<td class="_dgmdate" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
"></td>
<td class="_dgmdate" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['end_time'];?>
" ></td>
<td>
<?php if ($_smarty_tpl->tpl_vars['v']->value['uid']>0) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fanli&a=main&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a>
<?php } else { ?>
待认领
<?php }?>
&nbsp;
</td>  
<td class="_dgmdate" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
" >&nbsp;</td>           
<td><?php echo $_smarty_tpl->tpl_vars['v']->value['status_text'];?>
</td>
<td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fanli&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&ok=1" class="_confirm" data-msg="您确认删除当前记录吗?删险后不可恢复">删除</a></td>

      </tr>
      </tbody>     
       <!--<?php } ?>-->
       <tbody>
      <tr>
        <td class="td25">
        <input type="checkbox" class="_del_all" />反选</td>
        <td><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="12">
        <div class="y"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        <div class="fixsel">
            <input type="submit" class="btn submit_btn" name="onsubmit"  value=" 提 交" >
          </div></td>
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
