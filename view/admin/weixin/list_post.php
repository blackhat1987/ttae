{include file='../common_admin/left_bar.php'}
<form enctype="multipart/form-data" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">专题名称:</td>
          <td class="vtop rowform"><input name="postdb[title]" value="{$data.title}" type="text" class="txt _keywords"></td>
          <td class="vtop tips2" >给自己查看区分的,不会显示给用户</td>
        </tr>


      <tr class="noborder" >
          <td class="td_l">发布到群组:</td>
          <td class="vtop rowform"><input  name="postdb[post_groupid]" value="{$data.post_groupid}" type="text" class="txt"></td>
          <td class="vtop tips2" >留空则发布给所有用户</td>
        </tr>
       
        <tr class="noborder" >
          <td class="td_l">当前状态:</td>
          <td class="vtop rowform"><ul>
            {$data.status_text} 
            </ul></td>
          <td class="vtop tips2" >当前专题是否已正式推送到微信</td>
        </tr>
        
         <tr class="noborder" >
          <td class="td_l">媒体id:</td>
          <td class="vtop rowform">{$data.mediaid}</td>
          <td class="vtop tips2" >发布到微信后返回的id,无法修改,自动获取的</td>
        </tr>

       
        <tr class="noborder" >
        <td class="td_l">&nbsp;</td>
          <td class="vtop rowform" colspan="3"><div class="fixsel"> 
          {if $_GET.id}
              <input type="hidden" name="id" value="{$_GET.id}" />
              {/if}
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="添 加">
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
<input type="hidden" name="m" value="{$CURMODULE}" />
<input type="hidden" name="a" value="{$CURACTION}" />
</form>
{include file='../common_admin/right_bar.php'} 