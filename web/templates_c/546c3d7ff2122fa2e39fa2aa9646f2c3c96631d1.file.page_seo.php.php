<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 21:10:27
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\admin\page_seo.php" */ ?>
<?php /*%%SmartyHeaderCode:30985996e743a0fd51-64379929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546c3d7ff2122fa2e39fa2aa9646f2c3c96631d1' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\admin\\page_seo.php',
      1 => 1446512879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30985996e743a0fd51-64379929',
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
  'unifunc' => 'content_5996e743a635d3_04565000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e743a635d3_04565000')) {function content_5996e743a635d3_04565000($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
 
         <tr class="noborder">
              <td class="td_l">9块9seo标题:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[jk9_seo_tit]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['jk9_seo_tit'];?>
" />
                </td>
              <td class="vtop tips2">9块9列表页SEO标题</td>
      	  </tr>
           <tr class="noborder">
              <td class="td_l">9块9seo关键字:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[jk9_seo_kw]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['jk9_seo_kw'];?>
" />
                </td>
              <td class="vtop tips2">9块9列表页SEO关键字,多个用英文豆号(,)格开</td>
      	  </tr>
      
       
       <tr class="noborder">
              <td class="td_l">9块9seo描述:</td>
              <td class="vtop rowform">
                <textarea rows="3"  name="postdb[jk9_seo_desc]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['jk9_seo_desc'];?>
</textarea>
                </td>
              <td class="vtop tips2">9块9列表页SEO描述</td>
      	  </tr>
      
        <tr class="noborder">
              <td class="td_l">&nbsp;</td>
              <td class="vtop rowform">&nbsp;
               
                </td>
              <td class="vtop tips2">&nbsp;</td>
      	  </tr>
      


 <tr class="noborder">
              <td class="td_l">19块9seo标题:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[sjk9_seo_tit]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['sjk9_seo_tit'];?>
" />
                </td>
              <td class="vtop tips2">19块9列表页SEO标题</td>
      	  </tr>
           <tr class="noborder">
              <td class="td_l">19块9seo关键字:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[sjk9_seo_kw]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['sjk9_seo_kw'];?>
" />
                </td>
              <td class="vtop tips2">19块9列表页SEO关键字,多个用英文豆号(,)格开</td>
      	  </tr>
      
       
       <tr class="noborder">
              <td class="td_l">19块9seo描述:</td>
              <td class="vtop rowform">
                <textarea rows="3"  name="postdb[sjk9_seo_desc]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['sjk9_seo_desc'];?>
</textarea>
                </td>
              <td class="vtop tips2">19块9列表页SEO描述</td>
      	  </tr>
      
       <tr class="noborder">
              <td class="td_l">&nbsp;</td>
              <td class="vtop rowform">&nbsp;
               
                </td>
              <td class="vtop tips2">&nbsp;</td>
      	  </tr>
      
		 <tr class="noborder">
              <td class="td_l">今日新品seo标题:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[today_seo_tit]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['today_seo_tit'];?>
" />
                </td>
              <td class="vtop tips2">今日新品列表页SEO标题</td>
      	  </tr>
           <tr class="noborder">
              <td class="td_l">今日新品seo关键字:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[today_seo_kw]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['today_seo_kw'];?>
" />
                </td>
              <td class="vtop tips2">今日新品列表页SEO关键字,多个用英文豆号(,)格开</td>
      	  </tr>
      
       
       <tr class="noborder">
              <td class="td_l">今日新品seo描述:</td>
              <td class="vtop rowform">
                <textarea rows="3"  name="postdb[today_seo_desc]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['today_seo_desc'];?>
</textarea>
                </td>
              <td class="vtop tips2">今日新品列表页SEO描述</td>
      	  </tr>
          
          
          
      	 <tr class="noborder">
              <td class="td_l">&nbsp;</td>
              <td class="vtop rowform">&nbsp;</td>
              <td class="vtop tips2">&nbsp;</td>
      	  </tr>
		 <tr class="noborder">
              <td class="td_l">明日预告seo标题:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[tomorrow_seo_tit]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tomorrow_seo_tit'];?>
" />
                </td>
              <td class="vtop tips2">明日预告列表页SEO标题</td>
      	  </tr>
           <tr class="noborder">
              <td class="td_l">明日预告seo关键字:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[tomorrow_seo_kw]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tomorrow_seo_kw'];?>
" />
                </td>
              <td class="vtop tips2">明日预告列表页SEO关键字,多个用英文豆号(,)格开</td>
      	  </tr>
      	 <tr class="noborder">
              <td class="td_l">明日预告seo描述:</td>
              <td class="vtop rowform">
                <textarea rows="3"  name="postdb[tomorrow_seo_desc]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tomorrow_seo_desc'];?>
</textarea>
                </td>
              <td class="vtop tips2">明日预告列表页SEO描述</td>
      	  </tr>
          
          
          


      	 <tr class="noborder">
              <td class="td_l">&nbsp;</td>
              <td class="vtop rowform">&nbsp;</td>
              <td class="vtop tips2">&nbsp;</td>
      	  </tr>
		 <tr class="noborder">
              <td class="td_l">全部商品seo标题:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[all_seo_tit]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['all_seo_tit'];?>
" />
                </td>
              <td class="vtop tips2">全部商品列表SEO标题</td>
      	  </tr>
           <tr class="noborder">
              <td class="td_l">全部商品seo关键字:</td>
              <td class="vtop rowform">
                <input class="txt " type="text" name="postdb[all_seo_kw]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['all_seo_kw'];?>
" />
                </td>
              <td class="vtop tips2">全部商品列表页SEO关键字,多个用英文豆号(,)格开</td>
      	  </tr>
      	 <tr class="noborder">
              <td class="td_l">全部商品seo描述:</td>
              <td class="vtop rowform">
                <textarea rows="3"  name="postdb[all_seo_desc]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['all_seo_desc'];?>
</textarea>
                </td>
              <td class="vtop tips2">明日预告列表页SEO描述</td>
      	  </tr>
          
          

        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel">
              <input type="submit" class="btn submit_btn"  name="onsubmit" value="提交">
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
