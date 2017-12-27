{include file='../common_admin/left_bar.php'}
<form enctype="multipart/form-data" method="POST"  action="">
  
  <div class="table_top">
 <div class="table_top_l">共找到({$count})条文章信息</div>
     <div class="table_top_r">
        <ul>


<li><a href="{$URL}m=weixin&a=main"><span>全部</span></a></li>
<li {if  $_GET.status =='0'}class="on"{/if}><a href="{$URL}m=weixin&a=main&status=0"><span>未发布</span></a></li>
<li {if  $_GET.status ==2}class="on"{/if}><a href="{$URL}m=weixin&a=main&status=2"><span>已上传(未发布)</span></a></li>
<li {if  $_GET.status ==1}class="on"{/if}><a href="{$URL}m=weixin&a=main&status=1"><span>已发布</span></a></li>


        </ul>
  </div>  

</div>

    <div class="table_main">
  <table class="tb tb2 ">
    <tbody>      
      <tr class="hover">
        <th>id</th>

        <th  class="goods_title">标题</th>
        <th >文章条数</th>
        <th>状态</th>
        <th>操作选择</th>
        <th>添加时间</th>
        <th>发布时间</th>
        <th>编辑</th>
        <th>删除</th>
      </tr>
      <!--{foreach from=$goods item=v}-->
      <tr class="hover">

        <td>{$v.id}</td>
        <td><a href="?m=weixin&a=news_main&list_id={$v.id}" >{$v.title}</a></td>
        <td >{$v.count}</td>
        <td >{$v.status_text}</td>
        <td>


{if $v.status == 0 }
        {if $v.count == 0 }
           <span title="必须最少有一条文章才能预览">没有文章,无法上传</span>
        {else}
         <a href="{$URL}m=weixin&a=upload&id={$v.id}" class="red">立即上传</a>
        {/if}
{elseif $v.status == 1 }
   <a href="{$URL}m=weixin&a=preview&id={$v.id}" class="red _confirm" data-msg="您确定立即预览?每天最多可预览100次">立即预览</a>&nbsp;
   <a href="{$URL}m=weixin&a=upload&id={$v.id}" class="red">重新上传</a>

{elseif $v.status == 2 }

 <a href="{$URL}m=weixin&a=post_weixin&id={$v.id}" class="red _confirm" data-msg="您确定立即全网正式推送?全网推送前,请先预览成功后再推送,以确否是否一切都正常">立即全网推送</a>&nbsp;
 <a href="{$URL}m=weixin&a=preview&id={$v.id}" class="red _confirm" data-msg="您确定立即预览?每天最多可预览100次">立即预览</a>&nbsp;
 <a href="{$URL}m=weixin&a=upload&id={$v.id}" class="red _confirm" data-msg="您确定重新上传吗?">重新上传</a>&nbsp;

{elseif $v.status == 3 }
    {if $v.msg_status}
         {$v.msg_status}
    {else}
      等待接受推送结果 &nbsp;
       <a href="{$URL}m=weixin&a=check_news&id={$v.id}" class="red _confirm" data-msg="您确定向微信查询结果吗?">立即查询</a>&nbsp; 
    {/if}

{/if}


      </td>
        <td >{$v.dateline}</td>
        <td >{$v.posttime}</td>
        <td><a href="{$URL}m=weixin&a=list_post&id={$v.id}">编辑</a></td>
        <td><a href="{$URL}m=weixin&a=list_del&id={$v.id}" >删除</a></td>
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