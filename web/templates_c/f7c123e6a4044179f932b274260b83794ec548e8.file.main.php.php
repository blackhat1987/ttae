<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 20:56:55
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\nav\main.php" */ ?>
<?php /*%%SmartyHeaderCode:130215996e417617b56-15689977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7c123e6a4044179f932b274260b83794ec548e8' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\nav\\main.php',
      1 => 1462951408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130215996e417617b56-15689977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_G' => 0,
    '_GET' => 0,
    'k' => 0,
    'v' => 0,
    'goods' => 0,
    'k1' => 0,
    'v1' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e41769bf28_75126159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e41769bf28_75126159')) {function content_5996e41769bf28_75126159($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data"  method="post" action="" >


 <div class="table_top">
  <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条导航信息</div>
      <div class="table_top_r">
        <ul>

<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=nav&a=main"><span>全部</span></a></li>

 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['types']==((string)$_smarty_tpl->tpl_vars['k']->value)) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=nav&a=main&types=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</span></a></li>
 <?php } ?>
  </ul>

</div>


  </div>

  <div class="table_main">

  <table class="tb tb2 nobdb" >
    <tbody>

      <tr class="hover" >
        <td class="td25">删除</td>
        <td class="td25">排序</td>
        <td class="td28">导航名称</td>

        <td class="td28">导航链接</td>
         <td class="td28">导航class</td>
        <td class="td28">新窗口打开</td>

        <td class="td28">导航类型</td>

         <td class="td28">编辑</td>
         <td class="td28">删除</td>
         <td>添加时间</td>

      </tr>
      </tbody>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f"]['index']++;
?>
     <tbody>
      <tr class="hover" >
        <td class="td25">
       <?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&nbsp;<input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del del_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['f']['index'];?>
" />
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  class="ids"/></td>
        <td class="td25"><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" class="w40"></td>
        <td class="td28"> <input type="text" name="name[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"></td>
         <td class="td28"> <input type="text" name="url[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"></td>
		<td class="td28"> <input type="text" name="classname[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['classname'];?>
"></td>
        <td class="td28">

        <input type="checkbox" class="checkbox" name="target[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['target']=="1") {?> checked <?php }?>/>

        </td>

        <td class="td28">
            <select name="type[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" >
             <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==$_smarty_tpl->tpl_vars['k1']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
</option>
             <?php } ?>

            </select></td>
        <td class="td28">
        <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=nav&a=post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
        <td class="td28"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=nav&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
        <td class="_dgmdate" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
"></td>
      </tr>
      </tbody>

    <?php } ?>
	 <tbody class="tb tb2 ">
      <tr>
       <td class="td25"><input type="checkbox" class="_del_all" />
          反选</td>
       <td><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="7"><div class="fixsel">
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
