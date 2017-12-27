{include file='../common_admin/left_bar.php'}

  
  <div class="table_main">

 <form enctype="multipart/form-data"  method="post" action="" >
    <table class="tb tb2 nobdb">
       <tbody>
          <tr class="noborder" >
            <td  class="td_l">自动抓取:</td>
            <td class="vtop rowform">
            <input name="goods_id" value="{$_GET.goods_id}" type="text" class="txt web_num_iid" >
              &nbsp;
              {if $_GET.id}
            <!--   <input type="hidden" name="goods_id" value="{$_GET.id}" /> -->
              {/if}
              <input type="submit" class="btn web_btn"  value="抓取" >
              </td>
            <td class="vtop tips2" >填写商品ID或是商品链接,可自动获取商品信息(商品必须存在商品管理中)</td>
          </tr>
     
          </tbody>
  </table>
   <input type="hidden" name="m" value="{$CURMODULE}" />
      <input type="hidden" name="a" value="{$CURACTION}" />
</form>


      <form enctype="multipart/form-data" method="post">

  <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">标题:<span class="red">(必填)</span></td>
          <td class="vtop rowform"><input name="postdb[title]" value="{$goods.title}" type="text" class="txt ">
          </td>
          <td class="vtop tips2" >文章的必填,展示在推送列表和详情顶部</td>
        </tr>
        
       <tr class="noborder" >
          <td class="td_l">所属专题:<span class="red">(必填)</span></td>
          <td class="vtop rowform">
              <select name="postdb[list_id]" class="select">
              <option value="0">----请选择专题----</option>
              {foreach $news_list item=v}
                      <option value="{$v.id}" {if $v.id == $goods.list_id } selected{/if}>{$v.title}</option>
              {/foreach}
              </select>   
          </td>
          <td class="vtop tips2" >没有选择专题.无法把本文章推送给用户查看</td>
        </tr>
        
      
        
        <tr class="noborder" >
          <td class="td_l">缩略图: <span class="red">(必填)</span></td>
          <td class="vtop rowform _hover_img">
          
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="{$goods.picurl}" type="text" class="txt pic_upload" >
{if $goods.picurl}
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
{/if}
</div>
<a href="{$goods.picurl}" target="_blank" ><img src="{$goods.picurl}"  /></a>

<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />


          </td>
          <td class="vtop tips2" > 
          当前文章的缩略图,必须是本地图,大小250x250以内(图片在站点/assets/目录下),不是本地图片会自动下载到本地目录</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">详情显示缩略图:</td>
          <td class="vtop rowform"><ul>
              <li >
                <input class="radio" type="radio" name="postdb[show_pic]" value="1" {if $goods.show_pic==1} checked="checked"{/if} >
                &nbsp;是</li>
              <li>
                <input class="radio" type="radio" name="postdb[show_pic]" value="0" {if $goods.show_pic==0} checked="checked"{/if}>
                &nbsp;否</li>
            </ul></td>
          <td class="vtop tips2" >文章详情页打开后,是否在顶部显示缩略图</td>
        </tr>
       
        
         <tr class="noborder" >
          <td class="td_l">查看原文url:</td>
          <td class="vtop rowform"><input name="postdb[url]" value="{$goods.url}" type="text" class="txt"></td>
          <td class="vtop tips2" >可空.可填写当前文章跳转的链接地址,(点击查看原文跳转的地址)如跳转到某商品页.或是9.9等页面</td>
        </tr>
      
        <tr class="noborder" >
          <td class="td_l">作者:</td>
          <td class="vtop rowform"><input name="postdb[username]" value="{$goods.username}" type="text" class="txt ">
          </td>
          <td class="vtop tips2" >文章的作者,可空</td>
        </tr>

        <tr class="noborder" >
          <td class="td_l">文章描述:</td>
          <td class="vtop rowform">
           <textarea rows="3" name="postdb[desc]" cols="50" class="textarea">{$goods.desc}</textarea>
          </td>
          <td class="vtop tips2" >可空.文章描述,60字内,不填或空则会默认截取文章内容前60字</td>
        </tr>
       
        
        
        <tr class="noborder" >
          <td class="td_l">文章内容: <span class="red">(必填)</span></td>
          <td class="vtop rowform" colspan="3"><div class="kg_editorContainer"  data-config='{
          "width":"1100","height":"500"
        }'>
<textarea rows="6" name="postdb[content]" cols="70" class="ks-editor-textarea" id="web_editor" >{$goods.content}</textarea>
            </div>
            
            </td>
        </tr>



        <tr class="noborder" >
        <td class="td_l">&nbsp;</td>
          <td class="vtop rowform" colspan="3"><div class="fixsel">
           {if $_GET.id}
              <input type="hidden" name="id" value="{$_GET.id}" />
              {/if}
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交修改">
            </div></td>
        </tr>

        </tbody>
            </table>
<input type="hidden" name="m" value="{$CURMODULE}" />
<input type="hidden" name="a" value="{$CURACTION}" />
</form>



  </div>


{include file='../common_admin/right_bar.php'} 