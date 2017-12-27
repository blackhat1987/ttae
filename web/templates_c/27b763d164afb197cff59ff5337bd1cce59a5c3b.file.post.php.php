<?php /* Smarty version Smarty-3.1.15, created on 2017-08-20 22:41:18
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\nav\post.php" */ ?>
<?php /*%%SmartyHeaderCode:1827359999f8e315de4-12185073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b763d164afb197cff59ff5337bd1cce59a5c3b' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\nav\\post.php',
      1 => 1462958761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1827359999f8e315de4-12185073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'URL' => 0,
    'nav' => 0,
    '_G' => 0,
    'k' => 0,
    'v' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59999f8e383886_55019695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59999f8e383886_55019695')) {function content_59999f8e383886_55019695($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post"  >

<!--<?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>-->
<div class="table_top">
<a href="/index.php?m=nav&id=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" target="_blank">前台查看</a>&nbsp;&nbsp;
 <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=post&id=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
">发布商品</a>
 </div>
<!--<?php }?>-->
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">导航名称:</td>
          <td class="vtop rowform"><input name="postdb[name]" value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >必填</td>
        </tr>

        <tr class="noborder" >
          <td class="td_l">导航链接</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >站内地址以/index.php开头或是以?开头(如:/index.php?m=img&a=list ,?m=img&a=list)</td>
        </tr>

        <tr class="noborder" >
          <td class="td_l">当前导航class:</td>
          <td class="vtop rowform"><input name="postdb[classname]" value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['classname'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2" >一般不用填写</td>
        </tr>


        <tr class="noborder" >
          <td class="td_l">导航排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['nav']->value['sort'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2" >越大越靠前</td>
        </tr>


        <tr class="noborder" >
          <td class="td_l">打开方式:</td>
          <td class="vtop rowform"><ul>
              <li >
                <input class="radio" type="radio" name="postdb[target]" value="0" <?php if ($_smarty_tpl->tpl_vars['nav']->value['target']==0) {?> checked="checked"<?php }?> >
                &nbsp;当前页面</li>
              <li>
                <input class="radio" type="radio" name="postdb[target]" value="1" <?php if ($_smarty_tpl->tpl_vars['nav']->value['target']==1) {?> checked="checked"<?php }?>>
                &nbsp;新窗口</li>
            </ul></td>
          <td class="vtop tips2" >点击导航后打开的方式</td>
        </tr>


        <tr class="noborder" >
          <td class="td_l">导航类型:</td>
          <td class="vtop rowform"><ul>



          <select name="postdb[type]" class="select" >
           <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['nav']->value['type']==$_smarty_tpl->tpl_vars['k']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
             <?php } ?>

            </select>


            </ul></td>
          <td class="vtop tips2" >设置导航在哪个位置显示</td>
        </tr>



        <tr class="noborder" >
        <td class="td_l">&nbsp;</td>
          <td colspan="2"><div class="fixsel">
          <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" />
           <?php }?>
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交修改"></div></td>
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
