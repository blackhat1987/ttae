<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:52:12
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\fetch\post.php" */ ?>
<?php /*%%SmartyHeaderCode:214395996e2fc97f8a5-87505243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcfb570981dcf018ec470dfabe81a22421288baf' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\fetch\\post.php',
      1 => 1452775878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214395996e2fc97f8a5-87505243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fetch' => 0,
    '_G' => 0,
    'vv' => 0,
    'goods' => 0,
    'vvv' => 0,
    'a' => 0,
    'cates' => 0,
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e2fca1d584_83633564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e2fca1d584_83633564')) {function content_5996e2fca1d584_83633564($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder">
          <td class="td_l">规则名称:</td>
          <td class="vtop rowform"><input name="title" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['title'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">规则名称</td>
        </tr>
        
  <tr class="noborder" >
        <td class="td_l">所属栏目:</td>
        <td class="vtop rowform">

<select name="fid" class="select_fid"> 
 <option value="0">----请选择栏目----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['vv']->value['fid']||$_smarty_tpl->tpl_vars['vv']->value['fid']==$_smarty_tpl->tpl_vars['fetch']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['vvv']->value['fid']||$_smarty_tpl->tpl_vars['vvv']->value['fid']==$_smarty_tpl->tpl_vars['fetch']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['fid']==$_smarty_tpl->tpl_vars['a']->value['fid']||$_smarty_tpl->tpl_vars['a']->value['fid']==$_smarty_tpl->tpl_vars['fetch']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
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
      

  <tr class="noborder">
          <td class="td_l">关键字</td>
          <td class="vtop rowform" ><input name="postdb[keyword]" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['keyword'];?>
" type="text" class="txt " >
            (<span class="red">*</span>) </td>
          <td class="vtop tips2">关键字与pid必填一项</td>
        </tr>
        
        
      <tr class="noborder">
          <td class="td_l">商品类目Id</td>
          <td class="vtop rowform" >         

                <select name="postdb[fup]"  class="select select_cates" >
                <option value="">----不限----</option>
                 <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
                <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['cid'];?>
"  <?php if ($_smarty_tpl->tpl_vars['fetch']->value['fup']==$_smarty_tpl->tpl_vars['vv']->value['cid']) {?> selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
                <!--<?php } ?>-->
                </select>
			<span class="select_cates_sub"  data-cid="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['cid'];?>
"></span>
            
            (*) </td>
          <td class="vtop tips2">cid关与键字必填一项</td>
        </tr>
      
      
     <tr class="noborder">
          <td class="td_l">是否商城:</td>
          <td class="vtop rowform">
          <input class="radio" type="radio" name="postdb[mall_item]" value="true" <?php if ($_smarty_tpl->tpl_vars['fetch']->value['mall_item']=='true') {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[mall_item]" value="false"  <?php if ($_smarty_tpl->tpl_vars['fetch']->value['mall_item']=='false') {?>checked="checked"<?php }?>>
            &nbsp;不限
			</td>
          <td class="vtop tips2">可空</td>
        </tr>
        
        
        <tr class="noborder">
          <td class="td_l">排序</td>
          <td class="vtop rowform" ><select name="postdb[sort]"  class="select auto_select" data-value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['sort'];?>
" >
              <option value="default" >默认</option>
              <option value="price_desc">原价从高到低</option>
              <option value="price_asc">原价从低到高</option>
              <option value="credit_desc">信用等级从高到低</option>
              <option value="credit_asc">信用等级从低到高</option>
              <option value="commission_num_desc">佣金比率从高到低</option>
              <option value="commission_rate_asc">佣金比率从低到高</option>
<!--              <option value="commission_num_desc">成交量成高到低</option>
              <option value="commission_num_asc">成交量从低到高</option>     -->         
            </select></td>
          <td class="vtop tips2"></td>
        </tr>
        
        <tr class="noborder">
          <td class="td_l">卖家信用</td>
          <td class="vtop rowform" ><select name="postdb[startcredit]" class="select auto_select"   style="width:120px;"  data-value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['startcredit'];?>
">
              <option value="">----不限----</option>
              <option value="1heart">一心</option>
              <option value="2heart ">二心</option>
              <option value="3heart ">三心</option>
              <option value="4heart ">四心</option>
              <option value="5heart ">五心</option>
              <option value="1diamond">一钻</option>
              <option value="2diamond">二钻</option>
              <option value="3diamond">三钻</option>
              <option value="4diamond">四钻</option>
              <option value="5diamond">五钻</option>
              <option value="1crown">一冠</option>
              <option value="2crown">二冠</option>
              <option value="3crown">三冠</option>
              <option value="4crown">四冠</option>
              <option value="5crown">五冠</option>
              <option value="1goldencrown">一黄冠</option>
              <option value="2goldencrown">二黄冠</option>
              <option value="3goldencrown">三冠</option>
              <option value="4goldencrown">四黄冠</option>
              <option value="5goldencrown">五黄冠</option>
            </select>            
            &nbsp;--&nbsp;
            <select name="postdb[endcredit]"   style="width:120px;" data-value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['endcredit'];?>
" class="select auto_select">
              <option value="">----不限----</option>
              <option value="1heart">一心</option>
              <option value="2heart ">二心</option>
              <option value="3heart ">三心</option>
              <option value="4heart ">四心</option>
              <option value="5heart ">五心</option>
              <option value="1diamond">一钻</option>
              <option value="2diamond">二钻</option>
              <option value="3diamond">三钻</option>
              <option value="4diamond">四钻</option>
              <option value="5diamond">五钻</option>
              <option value="1crown">一冠</option>
              <option value="2crown">二冠</option>
              <option value="3crown">三冠</option>
              <option value="4crown">四冠</option>
              <option value="5crown">五冠</option>
              <option value="1goldencrown">一黄冠</option>
              <option value="2goldencrown">二黄冠</option>
              <option value="3goldencrown">三黄冠</option>
              <option value="4goldencrown">四黄冠</option>
              <option value="5goldencrown">五黄冠</option>
            </select>

            
           </td>
          <td class="vtop tips2">可空,上限的值一定要小于或等于下限的值。注：上限与下限一起使用才生效</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">佣金比例范围</td>
          <td class="vtop rowform" ><input name="postdb[start_commission_rate]" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['start_commission_rate'];?>
" type="text" class="txt w90" >%
            &nbsp;--&nbsp;
            <input name="postdb[end_commission_rate]" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['end_commission_rate'];?>
" type="text" class="txt w90" >%</td>
          <td class="vtop tips2">可空,整数,1-100</td>
        </tr>
      
        <tr class="noborder">
          <td class="td_l">30天累计推广量范围</td>
          <td class="vtop rowform" ><input name="postdb[start_commission_num]" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['start_commission_num'];?>
" type="text" class="txt w90" >
            &nbsp;--&nbsp;
            <input name="postdb[end_commission_num]" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['end_commission_num'];?>
" type="text" class="txt w90" ></td>
          <td class="vtop tips2">可空,整数,需要上限和下限一起设置才有效</td>
        </tr>
       
       
       <!-- <tr class="noborder">
          <td class="td_l">商品总成交量范围</td>
          <td class="vtop rowform" ><input name="postdb[start_totalnum]" value="" type="text" class="txt w90" >
            &nbsp;--&nbsp;
            <input name="postdb[end_totalnum]" value="" type="text" class="txt w90" ></td>
          <td class="vtop tips2">可空,整数,需要上限和下限一起设置才有效</td>
        </tr>
        -->
         <tr class="noborder">
          <td class="td_l">价格范围</td>
          <td class="vtop rowform" ><input name="postdb[start_price]" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['start_price'];?>
" type="text" class="txt w90" >
            &nbsp;--&nbsp;
            <input name="postdb[end_price]" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['end_price'];?>
" type="text" class="txt w90" ></td>
          <td class="vtop tips2">可空,整数,需要上限和下限一起设置才有效</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">商品所在地</td>
          <td class="vtop rowform" ><input name="postdb[area]" value="<?php echo $_smarty_tpl->tpl_vars['fetch']->value['area'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">可空,如:杭州,北京,上海</td>
        </tr>

        <tr class="noborder">
          <td class="td_l">每页结果数</td>
          <td class="vtop rowform" ><input name="postdb[page_size]" value="<?php if ($_smarty_tpl->tpl_vars['fetch']->value['page_size']) {?><?php echo $_smarty_tpl->tpl_vars['fetch']->value['page_size'];?>
<?php } else { ?>100<?php }?>" type="text" class="txt" ></td>
          <td class="vtop tips2">可空,最大每页100</td>
        </tr>
        
        </tbody>
      
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><div class="fixsel"> 
            <!--<?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>-->
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" />
            <!--<?php }?>-->
            <input type="submit" class="btn submit_btn" name="onsubmit" value="提交">
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
