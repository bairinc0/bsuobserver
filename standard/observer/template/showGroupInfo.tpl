<td valign="top">
{if $group_ext}
	{foreach item=week from=$week_stat}
		{$week.week_begin} - {$week.week_end} 
		<a href="/observer/edit/?group_id={$week.group_id}&week_begin={$week.week_begin}&week_end={$week.week_end}"><img src="/images/edit.gif" alt="edit" title="������������� ������"></a>
		: {if $week.filled}<font style="color:green">���������{else}<font style="color:red">�����������{/if}</font> <br>
	{/foreach}
{else}
	������, ���������� � �������������� �������
{/if}
</td>

