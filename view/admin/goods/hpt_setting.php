{include file='../common_admin/left_bar.php'}
<form enctype="multipart/form-data" name="channel_add" method="post">

  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>

<tr class="noborder">
          <td class="td_l">使用方法:</td>
          <td class="vtop rowform" >
              <p>1,填写好好品推的APPKEY,如果没有可以用官方提供的(不影响站点)</p>
            <p>2,在此处点击立即更新,可一键同步或采集数据</p>
          </td>
            <td class="vtop tips2 "><div class="btn" style="width:60px;line-height: 34px;">
            <a href="{$URL}m=goods&a=update_hpt" target="_blank"  style="margin: 0;color: #fff;text-decoration: none;">立即更新</a></div></td>
        </tr>
  

      <tr class="noborder" >
          <td class="td_l">好品推接口appKey:</td>
          <td class="vtop rowform"><input name="postdb[hpt_appkey]" value="{$_G.setting.hpt_appkey}" type="text" class="txt" ></td>
          <td class="vtop tips2">同步领取优惠券商品的接口 <a href="https://www.haopintui.net/user.php?action=open" target="_blank">立即申请</a></td>
        </tr>


<tr class="noborder" >
          <td class="td_l">最低佣金:</td>
          <td class="vtop rowform"><input name="postdb[hpt_min_bili]" value="{$_G.setting.hpt_min_bili}" type="text" class="txt" ></td>
          <td class="vtop tips2">低于此处设定佣金就不采集入库,0为不限制</td>
        </tr>

 <tr class="noborder" >
          <td class="td_l">自动同步栏目:</td>
          <td class="vtop rowform">

  <div class="cl">
  <span style="width:197px;display: block;float:left;">好品推分类</span>
  <span>网站栏目</span>
</div>

 {foreach from=$list item=v1 key=k1}
      <select disabled="disabled"  class="select" style="width:156px;margin-bottom: 5px;" >
         <option>{$v1}</option>
      </select>

      <select name="web_cate[{$k1}]"  class="select" style="width:156px;margin-bottom: 5px;" >
      <option value="0">--选择对应网站栏目--</option>
        {foreach from=$_G.channels item=v}
         <option value="{$v.fid}" {if $_G.setting.hpt_cate[$k1] == $v.fid} selected {/if}>{$v.name}</option>
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
