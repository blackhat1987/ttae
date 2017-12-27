<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:45:36
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\apply\main.php" */ ?>
<?php /*%%SmartyHeaderCode:275155996e170956766-62384371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '745329dc4cbaeb1cb5dd6fde9d1e1112e36189cf' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\apply\\main.php',
      1 => 1467293553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275155996e170956766-62384371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_GET' => 0,
    'bm_status_text' => 0,
    'v' => 0,
    'goods' => 0,
    'k' => 0,
    '_G' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'v1' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e170ac2b10_72648656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e170ac2b10_72648656')) {function content_5996e170ac2b10_72648656($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data"  method="post"  >

<div class="table_top">

 <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)个商品信息</div>
     <div class="table_top_r">
        <ul>

<li>按条件查看商品</li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=-1">全部</a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']&&$_smarty_tpl->tpl_vars['_GET']->value['checks']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=1"><span>已审核</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']&&$_smarty_tpl->tpl_vars['_GET']->value['checks']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=2"><span>已拒绝</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']&&$_smarty_tpl->tpl_vars['_GET']->value['checks']==0) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=0"><span>未审核</span></a></li>

<?php if ($_smarty_tpl->tpl_vars['bm_status_text']->value) {?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bm_status_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']&&$_smarty_tpl->tpl_vars['_GET']->value['checks']==$_smarty_tpl->tpl_vars['v']->value['status']) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></a></li>

<?php } ?>
<?php }?>

        </ul>
  </div>

</div>
  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>

      <tr class="hover">
        <td>删除</td>

        <td>报名用户</td>
        <td >所属栏目</td>
        <td class="goods_title">标题</td>
        <td>qq</td>
        <td>优惠价</td>
        <td>销量</td>
        <td>佣金</td>
        <td>分类</td>
         <td>上线/下线时间</td>
        <td>审核</td>
        <td>推荐理由</td>
        <td>删除</td>
        <td>报名时间</td>
      </tr>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>-->
      <tr class="hover">
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
          &nbsp;
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" />
           <input type="hidden" name="num_iids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
" />
           </td>
        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['uid']>0) {?><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a><?php } else { ?>游客<?php }?></td>
        <td ><span class="channel_name_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['channel_name'];?>
</span> <a  class=" red change_fid " data-index="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">修改栏目</a>
         <input type="hidden" name="fids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
" class="fid_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" />
        </td>
        <td class="_hover_img goods_title" style="width:430px">

       <input type="text" name="titles[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" class="text" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" style="width:370px;" />

        <?php if ($_smarty_tpl->tpl_vars['v']->value['shop_type']==1) {?>(商城)<?php } else { ?>(淘宝)<?php }?>&nbsp;
        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a>
        </td>

        <td ><?php if ($_smarty_tpl->tpl_vars['v']->value['qq']) {?><a href="#" target="_blank" class="_qq" data-qq="<?php echo $_smarty_tpl->tpl_vars['v']->value['qq'];?>
"></a><?php }?></td>
        <td> <input type="text" name="yh_prices[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" class="text w90" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>
" /></td>
        <td> <input type="text" name="sums[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" class="text w90" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
" /></td>

        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['bili']=="-1") {?> <span class="red">无佣金</span> <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['bili']>0) {?> <?php echo $_smarty_tpl->tpl_vars['v']->value['bili'];?>
%<?php }?>&nbsp;</td>

        <td>

<select name="cates[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" class="select_fid">
<option value="0">----请选择分类----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['goods_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
    <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cate']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
        <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
         <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
         <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cate']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
        <!--<?php } ?>-->
        <!--<?php }?>-->
    <!--<?php } ?>-->
<!--<?php }?>-->
<!--<?php } ?>-->
</select>

          </td>
           <td><p><input type="text" name="start_time[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['start_time'];?>
" class="txt _dateline" /></p>
        <p><input type="text" name="end_time[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['end_time'];?>
" class="txt _dateline" /></p>
        </td>

          <td>
          <select name="check_es[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" >
              <option value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==0) {?> selected<?php }?>>待审核</option>
              <option value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==1) {?> selected class="red"<?php }?>>通过</option>
              <option value="2" <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==2) {?> selected<?php }?>>拒绝</option>
<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bm_status_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
?>
 <option value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['status'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==$_smarty_tpl->tpl_vars['v1']->value['status']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v1']->value['name'];?>
</option>
<?php } ?>
          </select>
          &nbsp; <a class="red msg_click" data-index="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">留言</a>
          <input type="hidden" name="check_msgs[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['check_msg'];?>
" class="txt msg_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" />

          </td>
             <td class="_showDialog " data-msg="<?php echo $_smarty_tpl->tpl_vars['v']->value['ly'];?>
" data-status="success">点击查看</td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['_G']->value['page'];?>
" class="_confirm" data-msg="您确定删除本商品?删除后不可恢复">删除</a></td>
        <td  class="_dgmdate" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
"></td>
      </tr>
      <!--<?php } ?>-->



     <tr>
      <td class="td28" colspan="1"><input type="checkbox" class="_del_all" />反选 </td>
      <td colspan="12">审核:
       <select name="checks_in" >
        <option value="-1">无修改</option>
              <option value="0">待审核</option>
              <option value="1">通过</option>
              <option value="2">拒绝</option>
<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bm_status_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
?>
 <option value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['status'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==$_smarty_tpl->tpl_vars['v1']->value['status']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v1']->value['name'];?>
</option>
<?php } ?>
      </select>
    拒绝理由 <input type="text" name="msgs" value="" class="txt" />
      <div class="y"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
 </div></td>
     </tr>



      <tr>

        <td class="td28"><input type="checkbox" name="_del_all"  value="1"  />删除</td>
        <td  colspan="13">
          <div class="fixsel cl">


<select name="in_fid" class="select_fid">
 <option value="0">请选择要移动的栏目</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']==$_smarty_tpl->tpl_vars['vv']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']==$_smarty_tpl->tpl_vars['vvv']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']==$_smarty_tpl->tpl_vars['a']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->
      <!--<?php } ?>-->
<!--<?php }?>-->
<!--<?php } ?>-->
</select>


标记:<select name="flag_in">
  <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['flag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->
  <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</option>
  <!--<?php } ?>-->
</select>&nbsp;&nbsp;


<select name="cate_in" class="select_fid">
 <option value="-1">请选择要移动的分类</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['goods_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->
      <!--<?php } ?>-->
<!--<?php }?>-->
<!--<?php } ?>-->
</select>


&nbsp;&nbsp;
上线时间:
<input type="text" name="start_time_in" value="" class="txt _dateline start_time_in" style="width:180px" />&nbsp;&nbsp;
下线时间:
<input type="text" name="end_time_in" value="" class="txt _dateline start_time_in" style="width:180px" />


          </div></td>

      </tr>


      <tr>
      	<td >&nbsp;</td>
          <td  colspan="11"><input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交">

          </td>
      </tr>


    </tbody>
  </table>
<div class="change_msg" style="display:none;position:absolute;background:#fff;padding:10px 20px;border:5px solid #ccc;">
<input type="text"  value="" class="txt msg_text"  />
<input type="button" class="btn msg_btn" value="确定">
&nbsp;&nbsp;<a href="#" class="close_msg">关闭</a>
</div>

<div class="change_channel " style="display:none;position:absolute;background:#fff;padding:20px;border:5px solid #ccc;">

<select class="select_channel_fid">
 <option value="0">请选择要移动的栏目</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->
      <!--<?php } ?>-->
<!--<?php }?>-->
<!--<?php } ?>-->
</select>
<input type="button" class="btn channel_btn" value="确定">
&nbsp;&nbsp;<a href="#" class="close_channel">关闭</a>
</div>

  </div>
<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>
<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
