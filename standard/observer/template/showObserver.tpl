<td valign="top">
������ �� ����������:<br>
{if $empty}
������ �� ��������
{else}
<table border=1>
<tr>
<td>������</td>
<td>�� ���������!</td>
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

