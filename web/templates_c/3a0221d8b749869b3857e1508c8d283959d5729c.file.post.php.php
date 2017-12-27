<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:51:58
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\weixin\post.php" */ ?>
<?php /*%%SmartyHeaderCode:315905996e2eea676b8-84851016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a0221d8b749869b3857e1508c8d283959d5729c' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\weixin\\post.php',
      1 => 1500435384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315905996e2eea676b8-84851016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
    'goods' => 0,
    'news_list' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e2eeacf056_20012960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e2eeacf056_20012960')) {function content_5996e2eeacf056_20012960($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  
  <div class="table_main">

 <form enctype="multipart/form-data"  method="post" action="" >
    <table class="tb tb2 nobdb">
       <tbody>
          <tr class="noborder" >
            <td  class="td_l">自动抓取:</td>
            <td class="vtop rowform">
            <input name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['goods_id'];?>
" type="text" class="txt web_num_iid" >
              &nbsp;
              <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>
            <!--   <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" /> -->
              <?php }?>
              <input type="submit" class="btn web_btn"  value="抓取" >
              </td>
            <td class="vtop tips2" >填写商品ID或是商品链接,可自动获取商品信息(商品必须存在商品管理中)</td>
          </tr>
     
          </tbody>
  </table>
   <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
      <input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>


      <form enctype="multipart/form-data" method="post">

  <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">标题:<span class="red">(必填)</span></td>
          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" type="text" class="txt ">
          </td>
          <td class="vtop tips2" >文章的必填,展示在推送列表和详情顶部</td>
        </tr>
        
       <tr class="noborder" >
          <td class="td_l">所属专题:<span class="red">(必填)</span></td>
          <td class="vtop rowform">
              <select name="postdb[list_id]" class="select">
              <option value="0">----请选择专题----</option>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['goods']->value['list_id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
              <?php } ?>
              </select>   
          </td>
          <td class="vtop tips2" >没有选择专题.无法把本文章推送给用户查看</td>
        </tr>
        
      
        
        <tr class="noborder" >
          <td class="td_l">缩略图: <span class="red">(必填)</span></td>
          <td class="vtop rowform _hover_img">
          
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['goods']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
"  /></a>

<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />


          </td>
          <td class="vtop tips2" > 
          当前文章的缩略图,必须是本地图,大小250x250以内(图片在站点/assets/目录下),不是本地图片会自动下载到本地目录</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">详情显示缩略图:</td>
          <td class="vtop rowform"><ul>
              <li >
                <input class="radio" type="radio" name="postdb[show_pic]" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['show_pic']==1) {?> checked="checked"<?php }?> >
                &nbsp;是</li>
              <li>
                <input class="radio" type="radio" name="postdb[show_pic]" value="0" <?php if ($_smarty_tpl->tpl_vars['goods']->value['show_pic']==0) {?> checked="checked"<?php }?>>
                &nbsp;否</li>
            </ul></td>
          <td class="vtop tips2" >文章详情页打开后,是否在顶部显示缩略图</td>
        </tr>
       
        
         <tr class="noborder" >
          <td class="td_l">查看原文url:</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >可空.可填写当前文章跳转的链接地址,(点击查看原文跳转的地址)如跳转到某商品页.或是9.9等页面</td>
        </tr>
      
        <tr class="noborder" >
          <td class="td_l">作者:</td>
          <td class="vtop rowform"><input name="postdb[username]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['username'];?>
" type="text" class="txt ">
          </td>
          <td class="vtop tips2" >文章的作者,可空</td>
        </tr>

        <tr class="noborder" >
          <td class="td_l">文章描述:</td>
          <td class="vtop rowform">
           <textarea rows="3" name="postdb[desc]" cols="50" class="textarea"><?php echo $_smarty_tpl->tpl_vars['goods']->value['desc'];?>
</textarea>
          </td>
          <td class="vtop tips2" >可空.文章描述,60字内,不填或空则会默认截取文章内容前60字</td>
        </tr>
       
        
        
        <tr class="noborder" >
          <td class="td_l">文章内容: <span class="red">(必填)</span></td>
          <td class="vtop rowform" colspan="3"><div class="kg_editorContainer"  data-config='{
          "width":"1100","height":"500"
        }'>
<textarea rows="6" name="postdb[content]" cols="70" class="ks-editor-textarea" id="web_editor" ><?php echo $_smarty_tpl->tpl_vars['goods']->value['content'];?>
</textarea>
            </div>
            
            </td>
        </tr>



        <tr class="noborder" >
        <td class="td_l">&nbsp;</td>
          <td class="vtop rowform" colspan="3"><div class="fixsel">
           <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" />
              <?php }?>
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交修改">
            </div></td>
        </tr>

        </tbody>
            </table>
<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>



  </div>


<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
