<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 21:10:26
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\admin\seo_setting.php" */ ?>
<?php /*%%SmartyHeaderCode:29545996e7423df194-37644516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc0053b0bae30225014d48f67328ce08ef71bb6' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\admin\\seo_setting.php',
      1 => 1479091776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29545996e7423df194-37644516',
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
  'unifunc' => 'content_5996e742457789_90277919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e742457789_90277919')) {function content_5996e742457789_90277919($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
      
      <tr class="noborder" >
          <td class="td_l">seo title:</td>
          <td class="vtop rowform">
          <input name="postdb[seo_title]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['seo_title'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >站点首页的title,显示在网站顶部标题中..</td>
        </tr>
        
 		<tr class="noborder" >
          <td class="td_l">seo keywords:</td>
          <td class="vtop rowform">
          <input name="postdb[seo_keywords]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['seo_keywords'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >站点首页的seo的关键字,便于搜索引擎收录,多个用,分格开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">seo description:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[seo_description]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['seo_description'];?>
</textarea></td>
          <td class="vtop tips2" >站点首页的seo的描述,便于搜索引擎收录,120字内</td>
        </tr>
	<tr class="noborder">
              <td class="td_l">内链关键字:</td>
              <td class="vtop rowform">
                <textarea rows="3" name="postdb[hight_link]" cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['hight_link'];?>
</textarea>
                </td>
              <td class="vtop tips2">自动给文章内容加内链,增加SEO效果,只填写文字即可,多个用英文的豆号(,)格开</td>
    </tr>
    
 <tr class="noborder">
          <td class="td_l">长尾关键字:</td>
          <td class="vtop rowform">
               <input name="postdb[long_keywords]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['long_keywords'];?>
" type="text" class="txt">
            </td>
          <td class="vtop tips2">在标题,关键字,描述后面,自动加上 要优化的关键字,留空代码不添加长尾</td>
</tr>


<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['api']==1) {?>
        <tr class="noborder" >
          <td class="td_l">sitemap关键字:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[sitemap_kw]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['sitemap_kw'];?>
</textarea></td>
          <td class="vtop tips2" >在使用全程API方式时,sitemap可自动生成随机关键字.多个用英文,号格开,每次是随机5个,每个获取50条商品,并缓存一个小时,sitemap地址为
          <a href="/index.php?m=sitemap" target="_blank" class="red">点击查看</a>,留空或0则不生成
          </td>
        </tr>
<?php }?>
        
     <tr class="noborder">
          <td class="td_l">开启邮件订阅:</td>
          <td class="vtop rowform">   <input name="postdb[rss_task]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['rss_task'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">
          qq邮箱订阅, <a href="http://open.mail.qq.com/cgi-bin/loginpage?t=loginpage_dy"  class="red" target="_blank">查看申请地址</a>.如有开通,请埴官订阅的链接.
          如果未开通请留空
          <p>站内订阅页面 <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
/index.php?a=rss_task" class="red" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
/index.php?a=rss_task</a></p>
          </td>
        </tr>   
  <tr class="noborder">
          <td class="td_l">开启友链自助申请:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[friend_post]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['friend_post']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[friend_post]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['friend_post']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">开启后,则前后会可由用户自助提交友链申请</td>
        </tr>


      <tr class="noborder">
          <td class="td_l">开启伪静态:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[rewrite]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[rewrite]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">需要空间支持rewrite,否则页面打不开或报错</td>
        </tr>

      <tr class="noborder">
          <td class="td_l">登录关闭伪静态:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[login_rewrite]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['login_rewrite']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[login_rewrite]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['login_rewrite']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">会员登录后是否关闭伪静态,关闭后可提升效率</td>
        </tr>

      <tr class="noborder">
          <td class="td_l">伪静态类型:</td>
          <td class="vtop rowform">

              <input class="radio" type="radio" name="postdb[rewrite_mode]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite_mode']=="0") {?>checked="checked"<?php }?>>
              &nbsp;模式1
              <input class="radio" type="radio" name="postdb[rewrite_mode]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite_mode']=="1") {?>checked="checked"<?php }?>>
              &nbsp;模式2 
               <input class="radio" type="radio" name="postdb[rewrite_mode]" value="2" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite_mode']=="2") {?>checked="checked"<?php }?>>
              &nbsp;模式3 
              </td>
          <td class="vtop tips2">

              <p>模式1 :  网址/m-img-a-main.html或 或 /m-img-id-1885.html</p>
              <p>模式2 :  网址/m/img/a/main.html 或 /m/img/id/1885.html</p>
			  <p>模式3 :  虚拟目录模式 /img/list/ 或  /img/1885.html <span class="red">推荐</span></p>
              <p class="red">修改好后请不要再修改,不然搜索引擎收录后会打不开</p>
          </td>
      </tr>




        <tr class="noborder">
          <td class="td_l">seo关键字获取方式:</td>
          <td class="vtop rowform">
          <input class="radio" type="radio" name="postdb[auto_keywords]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['auto_keywords']==0) {?>checked="checked"<?php }?>>
            &nbsp;远程
            <input class="radio" type="radio" name="postdb[auto_keywords]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['auto_keywords']==1) {?>checked="checked"<?php }?>>
            &nbsp;本地1
            <input class="radio" type="radio" name="postdb[auto_keywords]" value="2" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['auto_keywords']==2) {?>checked="checked"<?php }?>>
            &nbsp;本地2
            
            </td>
          <td class="vtop tips2">
          
          开启后,在发布商品和添加文章时如果没有填写关键字,则可以自动根据标题获取相关关键字,利于SEO.
          <a href="http://help.uz-system.com/?id=114" target="_blank" class="red">详情查看</a>
          <p>远程:即时获取互联网热词,大小0,不占空间,速度比不上本地,关键字长度不可自定义,但准确率高(百川上使用时需要将域名keyword.discuz.com添加到fetch_url白名单)</p>
          <p>本地1,大小13M,非常占空间,本地获取,可自定义获取个数,准确率中(太占安装包大小,所以使用时需要手动下载,下载后将所有文上传到FTP:/web/lib/pscws4/下面)</p>
          <p>本地2,大小1M,本地获取,获取个数不固定,但分词可能不太准,准确率低</p>
          
          </td>
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
