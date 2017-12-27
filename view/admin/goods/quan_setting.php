{include file='../common_admin/left_bar.php'}
<form enctype="multipart/form-data" name="channel_add" method="post">

  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>

<tr class="noborder">
          <td class="td_l">使用方法:</td>
          <td class="vtop rowform" >
              <p>1,填写好大淘客的APPKEY,如果没有可以用官方提供的(不影响站点)</p>
            <p>2,在此处点击立即更新,可一键同步或采集数据</p>
          </td>
            <td class="vtop tips2 "><div class="btn" style="width:60px;line-height: 34px;">
            <a href="{$URL}m=goods&a=update_quan" target="_blank"  style="margin: 0;color: #fff;text-decoration: none;">立即更新</a></div></td>
        </tr>
  

      <tr class="noborder" >
          <td class="td_l">大淘客接口appKey:</td>
          <td class="vtop rowform"><input name="postdb[dataoke_appkey]" value="{$_G.setting.dataoke_appkey}" type="text" class="txt" ></td>
          <td class="vtop tips2">同步领取优惠券商品的接口 <a href="http://www.dataoke.com/ucenter/appkey_apply.asp" target="_blank">立即采集</a></td>
        </tr>

<tr class="noborder" >
          <td class="td_l">最低佣金:</td>
          <td class="vtop rowform"><input name="postdb[dtk_min_bili]" value="{$_G.setting.dtk_min_bili}" type="text" class="txt" ></td>
          <td class="vtop tips2">低于此处设定佣金就不采集入库,0为不限制</td>
        </tr>


 <tr class="td_l noborder" >
        <td >大淘客高佣金模式:</td>
        <td class="vtop rowform"><ul>
            <li >
              <input class="radio" type="radio" name="postdb[dtk_jump]" value="1" {if $_G.setting.dtk_jump==1}checked="checked"{/if} {if !$is_extends} disabled="disabled" {/if}>
              &nbsp;是</li>
            <li>
              <input class="radio" type="radio" name="postdb[dtk_jump]" value="0" {if $_G.setting.dtk_jump==0}checked="checked"{/if} {if !$is_extends} disabled="disabled" {/if}>
              &nbsp;否</li>
              {if !$is_extends} <li class="red">当前文件不存在</li>{/if}
          </ul></td>
        <td class="vtop tips2" >是否开始大淘客高佣金模式,选是的话,必须先申请一个大淘客的CMS,放在根目录名为dtk.php,且能正常打
        <p>然后要下载大淘客转链助手,1个月授权一次就行,不管开不开软件都可以了,授权后会自动申请最高佣金,下载后,登录,进设置->登录授权,授权后就可以关掉了</p>
          <p>接入后,无论是普通,定向,鹊桥,营销计划,全都是按最高来走</p>
        </td>
      </tr>


 <tr class="noborder" >
          <td class="td_l">自动同步栏目:</td>
          <td class="vtop rowform">

  <div class="cl">
  <span style="width:197px;display: block;float:left;">大淘客分类</span>
  <span>网站栏目</span>
</div>

 {foreach from=$dataoke item=v1 key=k1}
      <select disabled="disabled"  class="select" style="width:156px;margin-bottom: 5px;" >
         <option>{$v1}</option>
      </select>

      <select name="web_cate[{$k1}]"  class="select" style="width:156px;margin-bottom: 5px;" >
      <option value="0">--选择对应网站栏目--</option>
        {foreach from=$_G.channels item=v}
         <option value="{$v.fid}" {if $_G.setting.dataoke_cate[$k1] == $v.fid} selected {/if}>{$v.name}</option>
         {/foreach}

      </select>
{/foreach}

          </td>
          <td class="vtop tips2" >设置好分类,在自动采集时就会自动给商品分配栏目</td>
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
<input type="hidden" name="m" value="{$CURMODULE}" />
<input type="hidden" name="a" value="{$CURACTION}" />
</form>
{include file='../common_admin/right_bar.php'}
