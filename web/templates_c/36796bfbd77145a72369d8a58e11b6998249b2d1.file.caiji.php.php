<?php /* Smarty version Smarty-3.1.15, created on 2017-10-18 21:44:35
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\admin\caiji.php" */ ?>
<?php /*%%SmartyHeaderCode:250855996e73e1d6e38-77127398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36796bfbd77145a72369d8a58e11b6998249b2d1' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\admin\\caiji.php',
      1 => 1508334273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250855996e73e1d6e38-77127398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e73e25f5c0_86020367',
  'variables' => 
  array (
    '_G' => 0,
    'IMGDIR' => 0,
    'field' => 0,
    'v' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e73e25f5c0_86020367')) {function content_5996e73e25f5c0_86020367($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">

  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>


       <tr class="noborder">
          <td class="td_l">批量采集接口:</td>
          <td class="vtop rowform">
           <input class="radio api_type" type="radio" name="postdb[api_type]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['api_type']==0) {?>checked="checked"<?php }?>>
            &nbsp;淘宝客API

          <input class="radio api_type" type="radio" name="postdb[api_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['api_type']==1) {?>checked="checked"<?php }?>>
            &nbsp;百川API

            
            <div class="cl red" style="font-size: 16px;">
            <p>注意:如果选择了淘客API,就必须保证淘宝客APPKEY和淘宝客secretKey必须存在,且不能为空,不然会整站都打不开,后台也进不去</p>
            <p>注意:如果选择了百川API,就必须保证百川APPKEY和百川secretKey必须存在,且不能为空,不然会整站都打不开,后台也进不去</p>
            </div>

            </td>
          <td class="vtop tips2"><span class="red">
		<p>百川采集的字段更多一些,但是申请麻烦一些,不过有多媒体图片上传,发短信等接口
        <span class="red">(<a href="http://help.uz-system.com/?id=104" target="_blank">点击查看获取方法</a>)</span>推荐</p>
        <p>淘宝客API几乎不用申请,有在阿里妈妈申请了网站,有PID即有API权限
         <span class="red">(<a href="http://help.uz-system.com/?id=106" target="_blank">点击查看获取方法</a>)</span></p>
         </span></td>
        </tr>

          <tr class="noborder">
          <td class="td_l">单品采集接口:</td>
          <td class="vtop rowform">
           <input class="radio _click_show" data-hide=".body_web" type="radio" name="postdb[goods_api_type]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['goods_api_type']==0) {?>checked="checked"<?php }?>>
            &nbsp;淘点金1.0
          <input class="radio _click_show" data-hide=".body_web"  type="radio" name="postdb[goods_api_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['goods_api_type']==1) {?>checked="checked"<?php }?>>
            &nbsp;淘宝API接口
            <input class="radio _click_show"  data-show=".body_web"  type="radio" name="postdb[goods_api_type]" value="2" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['goods_api_type']==2) {?>checked="checked"<?php }?>>
            &nbsp;优淘官方接口

            </td>
          <td class="vtop tips2">
		<p> 因淘宝的API接口经常升级,防止不能采集,提供3种单品采集方式</p>
        <p>淘宝API接口:自动根据后台设置自行分配,</p>
        <p>推荐顺序为:官方->阿里妈妈->百川->淘宝客</p>
        <p>百川和官方接口可采集佣金,其它采集不了佣金</p>
       </td>
        </tr>
        </tbody>

        <tbody class="body_web" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['goods_api_type']!=2) {?>style="display:none;"<?php }?>>
        <tr class="noborder">
          <td class="td_l red">官方接口 :</td>
          <td class="vtop rowform"><input name="postdb[caiji_web]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['caiji_web'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2 red">
          在遇到不能采集时可用优淘官方服务器采集(可采集佣金及销量,不对免费用户开放,如需使用请咨询在线客服)
          </td>
        </tr>
       </tbody>


        <tbody>
        <tr class="noborder">
          <td class="td_l">百川Appkey:</td>
          <td class="vtop rowform"><input name="postdb[appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['appkey'];?>
" type="text" class="txt baichuan_key"></td>
          <td class="vtop tips2">appkey,在采集商品时需要提供
            <span class="red">(<a href="http://help.uz-system.com/?id=104" target="_blank">点击查看获取方法</a>)</span>
          <p>如果是用百川接口,必须填写百川的appkey,图片上传到百川时需要百川的appkey <span class="red">(必须申请)</span></p>
          </td>
        </tr>
        <tr class="noborder">
          <td class="td_l">百川secretKey:</td>
          <td class="vtop rowform"><input name="postdb[secretKey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['secretKey'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">百川secretKey,同appkey相对应</td>
        </tr>
        </tr>

        <tr class="noborder">
          <td class="td_l">淘宝客Appkey:</td>
          <td class="vtop rowform"><input name="postdb[taoke_appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taoke_appkey'];?>
" type="text" class="txt taobao_key"></td>
          <td class="vtop tips2">
          appkey,在采集商品时需要提供
          <span class="red">(<a href="http://help.uz-system.com/?id=106" target="_blank">点击查看获取方法</a>)</span></p>
          <p>如果是淘客API,则需要填写淘宝客的appkey</p>
          </td>
        </tr>
        <tr class="noborder">
          <td class="td_l">淘宝客secretKey:</td>
          <td class="vtop rowform"><input name="postdb[taoke_secretKey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taoke_secretKey'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">淘宝客secretKey,同appkey相对应</td>
        </tr>
        </tr>






 		<tr class="noborder">
          <td class="td_l">安全同步key:</td>
          <td class="vtop rowform"><input name="postdb[syn_key]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['syn_key'];?>
" type="text" class="txt syn_key">&nbsp;<a href="#" class="srandom">生成</a></td>
          <td class="vtop tips2">使用采集插件,或是站点同步时进行验证的KEY,请不要随意池漏安全key,否则会有很大风险,留空不填则禁止采集和同步

          </td>
        </tr>




        <tr class="noborder">
          <td class="td_l">是否采集商品详情:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[get_message]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['get_message']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[get_message]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['get_message']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2"><span class="red">一般不是必要请不要选择,详情非常占数据库空间</span></td>
        </tr>


          <tr class="noborder">
          <td class="td_l">非蛛蜘是否自动跳转爱淘宝:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[robot_jump]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['robot_jump']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[robot_jump]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['robot_jump']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">非蛛蜘是否自动跳转爱淘宝</td>
        </tr>

 <tr class="noborder">
          <td class="td_l">商品链接形式:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[tdj_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['tdj_type']==1) {?>checked="checked"<?php }?>>
            &nbsp;淘点金1.0
            <input class="radio" type="radio" name="postdb[tdj_type]" value="2" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['tdj_type']==2) {?>checked="checked"<?php }?>>
            &nbsp;淘点金2.0 </td>
          <td class="vtop tips2">
          <p>淘点金1.0,不限制域名,只是淘点金网址和pid就可使用</p>
          <p>淘点金2.0,就要求淘点金网址和当前域名匹配,不然会没佣金直接跳到淘宝详情页了</p>
          </td>
        </tr>

      <tr class="noborder" >
          <td class="td_l">淘点金网址:</td>
          <td class="vtop rowform">
          <input name="postdb[taodianjing_url]" value="<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['taodianjing_url']) {?><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taodianjing_url'];?>
<?php }?>" type="text" class="txt"></td>
          <td class="vtop tips2">在阿里妈妈申请淘点金时验证成功网址,只有这个pid和此网址才能正常使用淘点金!</td>
        </tr>
         <tr class="noborder" >
          <td class="td_l">淘点金pid:</td>
          <td class="vtop rowform"><input name="postdb[pid]" value="<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['pid']&&$_smarty_tpl->tpl_vars['_G']->value['setting']['pid']!='mm_13204895_7438858_25680126') {?><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['pid'];?>
<?php }?>" type="text" class="txt"></td>
          <td class="vtop tips2">来自阿里妈妈推广位生成的.格式为:mm_000000000_11111111_2222222
          </td>
        </tr>




         <tr class="noborder hide" >
          <td class="td_l">高佣接口PID:</td>
          <td class="vtop rowform"><input name="postdb[tk_pid]" value="<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['tk_pid']) {?><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tk_pid'];?>
<?php }?>" type="text" class="txt"></td>
          <td class="vtop tips2">
          独立的高佣PID,也可以和淘点金API一致.格式为:mm_000000000_11111111_2222222,<span class="red">当前PID必须是授权这个账号下创建的</span>
          </td>
        </tr>

        
        <tr class="noborder hide" >
          <td class="td_l">高佣token:</td>
          <td class="vtop rowform">
       <?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tk_token'];?>
</td>
          <td class="vtop tips2">授权得到的token,禁止编辑</td>
        </tr>

        <tr class="noborder hide" >
          <td class="td_l">token到期时间:</td>
          <td class="vtop rowform"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['tk_token_time'];?>
</td>
          <td class="vtop tips2">您必须在这个时间之前记得要重新授权</td>
        </tr>

         <tr class="noborder hide" >
          <td class="td_l">授权信息:</td>
          <td class="vtop rowform">
                <textarea rows="3"  name="tk_data"  cols="50" class="tarea"></textarea>
          </td>
          <td class="vtop tips2 _hover_img" >
          <span class="red">将授权得到的信息填进来,提交后会自识别token及到期时间,不授权留空</span>
          <a href="https://oauth.taobao.com/authorize?response_type=code&client_id=23565277&redirect_uri=http://api.00o.cn/oauth.php&state=bGlmZXRpbnxkNjUzYzkwMWViODkyNDJmMWRlZTEzOTAxODZlZGVlYnwxMzIwNDg5NQ%3d%3d&view=web" target="_blank" >点我去授权</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/tk_api.png" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/tk_api.png" alt=""></a>
          </td>

        </tr>




        <tr class="noborder hide">
          <td class="td_l">自动更需要更新的字段:</td>
          <td class="vtop rowform">
          <input type="hidden" name="postdb[field]" value="" />
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <label for="<?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<input type="checkbox" name="field[<?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
]" class="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==1) {?> checked="checked" <?php }?>/></label>&nbsp;
          <?php } ?>
           </td>
          <td class="vtop tips2">
          <p>全不选则默认全部都检查和更新,不选中则不更新</p>
          <p>因为系统会自动检查商品上下架或卖出数量等信息然后同部更新站内的数据</p>
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
