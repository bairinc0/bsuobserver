<td valign="top">
Сводка по заполнению:<br>
{if $empty}
Данные не занесены
{else}
<table border=1>
<tr>
<td>Группа</td>
<td>Не заполнено!</td>
</tr>
{foreach item=elem from=$filled}
<tr>
<td><a href="/observer/show/{$elem.group_code}/">{$elem.group_code}</a></td>
	{if $elem.filled>0}
		<td style="background-color:red">
	{else}
		<td>
	{/if}	
		{$elem.filled}
	</td>
</tr>
{/foreach}
</table>
{/if}
</td>

