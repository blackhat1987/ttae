<?php /* Smarty version Smarty-3.1.15, created on 2017-08-18 22:02:57
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\ttae\goods_list.php" */ ?>
<?php /*%%SmartyHeaderCode:15646598a800dc22097-25085639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '312e5e9060135fb158e71b6c4687772b47a22f11' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\ttae\\goods_list.php',
      1 => 1503062919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15646598a800dc22097-25085639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_598a800dc6b5a3_86469318',
  'variables' => 
  array (
    'goods' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598a800dc6b5a3_86469318')) {function content_598a800dc6b5a3_86469318($_smarty_tpl) {?>  <div class="i2_goodscond ">
        <ul class="i2_goodsul">

         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
             <li class="i2_goodsli shadow">

                <div class="i2_goodsd">
                   <a class="daddfavorite" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
"></a>
                   <?php if ($_smarty_tpl->tpl_vars['v']->value['new']==1) {?><i class="index2_ico i2_gdp1 i2_gnew0" style=""></i><?php }?>

                   <?php if ($_smarty_tpl->tpl_vars['v']->value['over']==1) {?><a class="i2_gdpover2"></a><?php }?>
                   <a class="i2_goodsjzbk" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank" >
                   <img width="250" height="250" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_250x250.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"  class="ver_img" >
                   </a>
                   <a class="i2_goodsname" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>


              <div class="cl">
                  <div class="i2_goodprice">
                        <span class="i2_gprw1">￥</span>
                        <b class="i2_gprw2"><?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price']-$_smarty_tpl->tpl_vars['v']->value['juan_price'];?>
</b>
                          <div class="i2_gprw3">
                           <?php if ($_smarty_tpl->tpl_vars['v']->value['zk']>0) {?> <span class="index2_ico i2_gprw4"><?php echo $_smarty_tpl->tpl_vars['v']->value['zk'];?>
折</span><?php }?>
                             <?php if ($_smarty_tpl->tpl_vars['v']->value['price']>0) {?><del class="i2_gprw5">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</del><?php }?>
                          </div>
                          <?php if ($_smarty_tpl->tpl_vars['v']->value['juan_url']) {?>
                          <div class="juan_btn">
                          <?php if ($_smarty_tpl->tpl_vars['v']->value['dtk_id']>0) {?>
                          <a href="/dtk.php?r=index/middleurl&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['dtk_id'];?>
"  rel="nofollow" target="_blank">领券</a>
                          <?php } else { ?>
                          <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['juan_url'];?>
"  rel="nofollow" target="_blank">领券</a>
                          <?php }?>
                          </div>
                          <?php } else { ?>
                             <div class="goods_sum" >售:<?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</div>
                          <?php }?>

                      </div>

                  <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?>
                     <a class="i2_gbuybtn btgotobuy_isover4"  href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" ><span><?php echo $_smarty_tpl->tpl_vars['v']->value['h'];?>
点开始</span></a>
                   <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>
                     <a class="i2_gbuybtn btgotobuy_isover6"  href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" >已下架</a>
                  <?php } else { ?>
                   <a class="i2_gbuybtn btgotobuy_isover1" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
">
                  去看看</a>

                  <?php }?>
            </div>

                


                </div>
            </li>
  <?php } ?>
         </ul>

            <div style="clear:both;"></div>
         </div>
<?php }} ?>
