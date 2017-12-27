{include file='../common_admin/left_bar.php'}
<form enctype="multipart/form-data" method="POST"  action="">
  
  <div class="table_top">
 <div class="table_top_l">共找到({$count})条文章信息</div>
     <div class="table_top_r">
        <ul>


<li><a href="{$URL}m=weixin&a=main"><span>全部</span></a></li>
<li {if  $_GET.is_post ==1}class="on"{/if}><a href="{$URL}m=weixin&a=main&is_post=1"><span>已发布</span></a></li>
<li {if  $_GET.is_post =='0'}class="on"{/if}><a href="{$URL}m=weixin&a=main&is_post=0"><span>未发布</span></a></li>

        </ul>
  </div>  

</div>

    <div class="table_main">
  <table class="tb tb2 ">
    <tbody>      
      <tr class="hover">
        <th>id</th>

        <th  class="goods_title">标题</th>
        <th >所属专题</th>
        <th>原文跳转url</th>
        <th>作者</th>
        <th>发布时间</th>
        <th>编辑</th>
        <th>删除</th>
      </tr>
      <!--{foreach from=$goods item=v}-->
      <tr class="hover">

        <td><a href="/index.php?m=weixin&id={$v.id}" target="_blank">{$v.id}</a></td>
        <td class="goods_title">{$v.title}</td>
        <td >{$v.news_title}</td>
        <td >{if $v.url}<a href="{$v.url}" target="_blank">点击查看</a>{else}没有设定{/if}</td>
        <td >{$v.username} &nbsp;</td>
        <td >{$v.dateline}</td>
        <td><a href="{$URL}m=weixin&a=post&id={$v.id}">编辑</a></td>
        <td><a href="{$URL}m=weixin&a=news_del&id={$v.id}" >删除</a></td>
      </tr>
      <!--{/foreach}-->
      <tr>
        <td colspan="8">
        <div class="y">{$showpage}</div>
        </td>
      </tr>
    </tbody>
  </table>
  </div>
<input type="hidden" name="m" value="{$CURMODULE}" />
<input type="hidden" name="a" value="{$CURACTION}" />
</form>
{include file='../common_admin/right_bar.php'} 