<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:52:18
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\goods\quan_import.php" */ ?>
<?php /*%%SmartyHeaderCode:65185996e3028edd07-43958696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad861e4bd8dd16807525df3d040421732bd4ceab' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\goods\\quan_import.php',
      1 => 1495728182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65185996e3028edd07-43958696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e302920cc6_69858718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e302920cc6_69858718')) {function content_5996e302920cc6_69858718($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="/assets/admin/js/quan_upload.js"></script>

<form enctype="multipart/form-data" method="post">
  <div class="table_main" data-key="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['syn_key'];?>
">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">使用说明:</td>
          <td class="vtop rowform" data-left="150" colspan="2" style="font-size: 14px;line-height: 24px">
            <p>
            1,在阿里妈妈后台下单优惠券订单信息,然后在此入进行批量导入
          <a href="http://pub.alimama.com/myunion.htm?#!/promo/self/items" target="_blank" class="red">立即下载</a>
          </p>
          <p>2,下载成功后,文件比较大(几十MB),然后打开这个下载的excel->启用编辑,然后->文件->另存为->"Unicode 文本(*.txt)"->保存</p>
          <p>3,在此处点击上传文件,将刚另存为的txt文件选择,然后点击下方的开始发布</p>
          <p>注意:浏览器必须为chrome或是360极速或猎豹,或是UC,百度等浏览器,否则不支持.</p>
          <p>发布期间,请不要关闭本窗口,但是你可以打开一个新页面继续做其它后台的工作,不会影响此处的发布</p>
          <p>发布间隔默认为5秒一次,每次发布50条商品,下载的商品共1万条,商品估计都是走高佣的(没测试)</p>
          <p>如果发布成功数为0,则可能是商品已存在,发布后需要手动修改分类,没有办法自动给商品分类.如果你懒的分类都不想弄,请不要使用此功能了</p>
            </td>
          </tr>



        <tr class="noborder" >
          <td class="td_l">txt文件:</td>
          <td class="vtop rowform "><input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" /></td>
          <td class="vtop tips2" >淘宝联盟导出的选品库,格式为xls文件,然后导出为文本文件txt</td>
        </tr>


        <tr class="noborder update_tr" >
          <td class="vtop rowform" colspan="3">

 <div class="post_count" style="font-size: 16px;">
    共读取到商品 <span>0</span> 条,正在进行第
     <span>0</span>/<span>0</span> 页
</div>
          </td>
        </tr>
        <tr class="noborder update_submit" >
          <td class="td_l">&nbsp;</td>
          <td class="vtop rowform" colspan="3">
          <!-- <input type="submit" class="btn submit_btn"  name="onsubmit"  value="立即上传"></td> -->
          <input type="button" class="btn submit_btn"   value="立即发布"></td>
        </tr>


 <tr class="noborder update_submit" >
         
          <td class="vtop rowform" colspan="4">
            <div class="log_box" style="font-size: 14px;line-height: 20px;">   </div>

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
