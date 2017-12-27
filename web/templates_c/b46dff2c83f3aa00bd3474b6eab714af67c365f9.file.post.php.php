<?php /* Smarty version Smarty-3.1.15, created on 2017-08-09 11:01:53
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\goods\post.php" */ ?>
<?php /*%%SmartyHeaderCode:11114598a7b2105fc35-87880300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b46dff2c83f3aa00bd3474b6eab714af67c365f9' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\goods\\post.php',
      1 => 1487948540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11114598a7b2105fc35-87880300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'CURMODULE' => 0,
    '_G' => 0,
    'goods' => 0,
    'URL' => 0,
    'CURACTION' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'k' => 0,
    'band_list' => 0,
    'v' => 0,
    'v1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a7b211c5845_25095981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a7b211c5845_25095981')) {function content_598a7b211c5845_25095981($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!--<?php if ($_smarty_tpl->tpl_vars['_GET']->value['aid']&&$_smarty_tpl->tpl_vars['CURMODULE']->value=='goods') {?>-->
<div class="table_top">
<a href="/index.php?<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['link_type']==1) {?>itemid=<?php echo $_smarty_tpl->tpl_vars['goods']->value['num_iid'];?>
<?php } else { ?>aid=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['aid'];?>
<?php }?>" target="_blank">前台查看</a>&nbsp;&nbsp;
<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=channel&a=main&fid=<?php echo $_smarty_tpl->tpl_vars['goods']->value['fid'];?>
">查看本栏目商品</a>&nbsp;&nbsp;
<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=channel&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['goods']->value['fid'];?>
">编辑栏目信息</a>&nbsp;&nbsp;

</div>
<!--<?php }?>-->

  <div class="table_main">
<form enctype="multipart/form-data"  method="post" action="" >
  <table class="tb tb2 nobdb">

       <tbody>
          <tr class="noborder" >
            <td  class="td_l">自动抓取:</td>
            <td class="vtop rowform">
            <input name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['goods_id'];?>
"  type="text" class="txt web_num_iid" >
              &nbsp;
              <?php if ($_smarty_tpl->tpl_vars['_GET']->value['aid']) {?>
              <input type="hidden" name="goods_aid"  class="goods_aid"  value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['aid'];?>
" />
              <?php }?>
              <input type="submit" class="btn web_btn"  name="get_submit" value="抓取" >
              </td>
            <td class="vtop tips2" >填写商品ID或是商品链接,可自动获取商品信息</td>
          </tr>
          </tbody>
          </table>
      <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>

      <form enctype="multipart/form-data"  method="post" action="" >
        <table class="tb tb2 nobdb">
     <tbody>

      <tr class="noborder" >
        <td  class="td_l">商品标题:</td>
        <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" type="text" class="txt _keywords"></td>
        <td class="vtop tips2" >必填</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">所属栏目:</td>
        <td class="vtop rowform">

<select name="postdb[fid]" class="select_fid">
 <option value="0">----请选择栏目----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['vv']->value['fid']||$_smarty_tpl->tpl_vars['vv']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['vvv']->value['fid']||$_smarty_tpl->tpl_vars['vvv']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['a']->value['fid']||$_smarty_tpl->tpl_vars['a']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->
      <!--<?php } ?>-->
<!--<?php }?>-->
<!--<?php } ?>-->
</select>

          </td>
        <td class="vtop tips2" >本栏目的上级栏目或分类</td>
      </tr>

		<tr class="noborder" >
        <td class="td_l">商品分类:</td>
        <td class="vtop rowform">

<select name="postdb[cate]" class="select_fid">
 <option value="0">----请选择分类----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['goods_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->
      <!--<?php } ?>-->
<!--<?php }?>-->
<!--<?php } ?>-->
</select>


          </td>
        <td class="vtop tips2" >给商品添加分类,可在不同区域按需调用</td>
      </tr>

 	<tr class="noborder" >
        <td class="td_l">商品标记:</td>
        <td class="vtop rowform"><select name="postdb[flag]">
            <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['flag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->
            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['flag']==$_smarty_tpl->tpl_vars['k']->value) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</option>
            <!--<?php } ?>-->
          </select></td>
       <td class="vtop tips2" >商品标记,可在全局设置里添加修改,方便调用特定数据</td>
      </tr>
<?php if ($_smarty_tpl->tpl_vars['_G']->value['brand']) {?>
   <tr class="noborder" >
        <td class="td_l">所属品牌:</td>
        <td class="vtop rowform">

        <select name="postdb[brand_id]" class="z brand_select">
         <option value="0">----请选择品牌----</option>
            <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['brand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->
            <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['brand_id']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
            <!--<?php } ?>-->
          </select>
              <div class="z">  搜索 <input   value="" type="text" class="txt w90 brand_kw" ></div>

              <div class="cl hide brand_list"><?php echo $_smarty_tpl->tpl_vars['band_list']->value;?>
</div>
          </td>
       <td class="vtop tips2" >所属品牌</td>
      </tr>
<?php }?>
      <tr class="td_l noborder" >
        <td >店铺类型:</td>
        <td class="vtop rowform"><ul>
            <li >
              <input class="radio" type="radio" name="postdb[shop_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==1) {?>checked="checked"<?php }?>>
              &nbsp;商城</li>
            <li>
              <input class="radio" type="radio" name="postdb[shop_type]" value="2" <?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==2) {?>checked="checked"<?php }?>>
              &nbsp;集市</li>
              <li>
              <input class="radio" type="radio" name="postdb[shop_type]" value="0" <?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==0) {?>checked="checked"<?php }?>>
              &nbsp;未知</li>
          </ul></td>
        <td class="vtop tips2" >卖家店铺类型</td>
      </tr>

  <tr class="td_l noborder" >
        <td >显示状态:</td>
        <td class="vtop rowform">


<select name="postdb[status]" class="select">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['goods_status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
 <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['status']==((string)$_smarty_tpl->tpl_vars['k']->value)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
 <?php } ?>
 </select>

</td>
        <td class="vtop tips2" >
只有正常上架的商品才会在前台和APP展示
        </td>
      </tr>

 <tr class="td_l noborder" >
        <td >佣金类型:</td>
        <td class="vtop rowform"><ul>


           <li><input class="radio" type="radio" name="postdb[bili_type]" value="0" <?php if ($_smarty_tpl->tpl_vars['goods']->value['bili_type']==0) {?>checked="checked"<?php }?>>
              &nbsp;普通</li>
            <li >
              <input class="radio" type="radio" name="postdb[bili_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['bili_type']==1) {?>checked="checked"<?php }?>>
              &nbsp;鹊桥</li>
            <li>
              <input class="radio" type="radio" name="postdb[bili_type]" value="2" <?php if ($_smarty_tpl->tpl_vars['goods']->value['bili_type']==2) {?>checked="checked"<?php }?>>
              &nbsp;定向</li>
              <li>
             
          </ul></td>
        <td class="vtop tips2" >当前商品的佣金类型</td>
      </tr>

       <tr class="noborder" >
        <td class="td_l">优惠卷地址</td>
        <td class="vtop rowform"><input type="txt" name="postdb[juan_url]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['juan_url'];?>
"  class="txt"/></td>
        <td class="vtop tips2" >如果有优惠券的话可以填写领取的地址</td>
      </tr>

 <tr class="noborder" >
        <td class="td_l">优惠卷金额</td>
        <td class="vtop rowform"><input type="txt" name="postdb[juan_price]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['juan_price'];?>
"  class="txt"/></td>
        <td class="vtop tips2" >优惠卷金额</td>
      </tr>


    <tr class="noborder" >
        <td class="td_l">券总数:</td>
        <td class="vtop rowform"><input  name="postdb[quan_sum]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['quan_sum'];?>
" type="text" class="txt w90" ></td>
        <td class="vtop tips2" >已经领取的优惠券数量</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">剩余券数:</td>
        <td class="vtop rowform"><input  name="postdb[quan_num]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['quan_num'];?>
" type="text" class="txt w90" ></td>
        <td class="vtop tips2" >剩余的优惠券数量</td>
      </tr>

      <tr class="noborder" >
        <td class="td_l">淘口令:</td>
        <td class="vtop rowform"><input  name="postdb[tkl]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['tkl'];?>
" type="text" class="txt tkl_input" >
            <?php if (!$_smarty_tpl->tpl_vars['goods']->value['tkl']) {?><a href="#" class="create_tkl red">生成淘口令</a><?php }?>
        </td>
        <td class="vtop tips2" >如果有豆号分格两组的话,则第一组是商品的淘口令,第二组为优惠券的淘口令.没有豆号分格则只是商品的淘口令</td>
      </tr>


<tr class="noborder" >
          <td class="td_l">seo keywords:</td>
          <td class="vtop rowform">
          <input name="postdb[keywords]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['keywords'];?>
" type="text" class="txt _in_keywords">
          </td>
          <td class="vtop tips2" >seo的关键字,便于搜索引擎收录,多个用,分格开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">seo description:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[description]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['goods']->value['description'];?>
</textarea></td>
          <td class="vtop tips2" >seo的描述,便于搜索引擎收录,120字内</td>
        </tr>
      <tr class="noborder" >
        <td class="td_l">排序:</td>
        <td class="vtop rowform"><input  name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sort'];?>
" type="text" class="txt w90" ></td>
        <td class="vtop tips2" >在列表页显示时,值越大越靠前,留空则默认发布时间降序</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">浏览次数:</td>
        <td class="vtop rowform"><input  name="postdb[views]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['views'];?>
" type="text" class="txt w90" ></td>
        <td class="vtop tips2" >当前商品的浏览次数</td>
      </tr>

     <tr class="noborder" >
        <td class="td_l">赞/喜欢:</td>
        <td class="vtop rowform"><input  name="postdb[like]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['like'];?>
" type="text" class="txt" ></td>
        <td class="vtop tips2" ></td>
      </tr>
      <tr class="noborder hide" >
        <td  class="td_l">商品ID:</td>
        <td class="vtop rowform"><input name="postdb[num_iid]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['num_iid'];?>
" type="text" class="txt"></td>
        <td class="vtop tips2" >采集的请不要更改</td>
      </tr>
 <tr class="noborder" >
        <td class="td_l">销量:</td>
        <td class="vtop rowform"><input  name="postdb[sum]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sum'];?>
" type="text" class="txt" ></td>
        <td class="vtop tips2" >商品销量</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">商品主图:</td>
        <td class="vtop rowform _hover_img">

<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" type="text" class="txt pic_upload change_pic_main" >
<?php if ($_smarty_tpl->tpl_vars['goods']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;

<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />

        </td>
        <td class="vtop tips2" >前台显示时,都将会显示这个为缩略图</td>
      </tr>

      <tr class="noborder" >
        <td class="td_l">商品副图:</td>
        <td class="vtop rowform goods_img2">
        <?php if ($_smarty_tpl->tpl_vars['goods']->value['images']) {?>
        <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
       <p class="_hover_img">
        <input  name="images[]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" type="text" class="txt change_pic_value" >
        <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="change_pic red">选为主图</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
"  /></a>
       </p>
        <?php } ?>
        <?php } else { ?>
        <input  name="images[]" value="" type="text" class="txt" >
        <?php }?>
          </td>
        <td class="vtop tips2" >一般可不用理会</td>
      </tr>

      <tr class="noborder" >
        <td class="td_l">卖家昵称:</td>
        <td class="vtop rowform"><input  name="postdb[nick]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['nick'];?>
" type="text" class="txt" >
        <?php if ($_smarty_tpl->tpl_vars['goods']->value['nick']) {?>&nbsp;&nbsp;<a href="#"  class="_wangwang" data-nick="<?php echo $_smarty_tpl->tpl_vars['goods']->value['nick'];?>
"></a><?php }?>
        </td>
        <td class="vtop tips2" >卖家的旺旺<?php if ($_smarty_tpl->tpl_vars['goods']->value['nick']) {?>,可以点击联系卖家<?php }?></td>
      </tr>
<tr class="noborder" >
        <td class="td_l">卖家用户id:</td>
        <td class="vtop rowform"><input  name="postdb[sid]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sid'];?>
" type="text" class="txt" >

        </td>
        <td class="vtop tips2" >卖家的用户id</td>
      </tr>


      <tr class="noborder" >
        <td class="td_l">商品链接地址:</td>
        <td class="vtop rowform"><input  name="postdb[url]" value="<?php if ($_smarty_tpl->tpl_vars['goods']->value['org_url']) {?><?php echo $_smarty_tpl->tpl_vars['goods']->value['org_url'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['goods']->value['url'];?>
<?php }?>" type="text" class="txt" ></td>
        <td class="vtop tips2" ></td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">商品原价:</td>
        <td class="vtop rowform"><input  name="postdb[price]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
" type="text" class="txt" ></td>
        <td class="vtop tips2" >最多一位小数</td>
      </tr>

      <tr class="noborder" >
        <td class="td_l">上线时间段:</td>
        <td class="vtop rowform"><input  name="postdb[start_time]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['start_time'];?>
" type="text" class="txt _dateline" ></td>
        <td class="vtop tips2" >未到时间,此商品不会在首页及列表页中显示,0或空则不限时间</td>
      </tr>
      <tr class="noborder" >
        <td class="td_l">下线时间段:</td>
        <td class="vtop rowform"><input  name="postdb[end_time]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['end_time'];?>
" type="text" class="txt _dateline" ></td>
        <td class="vtop tips2" >已到时间,则不会显示,0或空则不限时间</td>
      </tr>

      <tr class="noborder" >
        <td class="td_l">商品现价:</td>
        <td class="vtop rowform"><input  name="postdb[yh_price]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['yh_price'];?>
" type="text" class="txt " > 元</td>
        <td class="vtop tips2" >优惠价,最多一位小数</td>
      </tr>
      <tr class="noborder" >
          <td  class="td_l">佣金比例:</td>
          <td class="vtop rowform">
          <input name="postdb[bili]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['bili'];?>
" type="text"  class="txt w90"> %<?php if ($_smarty_tpl->tpl_vars['goods']->value['yongjin']) {?>&nbsp;&nbsp;= &nbsp;<?php echo $_smarty_tpl->tpl_vars['goods']->value['yongjin'];?>
 元<?php }?></td>
          <td class="vtop tips2" >佣金比例,如果自动查询的是为-1,则说明当前商品不是淘宝客商品,无佣金的</td>
	</tr>

    <tr class="noborder" >
            <td class="td_l">推荐理由:</td>
            <td class="vtop rowform">
            <textarea rows="6" name="postdb[ly]" cols="70" class="textarea _keywords"><?php echo $_smarty_tpl->tpl_vars['goods']->value['ly'];?>
</textarea>
            </td>
            <td class="vtop tips2">商品推荐理由,250字以内,可空</td>
    </tr>



    <tr>
    	<td colspan="3">&nbsp;</td>
    </tr>


<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['get_message']==1) {?>
      <tr class="noborder" >
        <td class="td_l">商品详细描述:</td>
        <td class="vtop rowform" colspan="3">
<div class="kg_editorContainer"  data-config='{
"width":"900","height":"400"
        }'>
        <textarea rows="6" name="postdb[message]" cols="70" class="ks-editor-textarea" id = "web_editor"><?php echo $_smarty_tpl->tpl_vars['goods']->value['message'];?>
</textarea></div>
        </td>
        <td>&nbsp;</td>
      </tr>
<?php }?>
      <tr>
      <td>&nbsp;</td>
        <td colspan="5"><div class="fixsel">
            <input type="submit" class="btn submit_btn"   name="onsubmit" title="按 Enter 键可随时提交您的修改" value="提交" >
          </div></td>
      </tr>
<?php if ($_smarty_tpl->tpl_vars['goods']->value['aid']) {?>
<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['aid'];?>
" />
<?php }?>
<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />

    </tbody>

  </table>
      </form>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
