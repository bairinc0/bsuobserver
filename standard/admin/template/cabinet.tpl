<td valign="top">
<b>������ �������</b><br>������������ <b>{$username}</b><br>��� ������: <b>{$status}</b><br><br>��������� �������:<br>
{if $order == 1}
<h2>��������</h2>
<a href="{$panelCat}">���������� ����������</a><br>



<h2>������</h2>
<a href="{$panelImage}">���������� �������������</a><br>
<a href="{$panelFile}">���������� �������</a><br>
<a href="panelUser.php">���������� ��������������</a><br>
<a href="{$panelQ}">���������� ��������</a><br>
<a href="{$panelGB}">���������� �������� ������</a><br>
<a href="{$albums}">���������� ������������</a><br>
<a href="{$panelNews}">���������� ���������</a><br>
{else}
<a href="/observer">������� � �������������� ������������</a>
{/if}
</td>

