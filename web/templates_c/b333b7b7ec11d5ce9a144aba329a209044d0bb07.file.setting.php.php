<?php /* Smarty version Smarty-3.1.15, created on 2017-08-19 14:43:55
         compiled from "C:\phpStudy\WWW\TTAE\v4_0\view\admin\weixin\setting.php" */ ?>
<?php /*%%SmartyHeaderCode:168415996e2dcc1f575-74311117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b333b7b7ec11d5ce9a144aba329a209044d0bb07' => 
    array (
      0 => 'C:\\phpStudy\\WWW\\TTAE\\v4_0\\view\\admin\\weixin\\setting.php',
      1 => 1503124956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168415996e2dcc1f575-74311117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5996e2dcc7a6d3_02721667',
  'variables' => 
  array (
    '_G' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5996e2dcc7a6d3_02721667')) {function content_5996e2dcc7a6d3_02721667($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">

  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>

<tr class="noborder">
          <td class="td_l">提示:</td>
          <td class="vtop rowform" colspan="3" >
          微信设定的服务器接口地址为: <?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
/fetch/weixin.php
          <p>添加前,请先将您服务器的IP添加到微信的白名单中,否则无法调用API ,添加方法:进入微信控制台->开发->基本配置->IP白名单->查看->修改</p>
          <p class="red">使用本功能前,确定您的微信已认证了,未认证无法使用接口,认证需300块钱/年,具体在微信后台->设置->微信认证 里面查看是否有认证</p>
          </td>
 
        </tr>
   <tr class="noborder" >
          <td class="td_l">微信号:</td>
          <td class="vtop rowform"><input name="postdb[weixin_id]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_id'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">登录微信公众平台->设置->公众号设置->微信号 复制过就行
          <a href="https://mp.weixin.qq.com/" target="_blank">立即查看</a></td>
        </tr>
<tr class="noborder" >
          <td class="td_l">是否已认证:</td>
          <td class="vtop rowform">

 <input class="radio" type="radio" name="postdb[weixin_apply]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_apply']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
           <input class="radio" type="radio" name="postdb[weixin_apply]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_apply']=='0') {?>checked="checked"<?php }?>>
            &nbsp;否

          </td>
          <td class="vtop tips2">
          <p>您的微信号是否已通过微信认证(交了300块钱后审核通过就代理已认证,没交钱或没通过则是未认证)</p>
          <p>可以在 登录微信公众平台->设置->公众号设置->认证情况 查看</p>
          <p>认证后和未认证权限不一定,正确填写则在做各种操作时能识别你的操作是否权限</p>
         </td>
        </tr>

<tr class="noborder hide" >
          <td class="td_l">微信支付是否已开通:</td>
          <td class="vtop rowform">

        <input class="radio" type="radio" name="postdb[weixin_pay]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_pay']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
           <input class="radio" type="radio" name="postdb[weixin_pay]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_pay']=='0') {?>checked="checked"<?php }?>>
            &nbsp;否

          </td>
          <td class="vtop tips2">
          <p>微信支付是否已开通,只有公司才能申请,有支付功能则会有更多功能可用(必须通过微信认证才能开通)</p>
         </td>
        </tr>

        


      <tr class="noborder" >
          <td class="td_l">微信开放平台AppID:</td>
          <td class="vtop rowform"><input name="postdb[weixin_appid]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_appid'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">登录微信公众平台->开发->基本配置->开发者ID (AppID) 复制过就行
          <a href="https://mp.weixin.qq.com/" target="_blank">立即查看</a></td>
        </tr>

  <tr class="noborder" >
          <td class="td_l">微信开放平台AppSecret:</td>
          <td class="vtop rowform">
          <input name="postdb[weixin_secret_key]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_secret_key'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">登录微信公众平台->开发->基本配置->开发者密码(AppSecret) 复制过就行
          <a href="https://mp.weixin.qq.com/" target="_blank">立即查看</a></td>
        </tr>

         <tr class="noborder" >
          <td class="td_l">微信开放平台密钥:</td>
          <td class="vtop rowform"><input name="postdb[weixin_aeskey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_aeskey'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">登录微信公众平台->开发->基本配置->消息加解密密钥(EncodingAESKey) 复制过就行</td>
        </tr>

         <tr class="noborder" >
          <td class="td_l">微信开放平台token:</td>
          <td class="vtop rowform"><input name="postdb[weixin_token]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_token'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">登录微信公众平台->开发->基本配置->令牌(Token) 复制过就行</td>
        </tr>

<tr class="noborder" >
          <td class="td_l">测试者openid:</td>
          <td class="vtop rowform">
          <input name="postdb[weixin_test_openid]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_test_openid'];?>
" type="text" class="txt" ></td>
          <td class="vtop tips2">
            <p>功能说明:在文章添加完成后,可以先向这个测试者发送一条信息测试,测试无误后再全体发送</p>
            <p>获取方法,先关注公众号,然后向公众号发送 我的ID  就会回复您的openid了,复制后粘贴过来就行</p>
          </td>
        </tr>


<tr class="noborder" >
          <td class="td_l">默认回复内容:</td>
          <td class="vtop rowform">
        <textarea rows="3"  name="postdb[weixin_default_text]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_default_text'];?>
</textarea>
          </td>
          <td class="vtop tips2">
            <p>用户输入未识别关键字时默认的回复内容</p>
          </td>
        </tr>


<tr class="noborder" >
          <td class="td_l">关注后欢迎内容:</td>
          <td class="vtop rowform">
        <textarea rows="3"  name="postdb[weixin_gaunzhu_text]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_gaunzhu_text'];?>
</textarea>
          </td>
          <td class="vtop tips2">
            <p>当用户关注公众号回复的内容,留空则回复上方(默认回复内容)的内容</p>
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
