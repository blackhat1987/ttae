<?php /* Smarty version Smarty-3.1.15, created on 2017-09-01 20:30:40
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\goods\tkl.php" */ ?>
<?php /*%%SmartyHeaderCode:1414559a952f0749762-50778724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f4600a158acbaaf4258cd4162279a751fcbc77' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\goods\\tkl.php',
      1 => 1478964140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414559a952f0749762-50778724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL' => 0,
    '_G' => 0,
    'count_tkl' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59a952f07a0647_71988963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a952f07a0647_71988963')) {function content_59a952f07a0647_71988963($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">

  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>

<tr class="noborder">
          <td class="td_l">使用说明:</td>
          <td class="vtop rowform" >

            <p>1,必须在后台->站点配置->采集配置 中设置了淘宝客的appKey信息</p>
            <p>2,当前接口为淘宝收费接口,收费方式为: 0.01元/百次/Appkey
              <a href="http://open.taobao.com/docs/doc.htm?spm=a219a.7395905.0.0.TfOJQo&docType=1&articleId=104559" target="_blank" class="red">具体点击查看 基础API</a>
          </p>
           <p>3,您的淘宝客Appkey必须有 <span class="red">淘口令基础包</span> 权限 可以在 淘宝开放平台查看.不确定是否有权限.则可以点击右侧立即生成一次看看,如提示生成成功则是有权限,如提示 开发者权限不足.... 则是没有这个权限(如没权限请更换appkey后再重试)</p>

          </td>
            <td class="vtop tips2 "><div class="btn" style="width:60px;line-height: 34px;">
            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=tkl_create" target="_blank"  style="margin: 0;color: #fff;text-decoration: none;">立即生成</a>
         
            </div>

            </td>
        </tr>
        

         <tr class="noborder">
          <td class="td_l">生成介绍:</td>
          <td class="vtop rowform" colspan="2">

          <p>立即生成:就是立刻先把站内所有商品生成淘口令</p>
          <p>如果在分享时没有淘口令,则会动态请求接口生成一个淘口令</p>
          <p class="red">建议上方的立即生成可以不必点击(即就每次都是动态生成),因为此接口为淘宝收费接口,避免生成多余口令浪费资源</p>
          </td>
        </tr>



        <tr class="noborder">
          <td class="td_l">是否生成商品口令:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[tkl_goods]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['tkl_goods']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[tkl_goods]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['tkl_goods']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">没有二合一券是否生成商品口令,有二合一优先二合一,没有则只生成淘宝的口令.选否则如果没有二合一,也不会生成商品口令</td>
        </tr>

         <tr class="noborder">
          <td class="td_l">待生成商品统计:</td>
          <td class="vtop rowform">
        网站内还有 <span class="red"><?php echo $_smarty_tpl->tpl_vars['count_tkl']->value;?>
</span> 条商品未生成淘口令
          </td>
          <td class="vtop tips2">站内还有多少条商品未生成淘口令(只统计正常在线的商品)</td>
        </tr>



      <tr class="noborder" >
          <td class="td_l">生成的口令详情:</td>
          <td class="vtop rowform">
        <textarea rows="5" name="postdb[tkl_text]" cols="60" class="textarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tkl_text'];?>
</textarea>
          </td>
          <td class="vtop tips2">

          <p>手淘中识别口令后显示的内容,以下字段可替换成商品当前的信息,可自由组合</p>
        <p class="red">如:{title},原价{yh_price}元,现领{juan_price}元优惠券,下单只需{final_price}元,机不可失!!!</p>
        <p>生成后的商品口令内容如下</p>
        <p class="red">2016冬季中长款棉衣男加厚棉服外套韩版青少年修身连帽大码棉袄潮,原价50元,现领20元优惠券,下单只需30元,机不可失!!!</p>
        <p>{title} => 商品标题</p>
        <p>{yh_price} => 优惠价格(出售中的价格)</p>
        <p>{juan_price} => 优惠券价格</p>
        <p>{final_price} => 券后价</p>

          </td>
        
        </tr>




        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel">
              <input type="submit" class="btn submit_btn"  name="onsubmit" value="保存">
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
