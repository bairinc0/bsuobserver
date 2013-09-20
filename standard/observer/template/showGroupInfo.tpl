<td valign="top">
{if $group_ext}
	{foreach item=week from=$week_stat}
		{$week.week_begin} - {$week.week_end} 
		<a href="/observer/edit/?group_id={$week.group_id}&week_begin={$week.week_begin}&week_end={$week.week_end}"><img src="/images/edit.gif" alt="edit" title="Редактировать неделю"></a>
		: {if $week.filled}<font style="color:green">Заполнено{else}<font style="color:red">Незаполнено{/if}</font> <br>
	{/foreach}
{else}
	Ошибка, обратитесь к администратору ресурса
{/if}
</td>

